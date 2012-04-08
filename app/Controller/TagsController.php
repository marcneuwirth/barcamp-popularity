<?php
App::uses('AppController', 'Controller');
/**
 * Tags Controller
 *
 * @property Tag $Tag
 */
class TagsController extends AppController {

	public $helpers = array('Title');
/**
 * rank method
 *
 * @return void
 */
	public function rank() {
		
		$this->paginate = Set::merge($this->paginate, array(
			'fields' => array(
				'User.id',
				'User.name',
				'User.twitter',
				'User.affiliation',
				'User.website',
				'Tag.Average',
				'Tag.Sum'
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
				'Tag.Average' => 'desc',
				'Tag.Sum' => 'desc'
			)
		));
		$this->set('users', $this->paginate());
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
				'Tag.Average',
				'Tag.Sum'
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

		$this->set('tags', $this->Tag->find('all', array(
			'fields' => array(
				'Tag.name',
				'Score.count'
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

	/**
	 * view method
	 * @param string $name
	 * @return void
	 */
		public function view($name = null) {

			$this->paginate = Set::merge($this->paginate, array(
				'fields' => array(
					'User.id',
					'User.name',
					'User.twitter',
					'User.affiliation',
					'User.website',
					'Tag.Average',
					'Tag.Sum'
				),
				'contain' => array(
					'Tag' => array(
						'Score'
					)
				),
				'conditions' => array(
					'Tag.name' => $name
				),
				'group' => array(
					'Tag.user_id'
				),
				'order' => array(
					'Tag.Average' => 'desc',
					'Tag.Sum' => 'desc'
				)
			));
			$this->set('users', $this->paginate());
		}

}
