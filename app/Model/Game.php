<?php
class Game extends AppModel {
	var $actsAs = array(
		'Sluggable' => array(
			'title_field' => 'name',
			'slug_field' => 'slug',
			'slug_max_length' => 64
		)
	);
	
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