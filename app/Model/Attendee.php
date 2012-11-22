<?php
class Attendee extends AppModel {
	var $actsAs = array(
		'Sluggable' => array(
			'title_field' => 'nickname',
			'slug_field' => 'slug',
			'slug_max_length' => 24
		)
	);
	
	public $validate = array(
		'name' => array(
			'rule' => 'notEmpty'
		),
		'table' => array(
			'rule' => 'notEmpty'
		)
	);
}
