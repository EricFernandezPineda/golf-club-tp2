<?php
App::uses('AppController', 'Controller');
/**
 * Professionals Controller
 *
 * @property Professional $Professional
 * @property PaginatorComponent $Paginator
 */
class ProfessionalsController extends AppController {

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
		$this->Professional->recursive = 0;
		$this->set('professionals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Professional->exists($id)) {
			throw new NotFoundException(__('Invalid professional'));
		}
		$options = array('conditions' => array('Professional.' . $this->Professional->primaryKey => $id));
		$this->set('professional', $this->Professional->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('ajax')) {
                    $term = $this->request->query('term');
                    $Professionals = $this->Professional->getProfessionalNames($term);
                    $this->set(compact('professionalNames'));
                    $this->set('_serialize', 'professionalNames');
                }
		if ($this->request->is('post')) {
			$this->Professional->create();
			if ($this->Professional->save($this->request->data)) {
				$this->Session->setFlash(__('The professional has been saved.'), array ('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The professional could not be saved. Please, try again.'), array ('class' => 'alert alert-danger'));
			}
		}
		$golfClubs = $this->Professional->GolfClub->find('list');
		$this->set(compact('golfClubs'));
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Professional->exists($id)) {
			throw new NotFoundException(__('Invalid professional'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Professional->save($this->request->data)) {
				$this->Session->setFlash(__('The professional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The professional could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Professional.' . $this->Professional->primaryKey => $id));
			$this->request->data = $this->Professional->find('first', $options);
		}
		$golfClubs = $this->Professional->GolfClub->find('list');
		$this->set(compact('golfClubs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Professional->id = $id;
		if (!$this->Professional->exists()) {
			throw new NotFoundException(__('Invalid professional'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Professional->delete()) {
			$this->Session->setFlash(__('The professional has been deleted.'));
		} else {
			$this->Session->setFlash(__('The professional could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
