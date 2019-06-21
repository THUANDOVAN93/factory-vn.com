<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://133.242.142.95/vn/handbook/wp-content/themes/tdc/style.css" media="screen">
	<link rel="alternate stylesheet" href="<?php bloginfo('template_url'); ?>/common/css/font_small.css" title="small">
	<link rel="alternate stylesheet" href="<?php bloginfo('template_url'); ?>/common/css/font_meduim.css" title="medium">
	<link rel="alternate stylesheet" href="<?php bloginfo('template_url'); ?>/common/css/font_large.css" title="large">
	<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/common/js/scrollsmoothly.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/common/js/styleswitcher.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/common/js/global.js"></script>
	<title><?php wp_title(); ?><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<script type="text/javascript" src="/common/js/ga.js"></script>
</head>
<body>

<!-- header/ -->
<div class="print"><img src="http://133.242.142.95/vn/handbook/wp-content/themes/tdc/common/images/siteid.png" alt="" /></div>
<div id="section_header">
	<div id="header" class="clearfix">

	<h1 id="siteid"><a href="<?php echo esc_url ( home_url() ); ?>">タイのビジネス経済ハンドブック</a></h1>
		<!-- header_nav/ -->
		<div id="header_nav" class="clearfix">
		<ul id="header_contact" class="clearfix">
		<li id="header_contact01"><a href="http://www.tdc-vietnam.com/contact/" target="_blank">TDCへお問い合わせ</a></li>
		<li id="header_contact02"><a href="http://www.fact-link.com.vn/contact.php" target="_blank">ファクトリンクへお問い合わせ</a></li>
		</ul>
		<!-- fontnav/ -->
		<dl id="header_fontnav" class="clearfix">
			<dt>文字サイズ</dt>
			<dd>
				<ul class="clearfix">
				<li id="fontnav_s"><a href="javascript:void(0);" onclick="setActiveStyleSheet('small'); return false;" onkeypress="setActiveStyleSheet('small'); return false;">小</a></li>
				<li id="fontnav_m"><a href="javascript:void(0);" onclick="setActiveStyleSheet('medium'); return false;" onkeypress="setActiveStyleSheet('medium'); return false;">中</a></li>
				<li id="fontnav_l"><a href="javascript:void(0);" onclick="setActiveStyleSheet('large'); return false;" onkeypress="setActiveStyleSheet('large'); return false;">大</a></li>
				</ul>
			</dd>
		</dl>
		<!-- /fontnav -->
		</div>
		<!-- /header_nav -->
	</div>
</div>
<!-- /header -->