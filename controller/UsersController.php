<?php
class UsersController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('login', 'register');
		$this->Auth->deny('index');
	}
	
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}
	
	public function view($id = null) {
		$this->redirect(array('action' => 'index'));
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}
	
	public function register() {
		$authUser = $this->Auth->user();
		if ($authUser) {
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post')) {
			if (!$this->User->findByUsername($this->data['User']['username'])) {
				$this->User->create();
				$this->request->data['User']['role'] = 'viewer';
				if ($this->User->save($this->request->data, true, array('username', 'password', 'email'))) {
					$this->Session->setFlash('
						<div class="alert alert-success">
							You have registered successfully. Please login.
						</div>
					');
					$this->redirect(array('action' => 'login'));
				} else {
					$this->Session->setFlash('
						<div class="alert alert-error">
							We were unable to register you. Please confirm that you have entered all information correctly.
						</div>
					');
				}
			} else {
				$this->Session->setFlash('
					<div class="alert alert-error">
						The username you entered is already registered. Perhaps try logging in?
					</div>
				');
				$this->redirect(array('action' => 'register'));
			}			
		}
	}

	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
			unset($this->request->data['User']['password']);
		}
	}
	
	public function delete($id = null){
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()){
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function login() {
		$authUser = $this->Auth->user();
		if ($authUser) {
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post')) {
			if ($this->Auth->login()){
				$this->redirect($this->Auth->redirect());
			}  else {
				$this->Session->setFlash(__('
					<div class="alert alert-error">
						<a class="close" data-dismiss="alert" href="#">&times;</a>
						Invalid username or password.
					</div>
				'));
				$this->set('error', true);
			}
		}
	}
	
	public function logout() {
		$this->redirect($this->Auth->logout());
	}
}
?>