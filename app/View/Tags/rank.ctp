<div class="users index">
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('User.name', 'name');?></th>
			<th><?php echo __('title'); ?></th>
			<th><?php echo $this->Paginator->sort('User.affiliation', 'affiliation');?></th>
			<th><?php echo $this->Paginator->sort('User.website', 'website');?></th>
			<th><?php echo $this->Paginator->sort('User.twitter', 'twitter');?></th>
			<th><?php echo $this->Paginator->sort('Tag.Average', 'average');?></th>
			<th><?php echo $this->Paginator->sort('Tag.Sum', 'sum');?></th>
			
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($this->Title->get($user['Tag']['Average'])); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($user['User']['affiliation'], array('controller' => 'users', 'action' => 'find_affiliation', $user['User']['affiliation'])); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($user['User']['website'], $user['User']['website']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($user['User']['twitter'], 'http://twitter.com/' . $user['User']['twitter']); ?>&nbsp;</td>
		<td><?php echo h($user['Tag']['Average']); ?>&nbsp;</td>
		<td><?php echo h($user['Tag']['Sum']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'rank_view', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'tags', 'action' => 'rank')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scores'), array('controller' => 'scores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Search'), array('controller' => 'pages', 'action' => 'display', 'home')); ?> </li>
	</ul>
</div>
