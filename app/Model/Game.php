<?php
class Game extends AppModel {
	public $validate = array(
		'name' => array(
			'rule' => 'notEmpty'
		),
		'description' => array(
			'rule' => 'notEmpty'
		)
	);
}
?>