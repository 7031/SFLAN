<?php
class SongsController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Session');
	
	var $paginate = array (
		'fields' => array('Song.id', 'Song.title', 'Song.artist', 'Song.url'),
		'maxLimit' => 10000,
		'limit' => 10000,
		'order' => array(
			'Song.artist' => 'asc'
		)
	);
	
	public function index($artist = null){
		$number = $this->Song->find('count');
		$this->set('count', $number);
		if ($artist !== null) {
			$data = $this->paginate('Song');
			$this->set('songs', $data);
		} else {
			$data = $this->paginate('Song');
			$this->set('songs', $data);
		}
	}
	
	public function view($id = null) {
		$this->Song->id = $id;
		$this->set('song', $this->Song->read());
	}
	
	public function add() {
		if ($this->request->is('post')) {
			if ($this->Song->save($this->request->data)) {
				$this->Session->setFlash('
					<div class="alert alert-success">
						<button class="close" data-dismiss="alert">&times;</button>
						<strong>Success!</strong> Your song has been added.
					</div>'
				);
				$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('
						<div class="alert alert-error">
							<button class="close" data-dismiss="alert">&times;</button>
							<strong>Error:</strong> Unable to add your song.
						</div>
					');
				}
		}
	}
	
	public function edit($id = null) {
		$this->Song->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Song->read();
		} else {
			if ($this->Song->save($this->request->data)) {
				$this->Session->setFlash('
					<div class="alert alert-success">
						<button class="close" data-dismiss="alert">&times;</button>
						<strong>Success!</strong> Your song has been updated
					</div>
				');
				$this->redirect(array('action' => 'view', $id));	
			} else {
				$this->Session->setFlash('
					<div class="alert alert-error">
						<button class="close" data-dismiss="alert">&times;</button>
						<strong>Error:</strong> Unable to update the song.
					</div>
				');
			}
		}
	}
	
	var $play = array (
		'fields' => array('Song.id', 'Song.title', 'Song.artist', 'Song.url'),
		'maxLimit' => 1,
		'limit' => 1,
		'order' => array(
			'Song.id' => 'desc'
		)
	);
	
	public function play($view = null, $id = null) {
		if ($view == 'full') {
			$this->set('songs', $this->Song->find('all'));
			$number = $this->Song->find('count');
			$play = mt_rand(1, $number);
			$this->Song->id = $play;
			$this->set('song', $this->Song->read());
			$this->layout = 'full'; 
			$this->render('play-full');

		} else {
			$this->set('songs', $this->Song->find('all'));
			$number = $this->Song->find('count');
			$play = mt_rand(1, $number);
			$this->Song->id = $play;
			$this->set('song', $this->Song->read());
		}
	}
}