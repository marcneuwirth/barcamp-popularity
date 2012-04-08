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
			<?php echo $this->Html->link($user['User']['affiliation'], array('controller' => 'users', 'action' => 'find_affiliation', $user['User']['affiliation'])); ?>
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
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($this->Title->get($user['Tag']['Average'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'tags', 'action' => 'rank')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scores'), array('controller' => 'scores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Search'), array('controller' => 'pages', 'action' => 'display', 'home')); ?> </li>
	</ul>
</div>
<?php if (!empty($tags)):?>
<div class="related">
	<h3><?php echo __('User Tags');?></h3>
	
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Score'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tags as $tag): ?>
		<tr>
			<td><?php echo $tag['Tag']['name'];?></td>
			<td><?php echo $tag['Score']['count'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tags', 'action' => 'view', $tag['Tag']['name'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>

</div>
<?php endif; ?>
