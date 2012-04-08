<?php
App::uses('AppController', 'Controller');
/**
 * Scores Controller
 *
 * @property Score $Score
 */
class ScoresController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Score->recursive = 0;
		$this->set('scores', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Score->id = $id;
		if (!$this->Score->exists()) {
			throw new NotFoundException(__('Invalid score'));
		}
		$this->set('score', $this->Score->read(null, $id));
	}
}
