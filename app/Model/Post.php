<?php
App::uses('AppModel', 'Model');

class Post extends AppModel {
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
