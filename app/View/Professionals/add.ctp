<div class="professionals form">
<?php echo $this->Form->create('Professional'); ?>
	<fieldset>
		<legend><?php echo __('Add Professional'); ?></legend>
	<?php
		echo $this->Form->input('golf_club_id');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('gender');
		echo $this->Form->input('pro_first_name');
		echo $this->Form->input('pro_last_name');
		echo $this->Form->input('other_pro_details');
		echo $this->Form->input('Courriel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Professionals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Golf Clubs'), array('controller' => 'golf_clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Golf Club'), array('controller' => 'golf_clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
