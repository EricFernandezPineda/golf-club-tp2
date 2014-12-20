<div class="golfClubs view">
<h2><?php echo __('Golf Club'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($golfClub['GolfClub']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Club Name'); ?></dt>
		<dd>
			<?php echo h($golfClub['GolfClub']['club_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year Established'); ?></dt>
		<dd>
			<?php echo h($golfClub['GolfClub']['year_established']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Club Adress'); ?></dt>
		<dd>
			<?php echo h($golfClub['GolfClub']['club_adress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Club Details'); ?></dt>
		<dd>
			<?php echo h($golfClub['GolfClub']['other_club_details']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Golf Club'), array('action' => 'edit', $golfClub['GolfClub']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Golf Club'), array('action' => 'delete', $golfClub['GolfClub']['id']), null, __('Are you sure you want to delete # %s?', $golfClub['GolfClub']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Golf Clubs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Golf Club'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lockers'), array('controller' => 'lockers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locker'), array('controller' => 'lockers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professionals'), array('controller' => 'professionals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professional'), array('controller' => 'professionals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lockers'); ?></h3>
	<?php if (!empty($golfClub['Locker'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Golf Club Id'); ?></th>
		<th><?php echo __('Locker Location'); ?></th>
		<th><?php echo __('Locker Rental Amount'); ?></th>
		<th><?php echo __('Other Locker Details'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($golfClub['Locker'] as $locker): ?>
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
<div class="related">
	<h3><?php echo __('Related Members'); ?></h3>
	<?php if (!empty($golfClub['Member'])): ?>
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
	<?php foreach ($golfClub['Member'] as $member): ?>
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
<div class="related">
	<h3><?php echo __('Related Professionals'); ?></h3>
	<?php if (!empty($golfClub['Professional'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Golf Club Id'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Pro First Name'); ?></th>
		<th><?php echo __('Pro Last Name'); ?></th>
		<th><?php echo __('Other Pro Details'); ?></th>
		<th><?php echo __('Courriel'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($golfClub['Professional'] as $professional): ?>
		<tr>
			<td><?php echo $professional['id']; ?></td>
			<td><?php echo $professional['golf_club_id']; ?></td>
			<td><?php echo $professional['date_of_birth']; ?></td>
			<td><?php echo $professional['gender']; ?></td>
			<td><?php echo $professional['pro_first_name']; ?></td>
			<td><?php echo $professional['pro_last_name']; ?></td>
			<td><?php echo $professional['other_pro_details']; ?></td>
			<td><?php echo $professional['Courriel']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'professionals', 'action' => 'view', $professional['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'professionals', 'action' => 'edit', $professional['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'professionals', 'action' => 'delete', $professional['id']), null, __('Are you sure you want to delete # %s?', $professional['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Professional'), array('controller' => 'professionals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
