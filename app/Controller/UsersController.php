<?php
class UsersController extends AppController {
	public $helpers = array('Html', 'Form');
	function beforeFilter()
	{
		$this->Auth->allow('register');
	}
	
	function login()
	{
		if(isset($this->data['User']))
		{
			if ($this->Auth->login($this->data['User']))
			{
				$this-redirect('/');
			}
			$this->flash("Username/Password is incorrect");
		}
	}
	
	function logout()
	{
		$this->Auth->logout();
		$this->redirect('login');
	}
}
?>