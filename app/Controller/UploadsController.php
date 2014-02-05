<?php
App::uses('AppController', 'Controller');
/**
 * Uploads Controller
 *
 * @property Upload $Upload
 */

class UploadsController extends AppController {
 
 	var $components = array('Session');


	public function add() {
		if ($this->request->is('post')) {
			$tmp = $this->request->data['Upload']['file']['tmp_name'];
			if(is_uploaded_file($tmp)) {
				$file_name = basename($this->request->data['Upload']['file']['name']);
				$file = WWW_ROOT.'files'.DS.$file_name;
				if (move_uploaded_file($tmp, $file)) {
					$this->Upload->create();
					$this->request->data['Upload']['file_name'] = $file_name;
					if ($this->Upload->save($this->request->data)) {
						$this->Session->setFlash(__('The upload has been saved'));
						$this->redirect(array('controller'=>'books','action'=>'view',$this->data['Upload']['book_id']));
					} else {
						$this->Session->setFlash(__('The upload could not be saved. Please, try again.'));
					}
				}
			}
		}
	}
 
}