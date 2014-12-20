<?php
App::uses('AppController', 'Controller');
/**
 * Lockers Controller
 *
 * @property Locker $Locker
 * @property PaginatorComponent $Paginator
 */
class LockersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Locker->recursive = 0;
		$this->set('lockers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Locker->exists($id)) {
			throw new NotFoundException(__('Invalid locker'));
		}
		$options = array('conditions' => array('Locker.' . $this->Locker->primaryKey => $id));
		$this->set('locker', $this->Locker->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Locker->create();
			if ($this->Locker->save($this->request->data)) {
				$this->Session->setFlash(__('The locker has been saved.'), array ('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locker could not be saved. Please, try again.'), array ('class' => 'alert alert-danger'));
			}
		}
		$golfClubs = $this->Locker->GolfClub->find('list');
		$members = $this->Locker->Member->find('list');
		$this->set(compact('golfClubs', 'members'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Locker->exists($id)) {
			throw new NotFoundException(__('Invalid locker'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Locker->save($this->request->data)) {
				$this->Session->setFlash(__('The locker has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locker could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Locker.' . $this->Locker->primaryKey => $id));
			$this->request->data = $this->Locker->find('first', $options);
		}
		$golfClubs = $this->Locker->GolfClub->find('list');
		$members = $this->Locker->Member->find('list');
		$this->set(compact('golfClubs', 'members'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Locker->id = $id;
		if (!$this->Locker->exists()) {
			throw new NotFoundException(__('Invalid locker'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Locker->delete()) {
			$this->Session->setFlash(__('The locker has been deleted.'));
		} else {
			$this->Session->setFlash(__('The locker could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
