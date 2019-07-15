<?php

// ページ情報
Configure::write('Page.infolist', array(
    'FrontTop' => array(
        'index' => array(
            'render'      => '/Top/index',
            'title'       => 'Property search site for homes, offices, factories and industrial areas in Vietnam | FACTORY VN',
            'keywords'    => 'Vietnam Factory, Vietnam Industrial Park, Vietnam Industrial Park, Vietnam Warehouse, Vietnam Interior, Vietnam Architecture, Vietnam Real Estate',
            'description' => 'We can search for real estate rental properties (home, office, factory warehouse, industrial park) in Vietnam online. Feel free to inquire about each property!',
            'canonical' => '',
        ),
    ),
    'FrontResidence' => array(
        'area_index' => array(
            'render'      => '/Residence/area_index',
            'title'       => 'We look for house We look for from area | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'residence/area/',
        ),
        'area_list' => array(
            'render'      => '/Residence/area_list',
            'title'       => '%sの物件一覧 | 住まいを探す エリアから探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => 'residence/area/',
        ),
        'area_hanoi' => array(
            'render'      => '/Residence/area_hanoi',
            'title'       => '住まいを探す ハノイで探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '', 
			'canonical'   => 'residence/area/hanoi/',
        ),
        'area_hanoi_list' => array(
            'render'      => '/Residence/area_hanoi_list',
            'title'       => '%sの物件一覧 | 住まいを探す ハノイで探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'residence/area/hanoi/list/',
        ),
        'area_detail' => array(
            'render'      => '/Residence/area_detail',
            'title'       => '%sの物件情報 | 住まいを探す エリアから探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'residence/area/detail/',
        ),
        'station_index' => array(
            'render'      => '/Residence/station_index',
            'title'       => '住まいを探す 駅から探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'residence/station/',
        ),
        'station_list' => array(
            'render'      => '/Residence/station_list',
            'title'       => '%sの物件一覧 | 住まいを探す 駅から探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'residence/station/list/',
        ),
        'station_detail' => array(
            'render'      => '/Residence/station_detail',
            'title'       => '%sの物件情報 | 住まいを探す 駅から探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'residence/station/detail/',
        ),
    ),
    'FrontOffice' => array(
        'area_index' => array(
            'render'      => '/Office/area_index',
            'title'       => '事務所を探す エリアから探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'office/area/',
        ),
        'area_list' => array(
            'render'      => '/Office/area_list',
            'title'       => '%sの物件一覧 | 事務所を探す エリアから探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'office/area/list/',
        ),
        'area_hanoi' => array(
            'render'      => '/Office/area_hanoi',
            'title'       => '事務所を探す ハノイで探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '', 
			'canonical'   => 'office/area/hanoi/',
        ),
        'area_hanoi_list' => array(
            'render'      => '/Office/area_hanoi_list',
            'title'       => '%sの物件一覧 | 事務所を探す ハノイで探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'office/area/hanoi/list/',
        ),
        'area_detail' => array(
            'render'      => '/Office/area_detail',
            'title'       => '%sの物件情報 | 事務所を探す エリアから探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'office/area/detail/',
        ),
        'station_index' => array(
            'render'      => '/Office/station_index',
            'title'       => '事務所を探す 駅から探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'office/station/',
        ),
        'station_list' => array(
            'render'      => '/Office/station_list',
            'title'       => '%sの物件一覧 | 事務所を探す 駅から探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'office/station/list/',
        ),
        'station_detail' => array(
            'render'      => '/Office/station_detail',
            'title'       => '%sの物件情報 | 事務所を探す 駅から探す | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'office/station/detail/',
        ),
    ),
    'FrontFactory' => array(
        'area_index' => array(
            'render'      => '/Factory/area_index',
            'title'       => 'Find factory / industrial site Search from the list of industrial areas and industrial areas in the whole of Vietnam | TDC',
            'keywords'    => 'Industrial park, Vietnam Industrial land, Vietnam Industrial zone, Vietnam Industrial park, Vietnam Industrial park list, Vietnam industrial park, Vietnam factory, Vietnam Warehouse',
            'description' => 'We can search online from the list of factories, industrial areas and industrial areas in Vietnam. Detailed information is also posted for each property. Feel free to inquire about each property!',
            'canonical'   => 'factory/area/',
        ),
        'area_north' => array(
            'render'      => '/Factory/area_north',
            'title'       => 'Find factory / industrial site Search from the list of industrial areas and industrial areas in northern Vietnam | TDC',
            'keywords'    => 'Industrial park, Vietnam Industrial land, Vietnam Industrial zone, Vietnam Industrial park, Vietnam Industrial park list, Vietnam industrial park, Vietnam factory, Vietnam Warehouse',
            'description' => 'We can search online from the list of factories, industrial areas and industrial areas in Vietnam. Detailed information is also posted for each property. Feel free to inquire about each property!',
            'canonical'   => 'factory/area/north/',
        ),
        'area_north_list' => array(
            'render'      => '/Factory/area_north_list',
            'title'       => 'Find factory / industrial site Search from the list of industrial areas and industrial areas in northern Vietnam | TDC',
            'keywords'    => 'Industrial park, Vietnam Industrial land, Vietnam Industrial zone, Vietnam Industrial park, Vietnam Industrial park list, Vietnam industrial park, Vietnam factory, Vietnam Warehouse',
            'description' => 'We can search online from the list of factories, industrial areas and industrial areas in Vietnam. Detailed information is also posted for each property. Feel free to inquire about each property!',
            'canonical'   => 'factory/area/north/list/',
        ),
        'area_central' => array(
            'render'      => '/Factory/area_central',
            'title'       => 'Find factory / industrial site Search from the list of Central Vietnam industrial areas and industrial parks | TDC',
            'keywords'    => 'Industrial park, Vietnam Industrial land, Vietnam Industrial zone, Vietnam Industrial park, Vietnam Industrial park list, Vietnam industrial park, Vietnam factory, Vietnam Warehouse',
            'description' => 'We can search online from the list of factories, industrial areas and industrial areas in Vietnam. Detailed information is also posted for each property. Feel free to inquire about each property!',
            'canonical'   => 'factory/area/central/',
        ),
        'area_central_list' => array(
            'render'      => '/Factory/area_central_list',
            'title'       => 'Find factory / industrial site Search from the list of Central Vietnam industrial areas and industrial parks | TDC',
            'keywords'    => 'Industrial park, Vietnam Industrial land, Vietnam Industrial zone, Vietnam Industrial park, Vietnam Industrial park list, Vietnam industrial park, Vietnam factory, Vietnam Warehouse',
            'description' => 'We can search online from the list of factories, industrial areas and industrial areas in Vietnam. Detailed information is also posted for each property. Feel free to inquire about each property!',
            'canonical'   => 'factory/area/central/list/',
        ),
        'area_south' => array(
            'render'      => '/Factory/area_south',
            'title'       => 'Find factory / industrial site Search from the list of industrial areas and industrial areas in southern Vietnam | TDC',
            'keywords'    => 'Industrial park, Vietnam Industrial land, Vietnam Industrial zone, Vietnam Industrial park, Vietnam Industrial park list, Vietnam industrial park, Vietnam factory, Vietnam Warehouse',
            'description' => 'We can search online from the list of factories, industrial areas and industrial areas in Vietnam. Detailed information is also posted for each property. Feel free to inquire about each property!',
            'canonical'   => 'factory/area/south/',
        ),
        'area_south_list' => array(
            'render'      => '/Factory/area_south_list',
            'title'       => 'Find factory / industrial site Search from the list of industrial areas and industrial areas in southern Vietnam | TDC',
            'keywords'    => 'Industrial park, Vietnam Industrial land, Vietnam Industrial zone, Vietnam Industrial park, Vietnam Industrial park list, Vietnam industrial park, Vietnam factory, Vietnam Warehouse',
            'description' => 'We can search online from the list of factories, industrial areas and industrial areas in Vietnam. Detailed information is also posted for each property. Feel free to inquire about each property!',
            'canonical'   => 'factory/area/south/list/',
        ),
        'area_all' => array(
            'render'      => '/Factory/area_all',
            'title'       => 'Find factory / industrial site Search from the list of industrial areas and industrial areas in the whole of Vietnam | TDC',
            'keywords'    => 'Industrial park, Vietnam Industrial land, Vietnam Industrial zone, Vietnam Industrial park, Vietnam Industrial park list, Vietnam industrial park, Vietnam factory, Vietnam Warehouse',
            'description' => 'We can search online from the list of factories, industrial areas and industrial areas in Vietnam. Detailed information is also posted for each property. Feel free to inquire about each property!',
            'canonical'   => 'factory/area/all/',
        ),
        'area_list' => array(
            'render'      => '/Factory/area_list',
            'title'       => 'List of properties of %s | Find factory / industrial site Search from the list of industrial areas and industrial areas in the whole of Vietnam | TDC',
            'keywords'    => 'Industrial park, Vietnam Industrial land, Vietnam Industrial zone, Vietnam Industrial park, Vietnam Industrial park list, Vietnam industrial park, Vietnam factory, Vietnam Warehouse',
            'description' => 'We can search online from the list of factories, industrial areas and industrial areas in Vietnam. Detailed information is also posted for each property. Feel free to inquire about each property!',
            'canonical'   => 'factory/area/all/',
        ),
        'area_detail' => array(
            'render'      => '/Factory/area_detail',
            'title'       => 'List of properties of %s | Find factory / industrial site Search from the list of industrial areas and industrial areas in the whole of Vietnam | TDC',
            'keywords'    => 'Industrial park, Vietnam Industrial land, Vietnam Industrial zone, Vietnam Industrial park, Vietnam Industrial park list, Vietnam industrial park, Vietnam factory, Vietnam Warehouse',
            'description' => 'We can search online from the list of factories, industrial areas and industrial areas in Vietnam. Detailed information is also posted for each property. Feel free to inquire about each property!',
            'canonical'   => 'factory/area/detail/',
        ),
    ),
    'FrontContact' => array(
        'residence_index' => array(
            'render'      => '/Contact/Residence/index',
            'title'       => '住まいのお問い合わせ(入力) | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/residence/',
        ),
        'residence_confirm' => array(
            'render'      => '/Contact/Residence/confirm',
            'title'       => '住まいのお問い合わせ(確認) | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/residence/',
        ),
        'residence_complete' => array(
            'render'      => '/Contact/Residence/complete',
            'title'       => '住まいのお問い合わせ(完了) | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/residence/',
        ),
        'office_index' => array(
            'render'      => '/Contact/Office/index',
            'title'       => '事務所のお問い合わせ(入力) | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/office/',
        ),
        'office_confirm' => array(
            'render'      => '/Contact/Office/confirm',
            'title'       => '事務所のお問い合わせ(確認) | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/office/',
        ),
        'office_complete' => array(
            'render'      => '/Contact/Office/complete',
            'title'       => '事務所のお問い合わせ(完了) | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/office/',
        ),
        'factory_index' => array(
            'render'      => '/Contact/Factory/index',
            'title'       => '工場・工業用地のお問い合わせ(入力) | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical' => 'contact/factory/',
        ),
        'factory_confirm' => array(
            'render'      => '/Contact/Factory/confirm',
            'title'       => '工場・工業用地のお問い合わせ(確認) | FACTORY VIETNAM',
            'keywords'    => '',
            'description' => '',
            'canonical'   => 'contact/factory/',
        ),
        'factory_complete' => array(
            'render'      => '/Contact/Factory/complete',
            'title'       => '工場・工業用地のお問い合わせ(完了) | FACTORY VIETNAM',
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
