<?php
class AttendeesController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Session');
	
	public function index() {
		$this->set('attendees', $this->Attendee->find('all'));
	}
	
	public function add() {
		if ($this->request->is('post')) {
			if ($this->Attendee->save($this->request->data)) {
				$this->Session->setFlash('
					<div class="alert alert-success">
						<button class="close" data-dismiss="alert">x</button>
						Attendee has been saved.
					</div>
				');
				$this->redirect(array('action' => 'index')); 
			} else {
				$this->Session->setFlash('
					<div class="alert alert-error">
						<button class="close" data-dismiss="alert">x</button>
						Unable to add attendee.
					</div>
				');
			}
		}
	}
	
	public function edit($permalink = null) {
		$attendee = $this->Attendee->findBySlug($permalink);
		if ($this->request->is('get')) {
			$this->request->data = $attendee;
		} else {
			if ($this->Attendee->save($this->request->data)) {
				$this->Session->setFlash('
					<div class="alert alert-success">
						<button class="close" data-dismiss="alert">x</button>
						Attendee has been updated.
					</div>
				');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('
					<div class="alert alert-error">
						<button class="close" data-dismiss="alert">x</button>
						Unable to update attendee.
					</div>
				');
			}
		}
	}
}
