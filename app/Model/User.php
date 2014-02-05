<?php

// App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin','member')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );

    public function beforeSave($options = array()) {


    if (isset($this->data[$this->alias]['password'])) {
        
        // $passwordHasher = new SimplePasswordHasher();
        // CakePHP2.4系で必要な命令になります。

        // CakePHP2.3.X の書き方        
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);

        // CakePHP2.4の書き方
        // $this->data[$this->alias]['password'] = $passwordHasher->hash(
        //     $this->data[$this->alias]['password']
        // );
        }
    return true;
    }

    
}

?>