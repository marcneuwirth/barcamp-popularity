<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="index">
	<?php echo $this->Html->image('barcamp.jpg', array('class' => 'splash')); ?>
	<?php echo $this->Form->create('User', array('type' => 'get', 'action' => 'find')); ?>
	<?php echo $this->Form->input('User.name', array('label' => false, 'AUTOCOMPLETE' => 'OFF')); ?>
	<?php echo $this->Form->end('Search'); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'tags', 'action' => 'rank')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scores'), array('controller' => 'scores', 'action' => 'index')); ?> </li>
	</ul>
</div>
