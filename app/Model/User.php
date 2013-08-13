<?php

App::uses('AppModel', 'Model');

/**
 * User Model
 *
 * @property Post $Post
 */
class User extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'user_name' => array(
            'minlength' => array(
                'rule' => array('minlength', '3'),
                'message' => 'username must be at least 3 characters',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'maxlength' => array(
                'rule' => array('maxlength', '30'),
                'message' => 'username\'s length is 30 characters',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'password' => array(
            'minlength' => array(
                'rule' => array('minlength', '0'),
                'message' => 'password must be at least 6 characters',
                //'allowEmpty' => false, // string not empty  
                //
             // 'required' => true, // Presence
            //  
            // User.create(name=> 'a', email => 'e')
            // User.new(name=> 'a2',pass=> '123' email => 'e2')
            //'last' => false, // Stop validation after this rule
            // 'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                //
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Post' => array(
            'className' => 'Post',
            'foreignKey' => 'user_id',
            'dependent' => true,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

}
