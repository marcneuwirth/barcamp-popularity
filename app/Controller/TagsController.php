<?php
App::uses('AppController', 'Controller');
/**
 * Tags Controller
 *
 * @property Tag $Tag
 */
class TagsController extends AppController {


/**
 * rank method
 *
 * @return void
 */
	public function rank() {
		
		$this->paginate = array(
			'fields' => array(
				'User.id',
				'User.name',
				'User.twitter',
				'User.affiliation',
				'User.website',
				'avg(Score.count) as Average',
				'sum(Score.count) as Sum',
			),
			'contain' => array(
				'Tag' => array(
					'Score'
				)
			),
			'group' => array(
				'User.id'
			),
			'order' => array(
				'Average' => 'desc',
				'Sum' => 'desc'
			)
		);
		$this->set('users', $this->paginate('Tag', array(), array('Average')));
	}


/**
 * rank view method
 * @param string $id
 * @return void
 */
	public function rank_view($id = null) {
		$this->set('user', $this->Tag->find('first', array(
			'fields' => array(
				'User.id',
				'User.name',
				'User.twitter',
				'User.affiliation',
				'User.website',
				'avg(Score.count) as Average',
				'sum(Score.count) as Sum',
			),
			'contain' => array(
				'Tag' => array(
					'Score'
				)
			),
			'conditions' => array(
				'User.id' => $id
			)
		)));
	}

}
