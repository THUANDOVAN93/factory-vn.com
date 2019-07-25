<?php
App::uses('AppModel', 'Model');
/**
 * FactoryArea Model
 *
 */
class FactoryArea extends AppModel {

/**
 * Display field
 *
 * @var string
 */
    public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
    public $validate = array(
        'name' => array(
            'notempty' => array(
                'rule'     => array('notempty'),
                'message'  => 'Please enter the factory area name.',
                'required' => true,
                'last'     => true,
            ),
            'maxlength' => array(
                'rule'     => array('maxlength', 64),
                'message'  => 'Enter the factory area name within 64 characters.',
                'required' => true,
                'last'     => true,
            ),
        ),
        'note' => array(
            'maxlength' => array(
                'rule'     => array('maxlength', 1000),
                'message'  => 'Enter the factory area description within 1000 characters.',
                'required' => true,
                'last'     => true,
            ),
        ),
        'address' => array(
            'maxLength' => array(
                'rule' => array('maxLength', '512'),
                'message' => 'Please enter up to 512 characters.',
                'required' => true,
                'last' => true,
            ),
        ),
        'lat' => array(
            'decimal' => array(
                'rule'     => array('decimal'),
                'message'  => 'Latitude input value is invalid. Please select a map again.',
                'required' => true,
                'last'     => true,
            ),
        ),
        'lng' => array(
            'decimal' => array(
                'rule'     => array('decimal'),
                'message'  => 'The longitude input value is invalid. Please select a map again.',
                'required' => true,
                'last'     => true,
            ),
        ),
    );
}
