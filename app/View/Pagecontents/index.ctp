<?php
// in your view file
$this->Html->css('cake.generic', null, array('inline' => false));
?>

<div class="pagecontents index">
	<h2><?php echo __('Home - Page content manager'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('page'); ?></th>
			<th><?php echo $this->Paginator->sort('content'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pagecontents as $pagecontent): ?>
	<tr>
		
		<td><?php echo h($pagecontent['Pagecontent']['page']); ?>&nbsp;</td>
		<td><?php echo ($pagecontent['Pagecontent']['content']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pagecontent['Pagecontent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pagecontent['Pagecontent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pagecontent['Pagecontent']['id']), null, __('Are you sure you want to delete # %s?', $pagecontent['Pagecontent']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
<li><?php echo $this->Html->link(__('Gift voucher management'), array('controller' => 'vouchers')); ?> </li>
	</ul>
</div>
