<div class="membersLockers view">
<h2><?php echo __('Members Locker'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($membersLocker['MembersLocker']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo $this->Html->link($membersLocker['Member']['id'], array('controller' => 'members', 'action' => 'view', $membersLocker['Member']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locker'); ?></dt>
		<dd>
			<?php echo $this->Html->link($membersLocker['Locker']['id'], array('controller' => 'lockers', 'action' => 'view', $membersLocker['Locker']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Members Locker'), array('action' => 'edit', $membersLocker['MembersLocker']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Members Locker'), array('action' => 'delete', $membersLocker['MembersLocker']['id']), null, __('Are you sure you want to delete # %s?', $membersLocker['MembersLocker']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Members Lockers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Members Locker'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lockers'), array('controller' => 'lockers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locker'), array('controller' => 'lockers', 'action' => 'add')); ?> </li>
	</ul>
</div>
