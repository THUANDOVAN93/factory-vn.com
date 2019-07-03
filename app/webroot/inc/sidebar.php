<!-- == section_global/ == -->
<div id="section_global">

<!-- header/ -->
	<div id="header">
		<div id="sitelogo">
			<a href="/" id="siteid" name="siteid">東京デベロップメントコンサルタント | TOKYO DEVELOPMENT CONSULTANT</a>
		</div>
		<div id="header_area">ベトナムエリア THAILAND AREA</div>
		<dl>
			<dt>Currently registered : </dt>
			<dd><?php echo (number_format($totalBuildingCount)); ?> member</dd>
		</dl>
	</div>
	<!-- /header -->

	<div id="nav_global">
		<div id="nav_global_search" class="area_title">KEYWORD</div>
		<div id="nav_global_search_box">
			<form action="/search/" id="searchbox-tdc" class="search-box">
				<input type="hidden" name="cx" value="008006212690783945990:ytmaw75eo8u" />
				<input type="hidden" name="ie" value="utf-8" />
				<input type="hidden" name="hl" value="ja" />
				<input name="q" type="text" value="<?php echo urldecode( $_REQUEST["q"] ); ?>" class="search-box-input" />
				<input type="image" name="sa" src="/common/images/nav_global_search_btn.png" class="btn-image">
			</form>
			<script type="text/javascript" src="http://www.google.com/cse/tools/onthefly?form=searchbox-tdc&amp;lang=en"></script>
		</div>
		<!-- <div id="nav_global_factory" class="area_title">Search Factory, Industrial Park and Warehouse</div>
		<ul class="nav-global-group">
			<li class="nav_global_factory01 icon-greater"><a href="/factory/area/">Search from all over Vietnam</a></li>
			<li class="nav_global_factory02 icon-greater"><a href="/factory/area/all/">Search in Ho Chi Minh</a></li>
			<li class="nav_global_factory03 icon-greater"><a href="/factory/area/all/">Search in Hanoi</a></li>
			<li class="nav_global_factory04 icon-greater"><a href="/factory/area/all/">Search in Da Nang</a></li>
		</ul>

		<div id="nav_global_about" class="area_title">About US</div>
		<ul class="nav-global-group">
			<li class="nav_global_about01 icon-greater"><a href="/business/">Real estate department</a></li>
			<li class="nav_global_about02 icon-greater"><a href="/business/interior-results01.php">Interior construction department</a></li>
			<li class="nav_global_about06 icon-greater"><a href="/business/fact-link.php">FACT-LINK</a></li>
			<li class="nav_global_about04 last icon-greater"><a href="/business/trade.php">Trade department</a></li>
		</ul> -->
	</div>
	<!-- /nav_global -->

	<!-- <ul id="nav_global_sub" class="clearfix">
		<li class="nav_global_sub02 icon-greater"><a href="/company/">About Us</a></li>
		<li class="nav_global_sub03 icon-greater"><a href="/recruit/">Recruitment</a></li>
	</ul>
	<p id="nav_global_factlink"><a href="http://www.fact-link.com.vn/index.php?lang=jp" target="_blank">FACT-LINK MARKETPLACE CO.,LTD</a></p> -->
</div>
