<?php 
class AppSchema extends CakeSchema {

	public $file = 'schema_1.php';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $add_informations = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '追加情報名', 'charset' => 'utf8'),
		'is_enable' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => '使用/不使用'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $areas = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => 'エリア名', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 512, 'collate' => 'utf8_general_ci', 'comment' => '住所', 'charset' => 'utf8'),
		'lat' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '20,16', 'comment' => '緯度'),
		'lng' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '20,16', 'comment' => '経度'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $factory_areas = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '工場エリア名', 'charset' => 'utf8'),
		'area' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'area'),
		'note' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 512, 'collate' => 'utf8_general_ci', 'comment' => '住所', 'charset' => 'utf8'),
		'lat' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '20,16', 'comment' => '緯度'),
		'lng' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '20,16', 'comment' => '経度'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $factory_building_factory_tenant = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'factory_building_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '工場物件ID'),
		'factory_tenant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '工場入居企業ID'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'factory_building_id' => array('column' => 'factory_building_id', 'unique' => 0),
			'factory_tenant_id' => array('column' => 'factory_tenant_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $factory_buildings = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'alert_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '更新頻度'),
		'priority' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '表示優先度 : 1-5の5段階で1の優先度が低く、順に優先度が高くなります。'),
		'visible' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'フロント表示'),
		'factory_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '工場種別ID'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'プロジェクト名', 'charset' => 'utf8'),
		'note' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'boi_zone' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'BOIゾーン'),
		'giz' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '一般加工区'),
		'epz' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '輸出加工区'),
		'fz' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'フリーゾーン'),
		'industrial_park_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '工業団地内外ID'),
		'developer' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '開発業者', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 512, 'collate' => 'utf8_general_ci', 'comment' => '住所', 'charset' => 'utf8'),
		'map_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 512, 'collate' => 'utf8_general_ci', 'comment' => '位置情報取得用住所', 'charset' => 'utf8'),
		'factory_area_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '工場エリアID'),
		'lat' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '20,16', 'comment' => '緯度'),
		'lng' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '20,16', 'comment' => '経度'),
		'altitude' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '海抜', 'charset' => 'utf8'),
		'complated' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '完成年'),
		'develop_area' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '開発面積', 'charset' => 'utf8'),
		'lease_expiration' => array('type' => 'integer', 'null' => true, 'default' => null),
		'from_hochiminh' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => 'バンコクからの距離', 'charset' => 'utf8'),
		'from_tansonnhat' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => 'スワナプーム国際空港からの距離', 'charset' => 'utf8'),
		'from_new_airport' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => 'レームチャバン港からの距離', 'charset' => 'utf8'),
		'from_saigon' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => 'ドンムアン国際空港からの距離', 'charset' => 'utf8'),
		'from_catlai' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => 'クロントイ港からの距離', 'charset' => 'utf8'),
		'from_thivai' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => 'マプタプット港からの距離', 'charset' => 'utf8'),
		'from_vungtau' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'recommend' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'おすすめ'),
		'popluar' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '人気'),
		'newly' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '新着'),
		'add_information1' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information2' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information3' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information4' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information5' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information6' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information7' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information8' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information9' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information10' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'bank' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '銀行'),
		'hotel' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'ホテル'),
		'apart' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'アパート'),
		'restaurant' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'レストラン'),
		'golfpark' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'ゴルフ場'),
		'hospital' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '病院'),
		'shopping_center' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'ショッピングセンター'),
		'telephone' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '電話', 'charset' => 'utf8'),
		'internet' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'インターネット'),
		'electricity' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '電気', 'charset' => 'utf8'),
		'waterworks' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '上水', 'charset' => 'utf8'),
		'sewer' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '排水', 'charset' => 'utf8'),
		'plant' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '処理場', 'charset' => 'utf8'),
		'reservoir' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '貯水池', 'charset' => 'utf8'),
		'natural_gas' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '天然ガス', 'charset' => 'utf8'),
		'steam' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'スチーム', 'charset' => 'utf8'),
		'highway' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '幹線道路', 'charset' => 'utf8'),
		'security' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'セキュリティ', 'charset' => 'utf8'),
		'management_cost' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '12,1', 'comment' => '管理費'),
		'facilities' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'その他付帯設備', 'charset' => 'utf8'),
		'next_update' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '次回更新日時'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'factory_area_id' => array('column' => 'factory_area_id', 'unique' => 0),
			'factory_category_id' => array('column' => 'factory_category_id', 'unique' => 0),
			'industrial_park_id' => array('column' => 'industrial_park_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $factory_categories = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '工場種別名', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $factory_photos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'path' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '画像ファイルのパス', 'charset' => 'utf8'),
		'caption' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'キャプション', 'charset' => 'utf8'),
		'use_point' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '使う場所 : 識別文字列を入れます。', 'charset' => 'utf8'),
		'factory_building_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '工場物件ID'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'factory_building_id' => array('column' => 'factory_building_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $factory_properties = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'factory_building_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '工場物件ID'),
		'visible' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'フロント表示'),
		'factory_sub_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '工場(小)種別ID'),
		'plot' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'プロット', 'charset' => 'utf8'),
		'unit' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ユニット', 'charset' => 'utf8'),
		'floor' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '所在階'),
		'floor_space' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '床面積', 'charset' => 'utf8'),
		'site_area' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '敷地面積', 'charset' => 'utf8'),
		'price' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'comment' => '価格', 'charset' => 'utf8'),
		'note' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'arrangement_plan' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '位置図', 'charset' => 'utf8'),
		'drowing' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '間取り図', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'factory_building_id' => array('column' => 'factory_building_id', 'unique' => 0),
			'factory_sub_category_id' => array('column' => 'factory_sub_category_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $factory_sub_categories = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '工場(小)種別名', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $factory_tenants = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '入居企業名', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $industrial_parks = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '工業団地内外名', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $lines = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '路線名', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $office_buildings = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'alert_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '更新頻度'),
		'priority' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '表示優先度 : 1-5の5段階で1の優先度が低く、順に優先度が高くなります。'),
		'visible' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'フロント表示'),
		'office_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '事務所種別ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '建物名', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 512, 'collate' => 'utf8_general_ci', 'comment' => '住所', 'charset' => 'utf8'),
		'map_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 512, 'collate' => 'utf8_general_ci', 'comment' => '位置情報取得用住所', 'charset' => 'utf8'),
		'area_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'エリアID'),
		'lat' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '20,16', 'comment' => '緯度'),
		'lng' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '20,16', 'comment' => '経度'),
		'station1_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => '駅ID1'),
		'station2_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => '駅ID2'),
		'station3_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => '駅ID3'),
		'access' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'アクセス', 'charset' => 'utf8'),
		'complated' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '完成年'),
		'height' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '8,2'),
		'total_floor' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '総階数'),
		'elevator' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'エレベーター数'),
		'lift' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'サービスリフト数'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'around' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '周辺施設', 'charset' => 'utf8'),
		'proprietary' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '管理会社', 'charset' => 'utf8'),
		'nearby' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '駅近'),
		'recommend' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'おすすめ'),
		'popluar' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '人気'),
		'newly' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '新着'),
		'add_information1' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information2' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information3' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information4' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information5' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information6' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information7' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information8' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information9' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information10' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'together' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '主な入居企業', 'charset' => 'utf8'),
		'bank' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'canteen' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'キャンティーン'),
		'store' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'コンビニ'),
		'cafe' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'カフェ'),
		'shared_pantry' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '共同パントリー'),
		'restaurant' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'レストラン'),
		'fitness' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'フィットネス'),
		'parking' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '駐車場', 'charset' => 'utf8'),
		'security' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'セキュリティ', 'charset' => 'utf8'),
		'meeting_room' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '会議室利用', 'charset' => 'utf8'),
		'internet' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'インターネット', 'charset' => 'utf8'),
		'air_conditioner' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'エアコン', 'charset' => 'utf8'),
		'electricity' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '電気', 'charset' => 'utf8'),
		'water_supply' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '水道', 'charset' => 'utf8'),
		'telephone' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '電話', 'charset' => 'utf8'),
		'management_cost' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '管理費', 'charset' => 'utf8'),
		'management_cost_inc' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'facilities' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'その他付帯設備', 'charset' => 'utf8'),
		'next_update' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '次回更新日時'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'area_id' => array('column' => 'area_id', 'unique' => 0),
			'office_category_id' => array('column' => 'office_category_id', 'unique' => 0),
			'station3_id' => array('column' => 'station3_id', 'unique' => 0),
			'station1_id' => array('column' => 'station1_id', 'unique' => 0),
			'station2_id' => array('column' => 'station2_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $office_categories = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '事務所種別名', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $office_layouts = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '間取り名', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $office_person_nums = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '事務所人数名', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $office_photos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'path' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '画像ファイルのパス', 'charset' => 'utf8'),
		'caption' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'キャプション', 'charset' => 'utf8'),
		'use_point' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '使う場所 : 識別文字列を入れます。', 'charset' => 'utf8'),
		'office_building_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '事務所物件ID'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'office_building_id' => array('column' => 'office_building_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $office_properties = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'office_building_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '事務所物件ID'),
		'visible' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'フロント表示'),
		'sale_or_rent' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '売物件/貸物件 : 1 => 貸物件
2 => 売物件'),
		'floor' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '所在階'),
		'office_layout_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '事務所間取りID'),
		'office_layout_text' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '事務所間取りテキスト', 'charset' => 'utf8'),
		'floor_space' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '床面積', 'charset' => 'utf8'),
		'office_person_num_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => '人数ID'),
		'price' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '価格', 'charset' => 'utf8'),
		'note' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'drowing' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '間取り図', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'office_building_id' => array('column' => 'office_building_id', 'unique' => 0),
			'office_layout_id' => array('column' => 'office_layout_id', 'unique' => 0),
			'office_person_num_id' => array('column' => 'office_person_num_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $residence_buildings = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'alert_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '更新頻度'),
		'priority' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '表示優先度 : 1-5の5段階で1の優先度が低く、順に優先度が高くなります。'),
		'visible' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'フロント表示'),
		'residence_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '住居種別ID'),
		'area_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'エリアID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '建物名', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 512, 'collate' => 'utf8_general_ci', 'comment' => '住所', 'charset' => 'utf8'),
		'map_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 512, 'collate' => 'utf8_general_ci', 'comment' => '位置情報取得用住所', 'charset' => 'utf8'),
		'lat' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '20,16', 'comment' => '緯度'),
		'lng' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '20,16', 'comment' => '経度'),
		'station1_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => '駅ID1 : cakephpではエイリアスを利用してstation1-3_idを指定'),
		'station2_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => '駅ID2'),
		'station3_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => '駅ID3'),
		'access' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'アクセス', 'charset' => 'utf8'),
		'complated' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 24, 'collate' => 'utf8_unicode_ci', 'comment' => '完成年', 'charset' => 'utf8'),
		'total_floor' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '総階数'),
		'total_room' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '部屋数'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'around' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '周辺施設', 'charset' => 'utf8'),
		'nearby' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '駅近'),
		'recommend' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'おすすめ'),
		'popluar' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '人気'),
		'newly' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '新着'),
		'add_information1' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information2' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information3' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information4' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information5' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information6' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information7' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information8' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information9' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'add_information10' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'pool' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'プール'),
		'gym' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'ジム'),
		'sauna' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'サウナ'),
		'tennis_court' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'テニスコート'),
		'children_playground' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '子供の遊び場'),
		'laundry' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'ランドリー'),
		'store' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'コンビニ'),
		'kitchen' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'キッチン'),
		'washer' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '洗濯機'),
		'maid_room' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'メイド部屋'),
		'keep_pet' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'ペット可'),
		'security' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'セキュリティ'),
		'parking' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '駐車場'),
		'internet' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'インターネット'),
		'satellite_broadcasting' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '衛星放送'),
		'service' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'サービス', 'charset' => 'utf8'),
		'electricity' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '電気', 'charset' => 'utf8'),
		'water_supply' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '水道', 'charset' => 'utf8'),
		'telephone' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '電話', 'charset' => 'utf8'),
		'cookstove' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'コンロ', 'charset' => 'utf8'),
		'management_cost' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '管理費', 'charset' => 'utf8'),
		'facilities' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'その他付帯設備', 'charset' => 'utf8'),
		'next_update' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '次回更新日時'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'area_id' => array('column' => 'area_id', 'unique' => 0),
			'residence_category_id' => array('column' => 'residence_category_id', 'unique' => 0),
			'station1_id' => array('column' => 'station1_id', 'unique' => 0),
			'station2_id' => array('column' => 'station2_id', 'unique' => 0),
			'station3_id' => array('column' => 'station3_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $residence_categories = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '住居種別名', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $residence_layouts = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '住居間取り名 : 例：2LDK', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $residence_photos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'path' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '画像ファイルのパス', 'charset' => 'utf8'),
		'caption' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'キャプション', 'charset' => 'utf8'),
		'use_point' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '使う場所 : 識別文字列を入れます。', 'charset' => 'utf8'),
		'residence_building_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '住居物件ID'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'residence_building_id' => array('column' => 'residence_building_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $residence_properties = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'residence_building_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '住居物件ID'),
		'residence_layout_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '住居間取りID'),
		'residence_layout_text' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '住居間取りテキスト', 'charset' => 'utf8'),
		'visible' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'フロント表示'),
		'sale_or_rent' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '売物件/貸物件 : 1 => 貸物件
2 => 売物件'),
		'floor' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '所在階'),
		'floor_space' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '床面積', 'charset' => 'utf8'),
		'price' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '価格', 'charset' => 'utf8'),
		'note' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'drowing' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '間取り図', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'residence_building_id' => array('column' => 'residence_building_id', 'unique' => 0),
			'residence_layout_id' => array('column' => 'residence_layout_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $roles = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '権限名', 'charset' => 'utf8'),
		'role_admin' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'ADMIN権限 : 物件管理、ユーザ管理、マスタ管理が行なえる権限'),
		'role_manager' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'MANAGER権限 : 物件管理、ユーザ管理が行なえる権限'),
		'role_staff' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'STAFF権限 : 物件管理が行なえる権限'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $stations = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '駅名', 'charset' => 'utf8'),
		'line_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '路線ID'),
		'line2_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => '路線ID2'),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 512, 'collate' => 'utf8_general_ci', 'comment' => '住所', 'charset' => 'utf8'),
		'lat' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '20,16', 'comment' => '緯度'),
		'lng' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '20,16', 'comment' => '経度'),
		'map' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '駅周辺マップ : 駅周辺マップの画像を指定します。
長さはOSのファイルパスの長さ制限による。', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'line_id' => array('column' => 'line_id', 'unique' => 0),
			'line2_id' => array('column' => 'line2_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	public $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'login_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'comment' => 'ログインID', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => 'パスワード : 認証に使用します。
SHA1でハッシュ化(40文字)するので、実際のパスワードは何文字でも大丈夫です。', 'charset' => 'utf8'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => 'ユーザ名 : 認証に使用します', 'charset' => 'utf8'),
		'role_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '権限ID'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'login_id' => array('column' => 'login_id', 'unique' => 1),
			'role_id' => array('column' => 'role_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
}
