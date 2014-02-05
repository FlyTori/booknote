<?php

	class Book extends AppModel{

		public $hasOne = 'Upload';

		public $hasMany = 'Review';

		public $validate = array(
		'book_name' => array(
			'rule' => 'notEmpty',
			'message' => 'cannot be emtpy'
			),
		);
	}

?>