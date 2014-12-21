<?php
App::uses('AppController', 'Controller');
/**
 * GolfClubs Controller
 *
 * @property GolfClub $GolfClub
 * @property PaginatorComponent $Paginator
 */
class GolfClubsController extends AppController {

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
		$this->GolfClub->recursive = 0;
		$this->set('golfClubs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GolfClub->exists($id)) {
			throw new NotFoundException(__('Invalid golf club'));
		}
		$options = array('conditions' => array('GolfClub.' . $this->GolfClub->primaryKey => $id));
		$this->set('golfClub', $this->GolfClub->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GolfClub->create();
			if ($this->GolfClub->save($this->request->data)) {
				$this->Session->setFlash(__('The golf club has been saved.'), array ('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The golf club could not be saved. Please, try again.'), array ('class' => 'alert alert-danger'));
			}
		}
		$categories = $this->GolfClub->Subcategory->Category->find('list');
        $subcategories = $this->GolfClub->Subcategory->find('list');
        //$subcategories = array('choisir categorie');
        $this->set(compact('categories', 'subcategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GolfClub->exists($id)) {
			throw new NotFoundException(__('Invalid golf club'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GolfClub->save($this->request->data)) {
				$this->Session->setFlash(__('The golf club has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The golf club could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GolfClub.' . $this->GolfClub->primaryKey => $id));
			$this->request->data = $this->GolfClub->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GolfClub->id = $id;
		if (!$this->GolfClub->exists()) {
			throw new NotFoundException(__('Invalid golf club'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GolfClub->delete()) {
			$this->Session->setFlash(__('The golf club has been deleted.'));
		} else {
			$this->Session->setFlash(__('The golf club could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
