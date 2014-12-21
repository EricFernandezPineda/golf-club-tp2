<div class="golfClubs form">
<?php echo $this->Form->create('GolfClub'); ?>
	<fieldset>
		<legend><?php echo __('Add Golf Club'); ?></legend>
	<?php
		echo $this->Form->input('club_name');
		echo $this->Form->input('year_established');
		echo $this->Form->input('club_adress');
		echo $this->Form->input('other_club_details');
		echo $this->Form->input('category_id');
        echo $this->Form->input('subcategory_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Golf Clubs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lockers'), array('controller' => 'lockers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locker'), array('controller' => 'lockers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professionals'), array('controller' => 'professionals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professional'), array('controller' => 'professionals', 'action' => 'add')); ?> </li>
		
        <li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php
	$this->Js->get('#GolfClubCategoryId')->event('click', 
	$this->Js->request(array('controller'=>'subcategories',
		'action'=>'getByCategory'), array(
		'update'=>'#GolfClubSubcategoryId',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array('isForm' => true,
		'inline' => true
		))
	))
);
?>
