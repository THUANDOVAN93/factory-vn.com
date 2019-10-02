<?php

/**
 * 更新頻度(アラート)設定
 */
Configure::write('AlertTerm', array(
//    0 => array('name' => '未設定', 'term' => 0),
    1 => array('name' => 'A：５日目からアラート',   'term' => 432000),
    2 => array('name' => 'B：１４日目からアラート', 'term' => 1209600),
    3 => array('name' => 'C：２８日目からアラート', 'term' => 2419200)
));

/**
 * 優先度
 */
Configure::write('Priority', array(
    1 => '1 (優先度：低) ',
    2 => '2',
    3 => '3 (優先度：中)',
    4 => '4',
    5 => '5 (優先度：高)',
));

/**
 * フロント表示
 */
Configure::write('Visible', array(
    0 => '非表示',
    1 => '表示',
));

/**
 * フロント表示
 */
Configure::write('IsTopVisible', array(
    0 => '非表示',
    1 => '表示',
));

/**
 * アイコン
 */
Configure::write('Icon', array(
    'ResidenceBuilding' => array(
        'nearby'    => '駅近',
        'recommend' => 'おすすめ',
        'popluar'   => '人気',
        'newly'     => '新着',
    ),
    'OfficeBuilding' => array(
        'nearby'    => '駅近',
        'recommend' => 'おすすめ',
        'popluar'   => '人気',
        'newly'     => '新着',
    ),
    'FactoryBuilding' => array(
        'recommend' => 'おすすめ',
        'popluar'   => '人気',
        'newly'     => '新着',
    ),
));

/**
 * 設備・特長
 */
Configure::write('Facility', array(
    'Residence' => array(
        'pool'                   => 'プール',
        'gym'                    => 'ジム',
        'sauna'                  => 'サウナ',
        'tennis_court'           => 'テニスコート',
        'children_playground'    => '子供の遊び場',
        'laundry'                => 'ランドリー',
        'store'                  => 'コンビニ',
        'kitchen'                => 'キッチン',
        'washer'                 => '洗濯機',
//        'maid_room'              => 'メイド部屋',
        'keep_pet'               => 'ペット可',
        'security'               => 'セキュリティ',
        'parking'                => '駐車場',
        'internet'               => 'インターネット',
        'satellite_broadcasting' => '衛星放送(UBC+NHK)',
    ),
    'OfficeBuilding' => array(
        //'canteen'       => 'キャンティーン',
        'bank'       => '銀行',
        'store'         => 'コンビニ',
        'cafe'          => 'カフェ',
        'shared_pantry' => '共同パントリー',
        'restaurant'    => 'レストラン',
        'fitness'       => 'フィットネス',
        /*'parking'       => '駐車場',
        'security'      => 'セキュリティ',
        'meeting_room'  => '会議室利用',
        'internet'      => 'インターネット',*/
    ),
    'FactoryBuilding' => array(
        'bank'            => 'Bank',
        'hotel'           => 'Hotel',
        'apart'           => 'Apartment',
        'restaurant'      => 'Restaurant',
//        'golfpark'        => 'ゴルフ場',
        'hospital'        => 'Hospital',
        'shopping_center' => 'Shopping Centre',
        'internet'        => 'Internet',
    ),
));

/**
 * 工業団地ゾーン（っていう言い方であってるのかわかりませんが、、、）
 */
Configure::write('FactoryZone', array(
    'giz' => '一般加工区(GIZ)',
    'epz' => '輸出加工区(EPZ)',
    //'fz'  => 'フリーゾーン(FZ)',
));

/**
 * フロント表示
 */
Configure::write('SaleOrRent', array(
    1 => 'For sale',
    2 => 'Rental Property',
));

/**
 * BOI-ZONE
 */
Configure::write('BoiZone', array(
    1 => 'ZONE1',
    2 => 'ZONE2',
    3 => 'ZONE3-1',
    4 => 'ZONE3-2'
));

/**
 * 画像の使用箇所
 */
Configure::write('Image.UsePoint', array(
    'Residence' => array(
        'List',
        'Main',
        'Sub',
        'SubSub',
    ),
));


/** ----------------------------------------------------------------------------
 * フロントで使用
 * -------------------------------------------------------------------------- */
Configure::write('SearchList', array(
    'Sort' => array(
        'newly'   => 'New',
        'popluar' => 'Popluar',
    ),
    'Limit' => array(
        '5'  => '5',
        '10' => '10',
        '25' => '25',
        '50' => '50',
    ),
));

Configure::write('Price', array(
    'ResidenceBuilding' => array(
        'All' => array(
            '0-29999'     => '～ 29,999',
            '30000-39999' => '30,000 ～ 39,999',
            '40000-49999' => '40,000 ～ 49,999',
            '50000-59999' => '50,000 ～ 59,999',
            '60000-69999' => '60,000 ～ 69,999',
            '70000-79999' => '70,000 ～ 79,999',
            '80000-89999' => '80,000 ～ 89,999',
            '90000-99999' => '90,000 ～ 99,999',
            '100000'      => '100,000 ～',
        )
    ),
    'OfficeBuilding' => array(
        '1,2' => array(
            '0-299'   => '～ 299',
            '300-499' => '300 ～ 499',
            '500-699' => '500 ～ 699',
            '700-899' => '700 ～ 899',
            '900-999' => '900 ～ 999',
            '1000'    => '1,000 ～',
        ),
        '3' => array(
            '0-19999'     => '～ 19,999',
            '20000-29999' => '20,000 ～ 29,999',
            '30000-39999' => '30,000 ～ 39,999',
            '40000-49999' => '40,000 ～ 49,999',
            '50000'       => '50,000 ～',
        )
    ),
    'FactoryBuilding' => array(
        '2,4' => array(
            '0-159999'      => '～ 159,999',
            '160000-207999' => '160,000 ～ 207,999',
            '208000-255999' => '208,000 ～ 255,999',
            '256000-287999' => '256,000 ～ 287,999',
            '288000-319999' => '288,000 ～ 319,999',
            '320000-367999' => '320,000 ～ 367,999',
            '368000-399999' => '368,000 ～ 399,999',
            '400000'        => '400,000 ～',
        ),
        '1,3' => array(
            '0-9999999' => '～ 9999999',
            '10000000-29999999'   => '1,000 ～ 2,9999999',
            '30000000-49999999'   => '3,000 ～ 4,9999999',
            '50000000-79999999'   => '5,000 ～ 7,9999999',
            '80000000-99999999'   => '8,000 ～ 9,9999999',
            '100000000-119999999' => '10,000 ～ 11,9999999',
            '120000000-149999999' => '12,000 ～ 14,9999999',
            '150000000'           => '15,000 ～',
        ),
        '5' => array(
            '0-1249'    => '～ 1,249',
            '1250-2499' => '1,250 ～ 2,499',
            '2500-3749' => '2,500 ～ 3,749',
            '3750-4999' => '3,750 ～ 4,999',
            '5000-6249' => '5,000 ～ 6,249',
            '6250'      => '6,250 ～',
        ),
    ),
));

Configure::write('FloorSpace', array(
    'ResidenceBuilding' => array(
        'All' => array(
            '0-50'    => '～ 49',
            '50-70'   => '50 ～ 69',
            '70-100'   => '70 ～ 99',
            '100-150' => '100 ～ 149',
            '150-200' => '150 ～ 199',
            '200-250' => '200 ～ 249',
            '250'     => '250 ～',
        )
    ),
    'OfficeBuilding' => array(
        'All' => array(
            '0-50'    => '～ 49',
            '50-100'   => '50 ～ 99',
            '100-150' => '100 ～ 149',
            '150-200' => '150 ～ 199',
            '200-250' => '200 ～ 249',
            '250-300' => '250 ～ 299',
            '300'     => '300 ～',
        )
    ),
    'FactoryBuilding' => array(
        '1,2,3,4' => array(
            '0-500'     => '～ 499',
            '500-1000'   => '500 ～ 999',
            '1000-1500' => '1000 ～ 1499',
            '1500-2000' => '1500 ～ 1999',
            '2000-3000' => '2000 ～ 2999',
            '3000-4000' => '3000 ～ 3999',
            '4000-5000' => '4000 ～ 4999',
            '5000'      => '5000 ～',
        ),
        '5' => array(
            '0-4800'      => '～ 3',
            '4800-8000'   => '3 ～ 5',
            '8000-11200'  => '5 ～ 7',
            '11200-16000' => '7 ～ 10',
            '16000-32000' => '10 ～ 20',
            '32000-48000' => '20 ～ 30',
            '48000-64000' => '30 ～ 40',
            '64000'       => '40 ～',
        ),
    ),
));

/**
 * 各物件のアイコン画像
 */
Configure::write('MapIcon', array(
    'ResidenceBuilding' => array(
        1 => 'gmap_house_icon01.png',
        2 => 'gmap_house_icon02.png',
        3 => 'gmap_house_icon03.png',
        4 => 'gmap_house_icon04.png',
    ),
    'OfficeBuilding' => array(
        1 => 'gmap_office_icon01.png',
        2 => 'gmap_office_icon01.png',
        3 => 'gmap_office_icon02.png',
    ),
    'FactoryBuilding' => array(
        1 => 'gmap_factory_icon01.png',
        2 => 'gmap_factory_icon02.png',
        3 => 'gmap_factory_icon03.png',
    ),
));

/**
 * 入居形態（問い合わせフォーム）
 */
Configure::write('TenantForm', array(
    1 => '新規',
    2 => '移転',
));

Configure::write('largeArea', array(
    1 => '1 (SOUTH AREA) ',
    2 => '2 (CENTRAL AREA) ',
    3 => '3 (NORTH AREA) ',
));