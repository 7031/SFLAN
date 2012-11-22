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
		} else {
			$table[0] = "Table 1";
			$table[1] = "Table 2";
			$this->set('tables', $table);
		}
	}
	
	public function edit($permalink = null) {
		$attendee = $this->Attendee->findBySlug($permalink);
		if ($this->request->is('get')) {
			$table[0] = "Table 1";
			$table[1] = "Table 2";
			$this->set('tables', $table);
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

	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Attendee->delete($id)) {
			$this->Session->setFlash('
				<div class="alert alert-success">
					<button class="close" data-dismiss="alert">x</button>
					Attendee has been deleted.
				</div>
			');
			$this->redirect(array('action' => 'index'));
		}
	}
}
