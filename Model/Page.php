<?php
class Page extends AppModel {
	var $actsAs = array(
		'Sluggable' => array(
			'title_field' => 'title',
			'slug_field' => 'slug',
			'slug_max_length' => 64
		)
	);
	
	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty'
		),
		'body' => array(
			'rule' => 'notEmpty'
		)
	);
}
?>