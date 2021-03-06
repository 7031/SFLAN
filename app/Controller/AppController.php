<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array(
		'Session',
		'Cookie',
		'Auth' => array(
			'loginRedirect' => array('controller' => 'pages', 'action' => 'view', 0),
			'logoutRedirect' => array('controller' => 'pages', 'action' => 'view', 0)
		)
	);
	
	function beforeRender() {
		
	}
	
	function beforeFilter() {
		$this->Auth->allow('*');
		$this->set('authUser', $this->Auth->user());
		
		/* Styles */
		$this->Cookie->name = 'style';
		$this->Cookie->time = (3600 * 24 * 30);
		$this->Cookie->path = '/';
		$this->Cookie->domain = $_SERVER['HTTP_HOST'];
		$this->Cookie->secure = false;
		$style = $this->Cookie->read('style');
		$this->set('style', $style);
	}
	
	public function changestyle($newTheme = null) {
		$this->Cookie->write('style', $newTheme, false);
		$this->redirect($_SERVER['HTTP_REFERER']);
	}
}
