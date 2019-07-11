<!-- <?php     $class = ''; ?>
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
 -->

<!-- topicpath/ -->
<ul id="topicpath">
</ul>
<!-- /topicpath -->

<div id="contactCnt">

<h3 class="contact_title">Inquiry form</h3>
<p class="f-14">Please send inquiry by this form. <br>Based on your requirements such as location, area, purpose and when your business will start operation etc, we will provide options for you for free! </p>
<div class="errorTxt">
<?php $err = isset($validErrors['ContactFactory']['company_name'][0]); ?>
<?php if ($err) { ?>
	<p><?php echo h($validErrors['ContactFactory']['company_name'][0]); ?></p>
<?php } ?>
<?php $err = isset($validErrors['ContactFactory']['industry'][0]); ?>
<?php if ($err) { ?>
	<p><?php echo h($validErrors['ContactFactory']['industry'][0]); ?></p>
<?php } ?>
<?php $err = isset($validErrors['ContactFactory']['name'][0]); ?>
<?php if ($err) { ?>
	<p><?php echo h($validErrors['ContactFactory']['name'][0]); ?></p>
<?php } ?>
<?php $err = isset($validErrors['ContactFactory']['address'][0]); ?>
<?php if ($err) { ?>
	<p><?php echo h($validErrors['ContactFactory']['address'][0]); ?></p>
<?php } ?>
<?php $err = isset($validErrors['ContactFactory']['tel'][0]); ?>
<?php if ($err) { ?>
	<p><?php echo h($validErrors['ContactFactory']['tel'][0]); ?></p>
<?php } ?>
<?php $err = isset($validErrors['ContactFactory']['fax'][0]); ?>
<?php if ($err) { ?>
	<p><?php echo h($validErrors['ContactFactory']['fax'][0]); ?></p>
<?php } ?>
<?php $err = isset($validErrors['ContactFactory']['boi_zone'][0]); ?>
<?php if ($err) { ?>
	<p><?php echo h($validErrors['ContactFactory']['boi_zone'][0]); ?></p>
<?php } ?>
<?php $err = isset($validErrors['ContactFactory']['location'][0]); ?>
<?php if ($err) { ?>
	<p><?php echo h($validErrors['ContactFactory']['location'][0]); ?></p>
<?php } ?>
<?php $err = isset($validErrors['ContactFactory']['floor_space_site'][0]); ?>
<?php if ($err) { ?>
	<p><?php echo h($validErrors['ContactFactory']['floor_space_site'][0]); ?></p>
<?php } ?>
<?php $err = isset($validErrors['ContactFactory']['floor_space_building'][0]); ?>
<?php if ($err) { ?>
	<p><?php echo h($validErrors['ContactFactory']['floor_space_building'][0]); ?></p>
<?php } ?>
<?php $err = isset($validErrors['ContactFactory']['weight_limit'][0]); ?>
<?php if ($err) { ?>
	<p><?php echo h($validErrors['ContactFactory']['weight_limit'][0]); ?></p>
<?php } ?>
<?php $err = isset($validErrors['ContactFactory']['building_height'][0]); ?>
<?php if ($err) { ?>
	<p><?php echo h($validErrors['ContactFactory']['building_height'][0]); ?></p>
<?php } ?>
<?php $err = isset($validErrors['ContactFactory']['message'][0]); ?>
<?php if ($err) { ?>
	<p><?php echo h($validErrors['ContactFactory']['message'][0]); ?></p>
<?php } ?>
<?php $err = isset($validErrors['ContactFactory']['email'][0]); ?>
<?php if ($err) { ?>
	<p><?php echo h($validErrors['ContactFactory']['email'][0]); ?></p>
<?php } ?>
</div>

<?php echo $this->Form->create('ContactFactory', array('id' => 'form', 'url' => '/contact/factory/confirm', 'autocomplete' => 'off')); ?>

	<table border="0" cellspacing="0" cellpadding="0" summary="お問い合せフォーム">
		<col width="25%" />
		<col width="" />
		<tr>
			<th scope="row"><span class="must">Required</span>Name</th>
			<td>
				<?php echo $this->Form->text('ContactFactory.name', array('class' => 'type01')); ?>
			</td>
		</tr>
		<tr>
			<th scope="row"><span class="must">Required</span>Phone number</th>
			<td>
				<?php echo $this->Form->text('ContactFactory.tel', array('class' => 'type01')); ?>
			</td>
		</tr>
		<tr>
			<th scope="row">Company</th>
			<td>
				<?php echo $this->Form->text('ContactFactory.company_name', array('class' => 'type02')); ?>
			</td>
		</tr>
		<tr>
			<th scope="row"><span class="must">Required</span>Mail address</th>
			<td>
				<?php echo $this->Form->text('ContactFactory.email1', array('class' => 'type04')); ?>@

<?php echo $this->Form->text('ContactFactory.email2', array('class' => 'type04')); ?>
<?php echo $this->Form->hidden('ContactFactory.email'); ?>
			</td>
		</tr>
		<tr>
			<th scope="row"><span class="must">Required</span>Inquiry</th>
			<td>
				<?php echo $this->Form->textarea('ContactFactory.message', array('cols' => '', 'rows' => '5', 'class' => 'type02')); ?>
			</td>
		</tr>
	</table>
	<div id="btn">
		<ul class="clearfix">
			<li class="fl"><a id="confirm" onclick="$('#form').submit();return false;">入力内容の確認</a></li>
			<li class="fr"><a id="reset" onclick="$('#form')[0].reset();return false;">リセット</a></li>
		</ul>
	</div>
<?php echo $this->Form->end(); ?>
</div>
		<!-- / #contactCnt -->
<script type="text/javascript">
<!--
    $(function(){
        $( '#ContactFactoryEmail1' ).change( function() {
            var val1 = $( this ).val();
            var val2 = $( '#ContactFactoryEmail2' ).val();
            $( '#ContactFactoryEmail' ).val( val1 + '@' + val2 );
        });
        $( '#ContactFactoryEmail2' ).change( function() {
            var val1 = $( '#ContactFactoryEmail1' ).val();
            var val2 = $( this ).val();
            $( '#ContactFactoryEmail' ).val( val1 + '@' + val2 );
        });
    });
//-->
</script>
