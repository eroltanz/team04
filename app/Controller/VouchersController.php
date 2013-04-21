<?php

class VouchersController extends AppController {

    public function index() {
        $this->Voucher->recursive = 0;
        $this->set('vouchers', $this->paginate());
				$this->layout="admin";
    }

    public function view($id = null) {
        $this->Voucher->id = $id;
        $this->set('voucher', $this->Voucher->read());
     
				
    }

    public function sendEmail($id = null) {
        App::uses('CakeEmail', 'Network/Email');

        $this->Voucher->id = $id;
        if (!$this->Voucher->exists()) {
            throw new NotFoundException(__("Invalid Voucher"));
        }
        $aVoucher = $this->Voucher->find('first', array('conditions' => array('Voucher.id' => $id)));
        $email = new CakeEmail();
        $email->config('default');
        $email->emailFormat('html');
        $email->template('html_email');
        $email->from('zhangluqi16@gmail.com');
        $email->to($aVoucher['Voucher']['from_email']);
        $email->viewVars(array('aVoucher' => $aVoucher));
        $email->subject('Your GIFT VOUCHER from MUSCLEWORKS MASSAGE');
        $email->sendAs = 'html';
        $email->charset = 'utf-8';
        $email->send();
       
    }

   

    public function preview() {
			
        date_default_timezone_set('Australia/Melbourne');
        $time = date('M j Y');
        if ($this->request->is('post')) {
            $this->Voucher->create();
            $info = array(
                'price'=>  $this->request->data['Voucher']['price'],
                'date_purchase'=>$time,
               'from_name' => strtoupper($this->request->data['Voucher']['from_name']),
                'phoneNumber_1'=>$this->request->data['Voucher']['phoneNumber_1'],
                'from_email'=>$this->request->data['Voucher']['from_email'],
                'phoneNumber_2'=>$this->request->data['Voucher']['phoneNumber_2'],
                'to_name'=>strtoupper($this->request->data['Voucher']['to_name']),
              
                'address'=>$this->request->data['Voucher']['address'],
                'message'=>$this->request->data['Voucher']['message'],
                    );
            
            if ($this->Voucher->save($info)) {
                $this->Session->setFlash(__('The voucher has been saved'));
                $lastID=  $this->Voucher->getLastInsertId();
                $this->set('voucher_data',  $this->Voucher->find('first',  array('conditions'=>array('Voucher.id'=>$lastID))));
                $this->render('previewVoucher');
            } else {
                $this->Session->setFlash(__('The voucher could not be saved. Please, try again.'));
				 $this->render('gvinformation');
            }
            
        }
    }
    
	public function gvinformation() {

	}
	
      public function view_1($id = null) {
	  		$this->layout="admin";
        $this->Voucher->id = $id;
        $this->set('voucher', $this->Voucher->read());
    }
    
     	public function edit($id = null) {
				$this->layout="admin";
		if (!$this->Voucher->exists($id)) {
			throw new NotFoundException(__('Invalid voucher'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Voucher->save($this->request->data)) {
				$this->Session->setFlash(__('The voucher has been saved'));
				$this->redirect(array('controller'=>'vouchers','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The voucher could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Voucher.' . $this->Voucher->primaryKey => $id));
			$this->request->data = $this->Voucher->find('first', $options);
		}
	}
        
 function view_pdf() 
{ 
$conditions = array('order' => 'id ASC'); 
$this->set('vouchers', $this->Voucher->find('all',$conditions)); 

$this->layout = 'pdf'; //this will use the pdf.ctp layout 
$this->render(); 
} 

 function view_pdf1($id=null) 
{ 
 
 $this->Voucher->id = $id;
 $this->set('vouchers', $this->Voucher->find('first'));

 $this->layout = 'pdf'; //this will use the pdf.ctp layout 
 $this->render(); 
} 
}
?>