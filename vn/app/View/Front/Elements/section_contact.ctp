<?php     $class = ''; ?>
<?php if(strpos($this->params['action'], 'detail') !== false) { ?>
<?php     $class = 'detail'; ?>
<?php } ?>

		<div class="contents_inquiry clearfix">
			<h3 class="<?php echo $class; ?>">物件についてのご相談・お問い合わせ</h3>
				<div class="contents_inquiry_detail">
					<h4>お電話・FAXでのお問い合わせ</h4>
					<ul class="clearfix">
						<li class="contents_inquiry_tel01">タイからのお電話 02-260-3698</li>
						<li class="contents_inquiry_tel02">タイ国外からのお電話 +66-2-260-3698</li>
						<li class="contents_inquiry_tel03">FAXをご利用の方 02-260-3697</li>
					</ul>
				</div>
<?php $detailLink = (isset($detailLink)) ? $detailLink : ''; ?>
				<p><a href="<?php echo $this->webroot; ?>contact/<?php echo $detailLink; ?>">お問い合わせフォーム</a></p>
		</div>
