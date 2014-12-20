<?php
App::uses('AppController', 'Controller');
/**
 * MembersLockers Controller
 *
 * @property MembersLocker $MembersLocker
 * @property PaginatorComponent $Paginator
 */
class MembersLockersController extends AppController {

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
		$this->MembersLocker->recursive = 0;
		$this->set('membersLockers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MembersLocker->exists($id)) {
			throw new NotFoundException(__('Invalid members locker'));
		}
		$options = array('conditions' => array('MembersLocker.' . $this->MembersLocker->primaryKey => $id));
		$this->set('membersLocker', $this->MembersLocker->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MembersLocker->create();
			if ($this->MembersLocker->save($this->request->data)) {
				$this->Session->setFlash(__('The members locker has been saved.'), array ('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The members locker could not be saved. Please, try again.'), array ('class' => 'alert alert-danger'));
			}
		}
		$members = $this->MembersLocker->Member->find('list');
		$lockers = $this->MembersLocker->Locker->find('list');
		$this->set(compact('members', 'lockers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MembersLocker->exists($id)) {
			throw new NotFoundException(__('Invalid members locker'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MembersLocker->save($this->request->data)) {
				$this->Session->setFlash(__('The members locker has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The members locker could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MembersLocker.' . $this->MembersLocker->primaryKey => $id));
			$this->request->data = $this->MembersLocker->find('first', $options);
		}
		$members = $this->MembersLocker->Member->find('list');
		$lockers = $this->MembersLocker->Locker->find('list');
		$this->set(compact('members', 'lockers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MembersLocker->id = $id;
		if (!$this->MembersLocker->exists()) {
			throw new NotFoundException(__('Invalid members locker'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MembersLocker->delete()) {
			$this->Session->setFlash(__('The members locker has been deleted.'));
		} else {
			$this->Session->setFlash(__('The members locker could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
