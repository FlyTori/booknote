<?php 

class ReviewsController extends AppController{

	var $components = array('Session');

	public $helpers = array('Html', 'Form');

	public function add() {
        if ($this->request->is('post')) {
            if ($this->Review->save($this->request->data)) {
                $this->Session->setFlash('Success!');
                $this->redirect(array('controller'=>'books','action'=>'view',$this->data['Review']['book_id']));
            } else {
                $this->Session->setFlash('failed!');
            }
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->request->is('ajax')) {
            if ($this->Review->delete($id)) {
                $this->autoRender = false;
                $this->autoLayout = false;
                $response = array('id' => $id);
                $this->header('Content-Type: application/json');
                echo json_encode($response);
                exit();
            }
        }
        $this->redirect(array('controller'=>'books', 'action'=>'index'));
    }

}

?>