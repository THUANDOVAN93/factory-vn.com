<?php
App::uses('AppModel', 'Model');
/**
 * ContactFactory Model
 *
 */
class ContactFactory extends AppModel {

	public $useTable = false;

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		// 'buildings_name' => array(
		// ),
		'company_name' => array(
            array(
                'rule'     => array('inpStringCheck','@'),
                'message'  => 'Please enter your company name correctly.',
            ),
		),
		// 'industry' => array(
  //           array(
  //               'rule'     => array('inpStringCheck','@'),
  //               'message'  => '業種を正しく入力してください。',
  //           ),
		// ),
		'name' => array(
			'notempty' => array(
				'rule'     => array('notempty'),
				'message'  => 'Your name not empty',
				'required' => true,
				'last'     => true,
			),
            array(
                'rule'     => array('inpStringCheck','@'),
                'message'  => 'Please enter your name correctly.',
            ),
		),
		// 'address' => array(
  //           array(
  //               'rule'     => array('inpStringCheck','@'),
  //               'message'  => '住所を正しく入力してください。',
  //           ),
		// ),
		'tel' => array(
			'notempty' => array(
				'rule'     => array('notempty'),
				'message'  => 'Phone number not empty',
				'required' => true,
				'last'     => true,
			),
            array(
                'rule'     => array('inpStringCheck','@'),
                'message'  => 'Please enter your phone number correctly.',
            ),
		),
		// 'fax' => array(
  //           array(
  //               'rule'     => array('inpStringCheck','@'),
  //               'message'  => 'FAXを正しく入力してください。',
  //           ),
		// ),
		// 'boi_zone' => array(
  //           array(
  //               'rule'     => array('inpStringCheck','@'),
  //               'message'  => 'BOIゾーンを正しく入力してください。',
  //           ),
		// ),
		// 'location' => array(
  //           array(
  //               'rule'     => array('inpStringCheck','@'),
  //               'message'  => 'ロケーションを正しく入力してください。',
  //           ),
		// ),
		// 'factory_sub_category' => array(
		// ),
		// 'floor_space_site' => array(
  //           array(
  //               'rule'     => array('inpStringCheck','@'),
  //               'message'  => '必要面積（リース工業用地）を正しく入力してください。',
  //           ),
		// ),
		// 'floor_space_building' => array(
  //           array(
  //               'rule'     => array('inpStringCheck','@'),
  //               'message'  => '必要面積（リース工業用地以外）を正しく入力してください。',
  //           ),
		// ),
		// 'weight_limit' => array(
  //           array(
  //               'rule'     => array('inpStringCheck','@'),
  //               'message'  => '床耐荷重を正しく入力してください。',
  //           ),
		// ),
		// 'building_height' => array(
  //           array(
  //               'rule'     => array('inpStringCheck','@'),
  //               'message'  => '天井高を正しく入力してください。',
  //           ),
		// ),
		'message' => array(
			'notempty' => array(
				'rule'     => array('notempty'),
				'message'  => 'Content of inquiry',
				'required' => true,
				'last'     => true,
			),
            array(
                'rule'     => array('inpStringCheck','@'),
                'message'  => 'Content of inquiry',
            ),
		),
		'email' => array(
			'notempty' => array(
				'rule'     => array('notempty'),
				'message'  => 'E-mail not empty',
				'required' => true,
				'last'     => true,
			),
			'emailvalue' => array(
				//'rule' => array('custom', '/^(.*)@(.*)\.(.*)$/i'),
				'rule' => array('custom', "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/"),
				'message' => 'Please enter E-mail correctly.',
				'required' => true,
				'allowEmpty' => true,
				'last' => true,
			),
		),
	);

	public function inpStringCheck( $check, $str = '') {
        $value = array_values( $check );
        $value = $value[0];

		if ( empty( $str ) ) return true;
        if( strpos( $value, $str ) !== false ) return false;

        return true;
    }

	public function inpJpnCheck( $check ) {
        $value = array_values( $check );
        $value = $value[0];

		if ( strlen( $value ) == mb_strlen( $value ) ) {
		  // 全部英語（全部シングルバイト文字）
			return false;
		} else {
		  // 日本語が含まれている（マルチバイト文字が含まれている）
			return true;
		}
    }
}
