<?php 
	class BooksController extends AppController{

		// Import CakePHP helper
		public $helpers = array('Html', 'Form');

		// Load session component
		var $components = array('Session');

		// Default CRUD functions
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

		public function add(){
			if ($this->request->is('post')){
				if($this->Book->save($this->request->data)){
					$this->Session->setFlash('Success');
					$this->redirect(array('action'=>'index'));
				} else {
					$this->Session->setFlash('failed');
				}
			}
		}

		public function edit($id = null){
			$this->Book->id = $id;
			if($this->request->is('get')){
				$this->request->data = $this->Book->read();
			} else {
				if ($this->Book->save($this->request->data)){
					$this->Session->setFlash('Success');
					$this->redirect(array('action'=>'index'));
				} else {
					$this->Session->setFlash('failed');
				}
			}
		}	

		public function delete($id){
			if ($this->request->is('get')){
				throw new MethodNotAllowedException();
			}
			if ($this->Book->delete($id)){
				$this->Session->setFlash('Deleted!');
				$this->redirect(array('action'=>'index'));
			}
		}
	}
?>