<div class="membersLockers index">
	<h2><?php echo __('Members Lockers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('member_id'); ?></th>
			<th><?php echo $this->Paginator->sort('locker_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($membersLockers as $membersLocker): ?>
	<tr>
		<td><?php echo h($membersLocker['MembersLocker']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($membersLocker['Member']['id'], array('controller' => 'members', 'action' => 'view', $membersLocker['Member']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($membersLocker['Locker']['id'], array('controller' => 'lockers', 'action' => 'view', $membersLocker['Locker']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $membersLocker['MembersLocker']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $membersLocker['MembersLocker']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $membersLocker['MembersLocker']['id']), null, __('Are you sure you want to delete # %s?', $membersLocker['MembersLocker']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Members Locker'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lockers'), array('controller' => 'lockers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locker'), array('controller' => 'lockers', 'action' => 'add')); ?> </li>
	</ul>
</div>
