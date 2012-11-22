<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */	
	Router::connect('/', array('controller' => 'pages', 'action' => 'view', 'welcome'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	// Pages
 	Router::connect('/pages', array('controller' => 'pages', 'action' => 'index'));
	Router::connect('/pages/add', array('controller' => 'pages', 'action' => 'add'));
	Router::connect('/pages/edit/*', array('controller' => 'pages', 'action' => 'edit'));
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'view'));
	
	// Games
	Router::connect('/games', array('controller' => 'games', 'action' => 'index'));
	Router::connect('/games/add', array('controller' => 'games', 'action' => 'add'));
	Router::connect('/games/edit/*', array('controller' => 'games', 'action' => 'edit'));
	Router::connect('/games/*', array('controller' => 'games', 'action' => 'view'));
	
	// Music
	Router::connect('/music', array('controller' => 'songs', 'action' => 'index'));
	Router::connect('/music/add', array('controller' => 'songs', 'action' => 'add'));
	Router::connect('/music/edit/*', array('controller' => 'songs', 'action' => 'edit'));
	Router::connect('/music/play', array('controller' => 'songs', 'action' => 'play'));
	Router::connect('/music/listen/*', array('controller' => 'songs', 'action' => 'view')); 

/**
 * Load all plugin routes.  See the CakePlugin documentation on 
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
