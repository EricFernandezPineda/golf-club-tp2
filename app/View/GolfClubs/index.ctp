<div class="golfClubs index">
	<h2><?php echo __('Golf Clubs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('club_name'); ?></th>
			<th><?php echo $this->Paginator->sort('year_established'); ?></th>
			<th><?php echo $this->Paginator->sort('club_adress'); ?></th>
			<th><?php echo $this->Paginator->sort('other_club_details'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($golfClubs as $golfClub): ?>
	<tr>
		<td><?php echo h($golfClub['GolfClub']['id']); ?>&nbsp;</td>
		<td><?php echo h($golfClub['GolfClub']['club_name']); ?>&nbsp;</td>
		<td><?php echo h($golfClub['GolfClub']['year_established']); ?>&nbsp;</td>
		<td><?php echo h($golfClub['GolfClub']['club_adress']); ?>&nbsp;</td>
		<td><?php echo h($golfClub['GolfClub']['other_club_details']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $golfClub['GolfClub']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $golfClub['GolfClub']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $golfClub['GolfClub']['id']), null, __('Are you sure you want to delete # %s?', $golfClub['GolfClub']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Golf Club'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Lockers'), array('controller' => 'lockers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locker'), array('controller' => 'lockers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professionals'), array('controller' => 'professionals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professional'), array('controller' => 'professionals', 'action' => 'add')); ?> </li>
	</ul>
</div>
