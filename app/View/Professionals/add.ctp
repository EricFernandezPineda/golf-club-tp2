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
		echo $this->Form->input('Courriel',array('class' => 'ui-autocomplete',
               'id' => 'autocomplete'));
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
<?php
		    //let's load jquery libs from google
		  $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array('inline' => false));
		  $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array('inline' => false));
		
		  //load file for this view to work on 'autocomplete' field
		  $this->Html->script('View/Professionals/add', array('inline' => false));
		  ?>
