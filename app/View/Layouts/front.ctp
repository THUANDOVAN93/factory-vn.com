<?php echo '<?xml version="1.0" encoding="utf-8"?>' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-script-type" content="text/javascript" />
	<meta http-equiv="content-style-type" content="text/css" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />
	<meta name="keywords" content="<?php echo (isset($meta_keywords) ? $meta_keywords : ''); ?>" />
	<meta name="description" content="<?php echo (isset($meta_description) ? $meta_description : ''); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo $title_for_layout; ?>" />
	<meta property="og:description" content="<?php echo (isset($meta_description) ? $meta_description : ''); ?>" />
	<meta property="og:url" content="<?php echo $this->Html->url('', true); ?>" />
<?php $ogImageUrl = 'http://' . env('HTTP_HOST') . '/common/images/header_siteid.png'; ?>
<?php if (isset($residenceBuilding['ResidencePhoto']['Main'])) { ?>
<?php     $ogImageUrl = 'http://' . env('HTTP_HOST') . '/upload/ResidenceBuildings/tmb_main_' . $residenceBuilding['ResidencePhoto']['Main'][0]['path']; ?>
<?php } else if (isset($officeBuilding['OfficePhoto']['Main'])) { ?>
<?php     $ogImageUrl = 'http://' . env('HTTP_HOST') . '/upload/OfficeBuildings/tmb_main_' . $officeBuilding['OfficePhoto']['Main'][0]['path']; ?>
<?php } else if (isset($factoryBuilding['FactoryPhoto']['Main'])) { ?>
<?php     $ogImageUrl = 'http://' . env('HTTP_HOST') . '/upload/FactoryBuildings/tmb_main_' . $factoryBuilding['FactoryPhoto']['Main'][0]['path']; ?>
<?php } ?>
	<meta property="og:image" content="<?php echo $ogImageUrl ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->webroot; ?>common/css/style.css?ver=2" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->webroot; ?>common/css/factory-list.css" />
	<link rel="alternate stylesheet" type="text/css" media="all" href="<?php echo $this->webroot; ?>common/css/font_small.css" title="small" />
	<link rel="alternate stylesheet" type="text/css" media="all" href="<?php echo $this->webroot; ?>common/css/font_meduim.css" title="medium" />
	<link rel="alternate stylesheet" type="text/css" media="all" href="<?php echo $this->webroot; ?>common/css/font_large.css" title="large" />
	<link rel="canonical" href="http://www.tdc-thai.com/<?php echo (isset($link_canonical) ? $link_canonical : ''); ?>" />
	<script type="text/javascript" src="<?php echo $this->webroot; ?>common/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $this->webroot; ?>common/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="<?php echo $this->webroot; ?>common/js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->webroot; ?>common/js/styleswitcher.js"></script>
	<script type="text/javascript" src="<?php echo $this->webroot; ?>common/js/global.js"></script>
	<script type="text/javascript" src="<?php echo $this->webroot; ?>common/js/jquery.carouFredSel-6.1.0.js"></script>
	<script type="text/javascript" src="<?php echo $this->webroot; ?>common/js/indexList.js"></script>
	<title><?php echo $title_for_layout; ?></title>
	<!--script type="text/javascript" src="<?php echo $this->webroot; ?>common/js/ga.js"></script-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-24224049-38', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>

<!-- === container/ === -->
<div id="container">

<?php echo $this->element('sidebar'); ?>

	<!-- == section_contents/ == -->
	<div id="section_contents">

<?php echo $this->element('section_header'); ?>

		<!-- index_section_main/ -->
<?php echo $this->fetch('content'); ?>
		<!-- /index_section_main -->

	</div>
	<!-- == /section_contents == -->
</div>
<!-- === /container === -->

<!-- === footer/ === -->
<?php echo $this->element('footer'); ?>
<!-- === /footer === -->

</body>
</html>