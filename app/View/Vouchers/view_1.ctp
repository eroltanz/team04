<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>

<h3>Voucher Details</h3>
<table cellpadding="0" cellspacing="0">
    <tr>
        <th>ID</th>
        <th><?php echo $voucher['Voucher']['id'] ?></th>
    </tr>
    <tr>
        <th>Sender</th>
        <th><?php echo $voucher['Voucher']['from_name'] ?></th>
    </tr>
    <tr>
        <th>Sender's number</th>
        <th><?php echo $voucher['Voucher']['phoneNumber_1'] ?></th>
    </tr>
    <tr>
        <th>Sender's email</th>
        <th><?php echo $voucher['Voucher']['from_email'] ?></th>
    </tr>
    <tr>
        <th>Recipient</th>
        <th><?php echo $voucher['Voucher']['to_name'] ?></th>
    </tr>
    <tr>
        <th>Recipient's number</th>
        <th><?php echo $voucher['Voucher']['phoneNumber_2'] ?></th>
    </tr>

    <tr>
        <th>Address</th>
        <th><?php echo $voucher['Voucher']['address'] ?></th>
    </tr>
    <tr>
        <th>Price</th>
        <th><?php echo $voucher['Voucher']['price'] ?></th>
    </tr>
    <tr>
        <th>Message</th>
        <th><?php echo $voucher['Voucher']['message'] ?></th>
    </tr>
</table>
<br><br><br><br><br>
<?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?>

<?php echo $this->Html->link(__('Email'), array('action' => 'sendEmail', $voucher['Voucher']['id'])); ?>

<?php
$urlPDF = array('controller' => 'Vouchers', 'action' => 'view_pdf1' . $voucher['Voucher']['id']);
echo $this->Form->button(__('Generate PDF'), array('onclick' => "location.href='" . $this->Html->url($urlPDF) . "'", 'id' => 'buttonPDF'));
?>