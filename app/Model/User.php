<?php
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {
	public $name = 'User';
	public $validate = array(
		'username' => array(
			'required' => array(
				'rule' => 'notEmpty'
			)
		),
		'password' => array(
			'required' => array(
				'rule' => 'notEmpty'
			)
		),
		'role' => array(
			'valid' => array(
				'rule' => array('inList', array('admin', 'editor', 'viewer')),
				'allowEmpty' => false
			)
		)
	);
	
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
}
