<?php
class GamesController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Session');
	
	var $paginate = array (
		'fields' => array('Game.id', 'Game.name', 'Game.filesize'),
		'limit' => 2000,
		'order' => array(
			'Game.name' => 'asc'
		)
	);
	
	public function index(){
		$data = $this->paginate('Game');
		$this->set('games', $data);
	}
	
	public function view($id = null) {
		$this->Game->id = $id;
		$this->set('game', $this->Game->read());
	}
	
	public function add() {
		if ($this->request->is('post')) {
			if ($this->Game->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"><button class="close" data-dismiss="alert">x</button>Your game has been saved.</div>');
				$this->redirect(array('action' => 'view'));
				} else {
					$this->Session->setFlash('<div class="alert alert-error"><button class="close" data-dismiss="alert">x</button>Unable to add your game.</div>');
				}
		}
	}
	
	public function edit($id = null) {
		$this->Game->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Game->read();
		} else {
			if ($this->Game->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"><button class="close" data-dismiss="alert">x</button>Your game has been updated</div>');
				$this->redirect(array('action' => 'view', $id));	
			} else {
				$this->Session->setFlash('<div class="alert alert-error"><button class="close" data-dismiss="alert">x</button>Unable to update the game.</div>');
			}
		}
	}
}

?>