<div class="members view">
<h2><?php echo __('Member'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($member['Member']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Golf Club'); ?></dt>
		<dd>
			<?php echo $this->Html->link($member['GolfClub']['id'], array('controller' => 'golf_clubs', 'action' => 'view', $member['GolfClub']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member First Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['member_first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member Last Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['member_last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member Email'); ?></dt>
		<dd>
			<?php echo h($member['Member']['member_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member Address'); ?></dt>
		<dd>
			<?php echo h($member['Member']['member_address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Member'), array('action' => 'edit', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Member'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Golf Clubs'), array('controller' => 'golf_clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Golf Club'), array('controller' => 'golf_clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lockers'), array('controller' => 'lockers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locker'), array('controller' => 'lockers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lockers'); ?></h3>
	<?php if (!empty($member['Locker'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Golf Club Id'); ?></th>
		<th><?php echo __('Locker Location'); ?></th>
		<th><?php echo __('Locker Rental Amount'); ?></th>
		<th><?php echo __('Other Locker Details'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($member['Locker'] as $locker): ?>
		<tr>
			<td><?php echo $locker['id']; ?></td>
			<td><?php echo $locker['golf_club_id']; ?></td>
			<td><?php echo $locker['locker_location']; ?></td>
			<td><?php echo $locker['locker_rental_amount']; ?></td>
			<td><?php echo $locker['other_locker_details']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lockers', 'action' => 'view', $locker['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lockers', 'action' => 'edit', $locker['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lockers', 'action' => 'delete', $locker['id']), null, __('Are you sure you want to delete # %s?', $locker['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Locker'), array('controller' => 'lockers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
