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
}
