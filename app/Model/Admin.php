<?php
class Admin extends AppModel {
public $name = 'Admin';
public $useTable = 'admin';
public $validate = array(
			'name' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Name is required'
				), 'alphaNumeric' => array(
                'rule' => 'alphaNumeric',
                'required' => true,
                'message' => 'Letters and numbers only in Name Field'
            ),
			),
			'email' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Email is required.'
				  ),
				'isunique' => array(
					'rule' => array('isUnique'),
					'message' => 'This Email is already used.'
				  ),
				  'email' => array(
				  'rule' => array('email', true),
				  'message' => 'This Email is not valid.'
				  ),
			),
		   'username' => array(
				
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Username is required.'
				  ),
				'isunique' => array(
					'rule' => array('isUnique'),
					'message' => 'This Username is already used.'
				  )
			),
			'password' => array(
				'required' => true,
				'rule'    => array('minLength', '6'),
				'message' => 'Minimum 6 characters long'
			)

		);


 
}
?>