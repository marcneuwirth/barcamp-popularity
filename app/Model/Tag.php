<?php
App::uses('AppModel', 'Model');
/**
 * Tag Model
 *
 * @property User $User
 */
class Tag extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed


	public $virtualFields = array(
		'Average' => 'avg(Score.count)',
		'Sum' => 'sum(Score.count)',
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'type' => 'inner'
		),
		'Score' => array(
			'className' => 'Score',
			'foreignKey' => 'name',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'type' => 'inner'
		)
	);
}
