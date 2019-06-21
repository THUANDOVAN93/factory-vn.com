<?php

// ページ情報
Configure::write('Page.infolist', array(
    'FrontTop' => array(
        'index' => array(
            'render'      => '/Top/index',
            'title'       => 'ベトナム国内の住まい、事務所、工場・工業団地の物件検索サイト | TDC',
            'keywords'    => 'ベトナム　工場,ベトナム　工業団地,ベトナムの工業団地,ベトナム　倉庫,ベトナム　内装,ベトナム　建築,ベトナム　不動産,バンコク　事務所,バンコク　アパート,バンコク　コンドミニアム',
            'description' => '当社でベトナム国内の不動産賃貸物件（住まい・事務所・工場倉庫・工業団地）を、オンライン検索できます。各物件についてのお問い合わせはお気軽に！',
            'canonical' => '',
        ),
    ),
    'FrontResidence' => array(
        'area_index' => array(
            'render'      => '/Residence/area_index',
            'title'       => '住まいを探す エリアから探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'residence/area/',
        ),
        'area_list' => array(
            'render'      => '/Residence/area_list',
            'title'       => '%sの物件一覧 | 住まいを探す エリアから探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => 'residence/area/',
        ),
        'area_hanoi' => array(
            'render'      => '/Residence/area_hanoi',
            'title'       => '住まいを探す ハノイで探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '', 
			'canonical'   => 'residence/area/hanoi/',
        ),
        'area_hanoi_list' => array(
            'render'      => '/Residence/area_hanoi_list',
            'title'       => '%sの物件一覧 | 住まいを探す ハノイで探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'residence/area/hanoi/list/',
        ),
        'area_detail' => array(
            'render'      => '/Residence/area_detail',
            'title'       => '%sの物件情報 | 住まいを探す エリアから探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'residence/area/detail/',
        ),
        'station_index' => array(
            'render'      => '/Residence/station_index',
            'title'       => '住まいを探す 駅から探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'residence/station/',
        ),
        'station_list' => array(
            'render'      => '/Residence/station_list',
            'title'       => '%sの物件一覧 | 住まいを探す 駅から探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'residence/station/list/',
        ),
        'station_detail' => array(
            'render'      => '/Residence/station_detail',
            'title'       => '%sの物件情報 | 住まいを探す 駅から探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'residence/station/detail/',
        ),
    ),
    'FrontOffice' => array(
        'area_index' => array(
            'render'      => '/Office/area_index',
            'title'       => '事務所を探す エリアから探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'office/area/',
        ),
        'area_list' => array(
            'render'      => '/Office/area_list',
            'title'       => '%sの物件一覧 | 事務所を探す エリアから探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'office/area/list/',
        ),
        'area_hanoi' => array(
            'render'      => '/Office/area_hanoi',
            'title'       => '事務所を探す ハノイで探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '', 
			'canonical'   => 'office/area/hanoi/',
        ),
        'area_hanoi_list' => array(
            'render'      => '/Office/area_hanoi_list',
            'title'       => '%sの物件一覧 | 事務所を探す ハノイで探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'office/area/hanoi/list/',
        ),
        'area_detail' => array(
            'render'      => '/Office/area_detail',
            'title'       => '%sの物件情報 | 事務所を探す エリアから探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'office/area/detail/',
        ),
        'station_index' => array(
            'render'      => '/Office/station_index',
            'title'       => '事務所を探す 駅から探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'office/station/',
        ),
        'station_list' => array(
            'render'      => '/Office/station_list',
            'title'       => '%sの物件一覧 | 事務所を探す 駅から探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'office/station/list/',
        ),
        'station_detail' => array(
            'render'      => '/Office/station_detail',
            'title'       => '%sの物件情報 | 事務所を探す 駅から探す | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'office/station/detail/',
        ),
    ),
    'FrontFactory' => array(
        'area_index' => array(
            'render'      => '/Factory/area_index',
            'title'       => '工場・工業用地を探す ベトナム全域工業地帯・工業団地一覧から探す | TDC',
            'keywords'    => '工業団地,ベトナム　工業用地,ベトナム　工業地帯,ベトナム　工業団地,ベトナム　工業団地　一覧,ベトナムの工業団地,ベトナム　工場,ベトナム　倉庫',
            'description' => '当社でベトナム国内の工場・工業地帯・工業団地一覧からオンライン検索できます。詳しい情報も物件ごとに掲載しています。各物件についてのお問い合わせはお気軽に！',
            'canonical'   => 'factory/area/',
        ),
        'area_north' => array(
            'render'      => '/Factory/area_north',
            'title'       => '工場・工業用地を探す ベトナム北部工業地帯・工業団地一覧から探す | TDC',
            'keywords'    => '工業団地,ベトナム　工業用地,ベトナム　工業地帯,ベトナム　工業団地,ベトナム　工業団地　一覧,ベトナムの工業団地,ベトナム　工場,ベトナム　倉庫',
            'description' => '当社でベトナム国内の工場・工業地帯・工業団地一覧からオンライン検索できます。詳しい情報も物件ごとに掲載しています。各物件についてのお問い合わせはお気軽に！',
            'canonical'   => 'factory/area/north/',
        ),
        'area_north_list' => array(
            'render'      => '/Factory/area_north_list',
            'title'       => '工場・工業用地を探す ベトナム北部工業地帯・工業団地一覧から探す | TDC',
            'keywords'    => '工業団地,ベトナム　工業用地,ベトナム　工業地帯,ベトナム　工業団地,ベトナム　工業団地　一覧,ベトナムの工業団地,ベトナム　工場,ベトナム　倉庫',
            'description' => '当社でベトナム国内の工場・工業地帯・工業団地一覧からオンライン検索できます。詳しい情報も物件ごとに掲載しています。各物件についてのお問い合わせはお気軽に！',
            'canonical'   => 'factory/area/north/list/',
        ),
        'area_central' => array(
            'render'      => '/Factory/area_central',
            'title'       => '工場・工業用地を探す ベトナム中部工業地帯・工業団地一覧から探す | TDC',
            'keywords'    => '工業団地,ベトナム　工業用地,ベトナム　工業地帯,ベトナム　工業団地,ベトナム　工業団地　一覧,ベトナムの工業団地,ベトナム　工場,ベトナム　倉庫',
            'description' => '当社でベトナム国内の工場・工業地帯・工業団地一覧からオンライン検索できます。詳しい情報も物件ごとに掲載しています。各物件についてのお問い合わせはお気軽に！',
            'canonical'   => 'factory/area/central/',
        ),
        'area_central_list' => array(
            'render'      => '/Factory/area_central_list',
            'title'       => '工場・工業用地を探す ベトナム中部工業地帯・工業団地一覧から探す | TDC',
            'keywords'    => '工業団地,ベトナム　工業用地,ベトナム　工業地帯,ベトナム　工業団地,ベトナム　工業団地　一覧,ベトナムの工業団地,ベトナム　工場,ベトナム　倉庫',
            'description' => '当社でベトナム国内の工場・工業地帯・工業団地一覧からオンライン検索できます。詳しい情報も物件ごとに掲載しています。各物件についてのお問い合わせはお気軽に！',
            'canonical'   => 'factory/area/central/list/',
        ),
        'area_south' => array(
            'render'      => '/Factory/area_south',
            'title'       => '工場・工業用地を探す ベトナム南部工業地帯・工業団地一覧から探す | TDC',
            'keywords'    => '工業団地,ベトナム　工業用地,ベトナム　工業地帯,ベトナム　工業団地,ベトナム　工業団地　一覧,ベトナムの工業団地,ベトナム　工場,ベトナム　倉庫',
            'description' => '当社でベトナム国内の工場・工業地帯・工業団地一覧からオンライン検索できます。詳しい情報も物件ごとに掲載しています。各物件についてのお問い合わせはお気軽に！',
            'canonical'   => 'factory/area/south/',
        ),
        'area_south_list' => array(
            'render'      => '/Factory/area_south_list',
            'title'       => '工場・工業用地を探す ベトナム南部工業地帯・工業団地一覧から探す | TDC',
            'keywords'    => '工業団地,ベトナム　工業用地,ベトナム　工業地帯,ベトナム　工業団地,ベトナム　工業団地　一覧,ベトナムの工業団地,ベトナム　工場,ベトナム　倉庫',
            'description' => '当社でベトナム国内の工場・工業地帯・工業団地一覧からオンライン検索できます。詳しい情報も物件ごとに掲載しています。各物件についてのお問い合わせはお気軽に！',
            'canonical'   => 'factory/area/south/list/',
        ),
        'area_all' => array(
            'render'      => '/Factory/area_all',
            'title'       => '工場・工業用地を探す ベトナム全域工業地帯・工業団地一覧から探す | TDC',
            'keywords'    => '工業団地,ベトナム　工業用地,ベトナム　工業地帯,ベトナム　工業団地,ベトナム　工業団地　一覧,ベトナムの工業団地,ベトナム　工場,ベトナム　倉庫',
            'description' => '当社でベトナム国内の工場・工業地帯・工業団地一覧からオンライン検索できます。詳しい情報も物件ごとに掲載しています。各物件についてのお問い合わせはお気軽に！',
            'canonical'   => 'factory/area/all/',
        ),
        'area_list' => array(
            'render'      => '/Factory/area_list',
            'title'       => '%sの物件一覧 | 工場・工業用地を探す ベトナム全域工業地帯・工業団地一覧から探す | TDC',
            'keywords'    => '工業団地,ベトナム　工業用地,ベトナム　工業地帯,ベトナム　工業団地,ベトナム　工業団地　一覧,ベトナムの工業団地,ベトナム　工場,ベトナム　倉庫',
            'description' => '当社でベトナム国内の工場・工業地帯・工業団地一覧からオンライン検索できます。詳しい情報も物件ごとに掲載しています。各物件についてのお問い合わせはお気軽に！',
            'canonical'   => 'factory/area/all/',
        ),
        'area_detail' => array(
            'render'      => '/Factory/area_detail',
            'title'       => '%sの物件情報 | 工場・工業用地を探す ベトナム全域工業地帯・工業団地一覧から探す | TDC',
            'keywords'    => '工業団地,ベトナム　工業用地,ベトナム　工業地帯,ベトナム　工業団地,ベトナム　工業団地　一覧,ベトナムの工業団地,ベトナム　工場,ベトナム　倉庫',
            'description' => '当社でベトナム国内の工場・工業地帯・工業団地一覧からオンライン検索できます。詳しい情報も物件ごとに掲載しています。各物件についてのお問い合わせはお気軽に！',
            'canonical'   => 'factory/area/detail/',
        ),
    ),
    'FrontContact' => array(
        'residence_index' => array(
            'render'      => '/Contact/Residence/index',
            'title'       => '住まいのお問い合わせ(入力) | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/residence/',
        ),
        'residence_confirm' => array(
            'render'      => '/Contact/Residence/confirm',
            'title'       => '住まいのお問い合わせ(確認) | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/residence/',
        ),
        'residence_complete' => array(
            'render'      => '/Contact/Residence/complete',
            'title'       => '住まいのお問い合わせ(完了) | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/residence/',
        ),
        'office_index' => array(
            'render'      => '/Contact/Office/index',
            'title'       => '事務所のお問い合わせ(入力) | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/office/',
        ),
        'office_confirm' => array(
            'render'      => '/Contact/Office/confirm',
            'title'       => '事務所のお問い合わせ(確認) | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/office/',
        ),
        'office_complete' => array(
            'render'      => '/Contact/Office/complete',
            'title'       => '事務所のお問い合わせ(完了) | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/office/',
        ),
        'factory_index' => array(
            'render'      => '/Contact/Factory/index',
            'title'       => '工場・工業用地のお問い合わせ(入力) | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical' => 'contact/factory/',
        ),
        'factory_confirm' => array(
            'render'      => '/Contact/Factory/confirm',
            'title'       => '工場・工業用地のお問い合わせ(確認) | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/factory/',
        ),
        'factory_complete' => array(
            'render'      => '/Contact/Factory/complete',
            'title'       => '工場・工業用地のお問い合わせ(完了) | 東京デベロップメントコンサルタント',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/factory/',
        ),
    ),

    // Xmlなどに使うものなので以下の記述は下の方に記載したいです。
    'FrontMap' => array(
        'index' => array(
            'render'      => '/Map/index',
            'title'       => '',
            'keywords'    => '',
            'description' => '',
            'canonical'   => '',
        ),
    ),
));
