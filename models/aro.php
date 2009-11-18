<?php
    class Aro extends AclAppModel
    {
    	var $name = 'Aro';

    	//The Associations below have been created with all possible keys, those that are not needed can be removed
    	var $belongsTo = array(
    		'Parent' => array(
    			'className' => 'Acl.Aro',
    			'foreignKey' => 'parent_id',
    			'conditions' => '',
    			'fields' => '',
    			'order' => ''
    		)
    	);

    	var $hasAndBelongsToMany = array(
    		'Aco' => array(
    			'className' => 'Acl.Aco',
    			'joinTable' => 'aros_acos',
    			'foreignKey' => 'aro_id',
    			'associationForeignKey' => 'aco_id',
    			'unique' => true,
    			'conditions' => '',
    			'fields' => '',
    			'order' => '',
    			'limit' => '',
    			'offset' => '',
    			'finderQuery' => '',
    			'deleteQuery' => '',
    			'insertQuery' => ''
    		)
    	);
    }
?>