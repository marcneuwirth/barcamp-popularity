<?php
App::uses('AppModel', 'Model');
/**
 * Score Model
 *
 * @property Tag $Tag
 */
class Score extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'name';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $hasMany = array(
		'Tag' => array(
			'className' => 'Tag',
			'foreignKey' => 'name',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
