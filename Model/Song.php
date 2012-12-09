<?php
class Song extends AppModel {
	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty'
		),
		'artist' => array(
			'rule' => 'notEmpty'
		),
		'url' => array(
			'rule' => 'notEmpty'
		)
	);
}
?>