<?php
class PagesController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Session');

	
	public function index(){
		$this->set('pages', $this->Page->find('all'));
	}
	
	public function view($id = null) {
		global $page;
		require('../Vendor/markdown.php');
		$this->Page->id = $id;
		$this->set('page', $this->Page->read());
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
	
	public function edit($id = null) {
		$this->Page->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Page->read();
		} else {
			if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"><button class="close" data-dismiss="alert">x</button>Your page has been updated</div>');
				$this->redirect(array('action' => 'view', $id));	
			} else {
				$this->Session->setFlash('<div class="alert alert-error"><button class="close" data-dismiss="alert">x</button>Unable to update the page.</div>');
			}
		}
	}
}