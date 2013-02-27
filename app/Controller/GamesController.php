<?php
class GamesController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Session');
	
	var $paginate = array (
		'fields' => array('Game.id', 'Game.name', 'Game.filesize', 'Game.slug'),
		'limit' => 2000,
		'order' => array(
			'Game.name' => 'asc'
		)
	);
	
	public function index(){
		$data = $this->paginate('Game');
		$this->set('games', $data);
	}
	
	public function view($permalink = null) {
		require('../Vendor/markdown.php');
		$game = $this->Game->findBySlug($permalink);
		$this->set('game', $game);
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
	
	public function edit($permalink = null) {
		$game = $this->Game->findBySlug($permalink);
		if ($this->request->is('get')) {
			$this->request->data = $game;
		} else {
			if ($this->Game->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"><button class="close" data-dismiss="alert">x</button>Your game has been updated</div>');
				$this->redirect(array('action' => 'view', $permalink));	
			} else {
				$this->Session->setFlash('<div class="alert alert-error"><button class="close" data-dismiss="alert">x</button>Unable to update the game.</div>');
			}
		}
	}
	
	public function delete($permalink) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		$game = $this->Game->findBySlug($permalink);
		if ($this->Game->delete($game)) {
			$this->Session->setFlash('
				<div class="alert alert-success">
					<button class="close" data-dismiss="alert">&times;</button>
					The game was deleted successfully.
				</div>
			');
			$this->redirect(array('action' => 'index'));
		}
	}
}

?>