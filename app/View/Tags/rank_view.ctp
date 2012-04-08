<div class="users view">
<h2><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Affiliation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['User']['affiliation'], array('controller' => 'users', 'action' => 'find', $user['User']['affiliation'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['User']['website'], $user['User']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['User']['twitter'], 'http://twitter.com/' . $user['User']['twitter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Average'); ?></dt>
		<dd>
			<?php echo h($user['Tag']['Average']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sum'); ?></dt>
		<dd>
			<?php echo h($user['Tag']['Sum']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'rank')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scores'), array('controller' => 'scores', 'action' => 'index')); ?> </li>
	</ul>
</div>
