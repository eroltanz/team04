<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>

<?php
$this->Html->css(array('search/demo_page', 'search/demo_table'), 'stylesheet', array('inline' => false));
?>
<?php echo $this->Html->script(array('jquery', 'search_bar/jquery.js')); ?>
<?php echo $this->Html->script(array('jquery', 'search_bar/jquery.dataTables.js')); ?>
<?php echo $this->Html->script(array('jquery', 'search_bar/jquery.js')); ?>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#example').dataTable();
    } );
</script>

<h3>View all the vouchers sold</h3>
<div id="demo"> 
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
 <thead>
    <tr>
        <th>ID</th>
        <th>From</th>
        <th>Email</th>
        <th>To</th>
        <th>Recipient's number</th>
        <th>Date</th>
        <th>Price</th>
        <th>Status</th>
        <th>View</th>
        <th>Action</th>
    </tr>
</thead>
   <?php foreach ($vouchers as $voucher): ?>
	<tr class="gradeA">
                <td><?php echo h($voucher['Voucher']['id']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['from_name']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['from_email']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['to_name']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['phoneNumber_2']); ?>&nbsp;</td>
               
                <td><?php echo h($voucher['Voucher']['date_purchase']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['price']); ?>&nbsp;</td>
                <td><?php echo h($voucher['Voucher']['status']); ?>&nbsp;</td>
                <td><?php echo $this->Html->link(__('View'), array("controller"=>"vouchers", "action"=>"view_1", $voucher["Voucher"]["id"]));?></td>
                <td><?php echo $this->Html->link(__('Edit Status'), array('action' => 'edit', $voucher['Voucher']['id'])); ?></td>
                
	</tr>
<?php endforeach; ?>
</tbody>
</table>    
</div> 

<?php 
$urlPDF = array('controller'=>'vouchers','action'=>'view_pdf');
echo $this->Form->button('View PDF', array('onclick' => "location.href='".$this->Html->url($urlPDF)."'"));
?>

