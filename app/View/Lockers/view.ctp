<div class="lockers view">
<h2><?php echo __('Locker'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($locker['Locker']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Golf Club'); ?></dt>
		<dd>
			<?php echo $this->Html->link($locker['GolfClub']['id'], array('controller' => 'golf_clubs', 'action' => 'view', $locker['GolfClub']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locker Location'); ?></dt>
		<dd>
			<?php echo h($locker['Locker']['locker_location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locker Rental Amount'); ?></dt>
		<dd>
			<?php echo h($locker['Locker']['locker_rental_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Locker Details'); ?></dt>
		<dd>
			<?php echo h($locker['Locker']['other_locker_details']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Locker'), array('action' => 'edit', $locker['Locker']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Locker'), array('action' => 'delete', $locker['Locker']['id']), null, __('Are you sure you want to delete # %s?', $locker['Locker']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lockers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locker'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Golf Clubs'), array('controller' => 'golf_clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Golf Club'), array('controller' => 'golf_clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Members'); ?></h3>
	<?php if (!empty($locker['Member'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Golf Club Id'); ?></th>
		<th><?php echo __('Member First Name'); ?></th>
		<th><?php echo __('Member Last Name'); ?></th>
		<th><?php echo __('Member Email'); ?></th>
		<th><?php echo __('Member Address'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($locker['Member'] as $member): ?>
		<tr>
			<td><?php echo $member['id']; ?></td>
			<td><?php echo $member['golf_club_id']; ?></td>
			<td><?php echo $member['member_first_name']; ?></td>
			<td><?php echo $member['member_last_name']; ?></td>
			<td><?php echo $member['member_email']; ?></td>
			<td><?php echo $member['member_address']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'members', 'action' => 'view', $member['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'members', 'action' => 'edit', $member['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'members', 'action' => 'delete', $member['id']), null, __('Are you sure you want to delete # %s?', $member['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
