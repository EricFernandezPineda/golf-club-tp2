<div class="lockers form">
<?php echo $this->Form->create('Locker'); ?>
	<fieldset>
		<legend><?php echo __('Add Locker'); ?></legend>
	<?php
		echo $this->Form->input('golf_club_id');
		echo $this->Form->input('locker_location');
		echo $this->Form->input('locker_rental_amount');
		echo $this->Form->input('other_locker_details');
		echo $this->Form->input('Member');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lockers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Golf Clubs'), array('controller' => 'golf_clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Golf Club'), array('controller' => 'golf_clubs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
