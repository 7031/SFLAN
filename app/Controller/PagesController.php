<?php
class PagesController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Session');

	
	public function index(){
		$this->set('pages', $this->Page->find('all'));
	}
	
	public function view($permalink = null) {
		require('../Vendor/markdown.php');
		$page = $this->Page->findBySlug($permalink);
		$this->set('page', $page);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"><button class="close" data-dismiss="alert">x</button>Your page has been saved.</div>');
				$this->redirect(array('action' => 'view'));
				} else {
					$this->Session->setFlash('<div class="alert alert-error"><button class="close" data-dismiss="alert">x</button>Unable to add your post.</div>');
				}
		}
	}
	
	public function edit($permalink = null) {
		$page = $this->Page->findBySlug($permalink);
		if ($this->request->is('get')) {
			$this->request->data = $page;
		} else {
			if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"><button class="close" data-dismiss="alert">x</button>Your page has been updated</div>');
				$this->redirect(array('action' => 'view'));	
			} else {
				$this->Session->setFlash('<div class="alert alert-error"><button class="close" data-dismiss="alert">x</button>Unable to update the page.</div>');
			}
		}
	}
	
	public function delete($permalink) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		$page = $this->Page->findBySlug($permalink);
		if ($this->Page->delete($page)) {
			$this->Session->setFlash('
				<div class="alert alert-success">
					<button class="close" data-dismiss="alert">&times;</button>
					The page was deleted successfully.
				</div>
			');
		}
	}
}