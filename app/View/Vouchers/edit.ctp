<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>

<?php echo $this->Form->create('Voucher'); ?>
	<fieldset>
		<h3><?php echo __('Edit Voucher Status'); ?></h3>
	<?php
		echo $this->Form->input('id');
                echo $this->Form->input('status',array('options'=>array(
                    'redeemed'=>'redeemed',
                    'unredeemed'=>'unredeemed',
                )));
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
