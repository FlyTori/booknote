<?php 
	class BooksController extends AppController{

		// import CakePHP helper
		public $helpers = array('Html', 'Form');

		// default CRUD functions
		// public $scaffold;
		
		public function index(){
			// set $params as filter
			$params = array(
			// 	'order' => 'book_name desc',
			// 	'limit' => 1
			);
			$this->set('books', $this->Book->find('all', $params));
			$this->set('title_for_layout', 'BookNote - Cloud Bookself');
		}
	}

?>