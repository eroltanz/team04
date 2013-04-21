<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>

<div id="mainContent">

<h3><?php echo __('Preview Voucher'); ?></h3>
	<?php
	echo	$this->Html->image('Muscleworks.png');
	?>
      
	<dl>
		<dt><?php echo __('Recipient\'s name'); ?></dt>
		<dd>
			<?php echo h($voucher_data['Voucher']['to_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recipient\'s mobile'); ?></dt>
		<dd>
			<?php echo h($voucher_data['Voucher']['phoneNumber_2']); ?>
			&nbsp;
		</dd>
				<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($voucher_data['Voucher']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($voucher_data['Voucher']['message']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($voucher_data['Voucher']['price']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($voucher_data['Voucher']['date_purchase']); ?>
			&nbsp;
		</dd>
	</dl>


<?php echo $this->Html->link(__('Make Payment'), array('controller'=>'pages','action'=>'paypal'))?>

</div>