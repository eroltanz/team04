<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>

<div id="mainContent">

<h3><?php echo __('Gift Voucher'); ?></h3>

<?php echo $this->Form->create('Voucher', array('controller' => 'vouchers', 'action' => 'preview', 'name' => 'information')); ?>
<p>Please enter the following information (fill out all the fields)</p>

<?php echo $this->Form->input('price',array('options'=>array(
    '55'=>'30 minutes: $55.00',
    '70'=>'45 minutes: $70.00',
    '85'=>'60 minutes: $85.00',
    '105'=>'75 minutes: $105.00'
))); ?>
<br><br>
<hr></hr> 
<br>
<?php
echo $this->Form->input('from_name', array('label' => 'Your Name', 'style' => 'width:400px'));
echo $this->Form->input('phoneNumber_1', array('label' => 'Your Mobile Number', 'style' => 'width:400px'));
echo $this->Form->input('from_email', array('label' => 'Your Email', 'style' => 'width:400px'));
echo $this->Form->input('to_name', array('label' => 'Recipient', 'style' => 'width:400px'));
echo $this->Form->input('phoneNumber_2', array('label' => 'Recipient\'s mobile number', 'style' => 'width:400px'));

echo $this->Form->input('address', array( 'label' => 'Recipient\'s Address', 'style' => 'width:400px'));
echo $this->Form->input('message', array( 'label' => 'Message', 'style' => 'height:35px'));
?>

<?php echo $this->Form->end('Next') ?>&nbsp;&nbsp;&nbsp;&nbsp;   
</form>

</div>
