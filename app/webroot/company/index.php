<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-script-type" content="text/javascript" />
	<meta http-equiv="content-style-type" content="text/css" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" type="text/css" media="all" href="../common/css/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="../common/css/general.css" />
	<link rel="stylesheet" type="text/css" media="all" href="../common/css/company.css" />
	<link rel="alternate stylesheet" type="text/css" media="all" href="../common/css/font_small.css" title="small" />
	<link rel="alternate stylesheet" type="text/css" media="all" href="../common/css/font_meduim.css" title="medium" />
	<link rel="alternate stylesheet" type="text/css" media="all" href="../common/css/font_large.css" title="large" />
	<link rel="canonical" href="http://www.tdc-thai.com/company/" />
	<script type="text/javascript" src="../common/js/jquery.js"></script>
	<script type="text/javascript" src="../common/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="../common/js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="../common/js/styleswitcher.js"></script>
	<script type="text/javascript" src="../common/js/global.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDRe-SLe-oVJhmp1x0wDGUdtVOmFceE8eU&v=quarterly&v=3"></script>
	<title>Company Information | Factory Vietnam</title>
	<script type="text/javascript" src="../common/js/ga.js"></script>
</head>
<body>

<!-- === container/ === -->
<div id="container">
<?php include("../inc/sidebar.php"); ?>

<!-- == section_contents/ == -->
<div id="section_contents">
<?php include("../inc/section_header.php"); ?>

<!-- topicpath/ -->
<ul id="topicpath">
	<li class="home"><a href="/">TOP</a></li>
	<li>About us</li>
</ul>
<!-- /topicpath -->

<div id="companyCnt" class="main">
<h1 class="header_hgroup">ABOUT US</h1>

<h2 class="ttl_hgroup">Company Profile</h2>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<th>Description</th>
<td>
<ul class="list clearfix">
<li>TDC Vietnam is operated by  TDC INTERNATIONAL (VIET NAM) COMPANY LIMITED which is established and managed by Japanese with the aim of supporting manufacturers in Vietnam. Having more than 10 years experience in Vietnam since establishment of 2007, we have wide range of factory options and reliable networks.</li>
<li>The aim of TDC Vietnam is provide the service that manufacturers who are going to establish factory in Vietnam can search and find suitable property such as factory, industrial park and warehouse. We will provide free options based on manufacturers's requirement such as location, area, purpose and the starting time of the factory. On our website , we list most of the major industrial zone in Vietnam with full information of location, management, equipments.</li>
</ul>
</td>
</tr>
<tr>
<th scope="row">Company name</th>
<td>TDC INTERNATIONAL (VIET NAM) COMPANY LIMITED</td>
</tr>
<tr>
<th scope="row">Director</th>
<td>Hitoshi Sato</td>
</tr>
<tr>
<th scope="row">Establish</th>
<td>21st November 2007</td>
</tr>
<tr>
<th scope="row">Address</th>
<td>
602/43 Dien Bien Phu, Ward 22, Binh Thanh District,<br>
Ho Chi Minh City, Vietnam.
</td>
</tr>
<tr>
<th scope="row">Phone</th>
<td>
(＋84)-8-8876-7138
</td>
<tr>
<th scope="row">Business Description</th>
<td>

<dd>
<ul class="list clearfix">
<li>Real estate brokerage Operating TDC Vietnam and providing information of factories, industrial park and warehouses in Vietnam for manufacturers.</li>
</ul>
</dd>
</dl>
</td>
</tr>
<!-- <tr>
<th scope="row">関連提携会社</th>
<td>
<ul class="list clearfix">
<li>TDC INTERNATIONAL CO.,LTD.</li>
<li>TDC INTERNATIONAL（VN) CO.,LTD.</li>
<li>TOKYO　DEVELOPMENT　CONSULTANTS(VN)CO.,LTD.</li>
<li>テレコムスクエアー</li>
</ul>
</td>
</tr> -->
</table>
<!-- 13.723059, 100.569775 -->
<h2 id="access" class="ttl_hgroup">Map</h2>
<div id="access-map" style="height:410px; width:730px;"></div>

<!-- contents_inquiry/ -->
<?php //include("../inc/footer.php"); ?>
<!-- /contents_inquiry -->

</div><!-- / #linkCnt .main -->

<script type="text/javascript">
//<![CDATA[

function initializeAccessMap () {
	var center = new google.maps.LatLng(10.797333, 106.717426);
	var options = {
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		center: center,
		disableDefaultUI: true,
		zoomControl: true,
		zoomControlOptions:{
			style:google.maps.ZoomControlStyle.SMALL
		}
	};
	var map = new google.maps.Map(document.getElementById('access-map'), options);

	//var latlng = new google.maps.LatLng(10.782547, 106.705761);
	var latlng = new google.maps.LatLng(10.797333, 106.717426);
	var marker = new google.maps.Marker({
		position: latlng,
		map: map
	});

	var content = '<div id="infoWindow" style="width:250px;height:130px;">' +
	'<h1 style="font-weight:bold;">TDC VIETNAM</h1>' +
	'<p style="margin-top:10px;">602/43 Dien Bien Phu, Ward 22, Binh Thanh District, Ho Chi Minh City</p>' +
	'</div>';
	var infowindow = new google.maps.InfoWindow({
		content: content
	});

	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map, marker);
	});
	infowindow.open(map, marker);
}

// google.maps.event.addDomListener(window, 'load', initializeAccessMap());
initializeAccessMap()

//]]>
</script>

</div>
<!-- == /section_contents == -->

</div>
<!-- === /container === -->

<?php include("../inc/footer.php"); ?>

</body>
</html>