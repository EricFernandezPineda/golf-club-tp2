<div class="lockers index">
	<h2><?php echo __('Lockers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('golf_club_id'); ?></th>
			<th><?php echo $this->Paginator->sort('locker_location'); ?></th>
			<th><?php echo $this->Paginator->sort('locker_rental_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('other_locker_details'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lockers as $locker): ?>
	<tr>
		<td><?php echo h($locker['Locker']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($locker['GolfClub']['id'], array('controller' => 'golf_clubs', 'action' => 'view', $locker['GolfClub']['id'])); ?>
		</td>
		<td><?php echo h($locker['Locker']['locker_location']); ?>&nbsp;</td>
		<td><?php echo h($locker['Locker']['locker_rental_amount']); ?>&nbsp;</td>
		<td><?php echo h($locker['Locker']['other_locker_details']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $locker['Locker']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $locker['Locker']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $locker['Locker']['id']), null, __('Are you sure you want to delete # %s?', $locker['Locker']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Locker'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Golf Clubs'), array('controller' => 'golf_clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Golf Club'), array('controller' => 'golf_clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
