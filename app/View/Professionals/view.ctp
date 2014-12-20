<div class="professionals view">
<h2><?php echo __('Professional'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Golf Club'); ?></dt>
		<dd>
			<?php echo $this->Html->link($professional['GolfClub']['id'], array('controller' => 'golf_clubs', 'action' => 'view', $professional['GolfClub']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pro First Name'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['pro_first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pro Last Name'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['pro_last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Pro Details'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['other_pro_details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Courriel'); ?></dt>
		<dd>
			<?php echo h($professional['Professional']['Courriel']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Professional'), array('action' => 'edit', $professional['Professional']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Professional'), array('action' => 'delete', $professional['Professional']['id']), null, __('Are you sure you want to delete # %s?', $professional['Professional']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Professionals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professional'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Golf Clubs'), array('controller' => 'golf_clubs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Golf Club'), array('controller' => 'golf_clubs', 'action' => 'add')); ?> </li>
	</ul>
</div>
