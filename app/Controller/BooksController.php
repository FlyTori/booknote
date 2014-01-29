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

		public function view($id = null){
			$this->Book->id = $id;
			$this->set('book',$this->Book->read());
		}

		// public function view($id = null){
		// 	$this->Book->id = $id;
		// 	$this->set('book',$this->Book->read());
		// }
	}

?>