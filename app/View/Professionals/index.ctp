<div class="professionals index">
	<h2><?php echo __('Professionals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('golf_club_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('pro_first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('pro_last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('other_pro_details'); ?></th>
			<th><?php echo $this->Paginator->sort('Courriel'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($professionals as $professional): ?>
	<tr>
		<td><?php echo h($professional['Professional']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($professional['GolfClub']['id'], array('controller' => 'golf_clubs', 'action' => 'view', $professional['GolfClub']['id'])); ?>
		</td>
		<td><?php echo h($professional['Professional']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($professional['Professional']['gender']); ?>&nbsp;</td>
		<td><?php echo h($professional['Professional']['pro_first_name']); ?>&nbsp;</td>
		<td><?php echo h($professional['Professional']['pro_last_name']); ?>&nbsp;</td>
		<td><?php echo h($professional['Professional']['other_pro_details']); ?>&nbsp;</td>
		<td><?php echo h($professional['Professional']['Courriel']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $professional['Professional']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $professional['Professional']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $professional['Professional']['id']), null, __('Are you sure you want to delete # %s?', $professional['Professional']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Professional'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Golf Clubs'), array('controller' => 'golf_clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Golf Club'), array('controller' => 'golf_clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
