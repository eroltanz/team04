<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>
<div class="pagecontents form">
<?php echo $this->Form->create('Pagecontent'); ?>
	<fieldset>
		<legend><?php echo __('Edit page'); ?></legend>
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('page');
		//echo $this->Form->input('content');
		 echo $this->Tinymce->input('Pagecontent.content', array( 
            'label' => 'Content' 
            ),array( 
                'language'=>'en' 
            ), 
            'full' 
        ); 
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pagecontent.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Pagecontent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pagecontents'), array('action' => 'index')); ?></li>
	</ul>
</div>
