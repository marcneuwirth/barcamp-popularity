<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

	/**
	 * Find
	 *
	 * @return void
	 */

	public function find($name = null) {
		$this->User->recursive = 0;
		if($this->request->is('post')){
			if($this->request->data &&
				isset($this->request->data['User']) && 
				isset($this->request->data['User']['name'])
			) {
				$name = $this->request->data['User']['name'];
			}
			else {
				$this->redirect(array('controller' => 'pages',  'action' => 'display', 'home'));
			}
		}	

		if($name){
			$this->paginate = array(
				'conditions' => array(
					'OR' => array(
						'User.name LIKE' => "%$name%",
						'User.twitter LIKE' => "%$name%",
						'User.affiliation LIKE' => "%$name%",
						'User.website LIKE' => "%$name%"
					)
				)
			);
		}
		$this->set('users', $this->paginate());
	}

	/**
	 * Find Ajax
	 *
	 * @param string $name
	 * @return list of matching users
	 */

		public function find_ajax($name = null) {
			$this->layout = 'ajax';
			$this->autoLayout = false;
			$this->autoRender = false;
			$response = array();

			if($name) {
				$this->User->recursive = 0;
				$data = $this->User->find('all', array(
					'conditions' => array(
						'OR' => array(
							'User.name LIKE' => "%$name%",
							'User.twitter LIKE' => "%$name%",
							'User.affiliation LIKE' => "%$name%",
							'User.website LIKE' => "%$name%"
						)
					)
				));

				$response = json_encode(
					array(
						'users' => $data
					)
				);
			}

			echo $response;
			return;
		}
}
