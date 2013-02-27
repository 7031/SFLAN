<?php
class AttendeesController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Session');
	
	var $paginate = array(
		'limit' => 25,
		'order' => array(
			'Attendee.name' => 'asc'
		)
	);
	
	public function index() {
		$this->set('table0', $this->Attendee->find('all', array('conditions' => array('Attendee.table' => 0), 'order' => array('name ASC'), 'fields' => array('id', 'name', 'slug', 'nickname'))));
		$this->set('table1', $this->Attendee->find('all', array('conditions' => array('Attendee.table' => 1), 'order' => array('name ASC'), 'fields' => array('id', 'name', 'slug', 'nickname'))));
		$this->set('table2', $this->Attendee->find('all', array('conditions' => array('Attendee.table' => 2), 'order' => array('name ASC'), 'fields' => array('id', 'name', 'slug', 'nickname'))));
	}
	
	public function add() {
		$table[0] = "Table 1";
		$table[1] = "Table 2";
		$table[2] = "Non-existent table";
		$this->set('tables', $table);
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
			
		}
	}
	
	public function edit($permalink = null) {
		$attendee = $this->Attendee->findBySlug($permalink);
		$table[0] = "Table 1";
		$table[1] = "Table 2";
		$table[2] = "Non-existent table";
		$this->set('tables', $table);
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

	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Attendee->delete($id)) {
			$this->Session->setFlash('
				<div class="alert alert-success">
					<button class="close" data-dismiss="alert">&times;</button>
					The attendee has been deleted successfully. 
				</div>
			');
			$this->redirect(array('action' => 'index'));
		}
	}
}
