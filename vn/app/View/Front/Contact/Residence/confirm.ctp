		<!-- topicpath/ -->
		<ul id="topicpath">
			<li class="home"><a href="<?php echo $this->webroot; ?>">TOP</a></li>
			<li>お問い合わせ</li>
		</ul>
		<!-- /topicpath -->
		
		<div id="contactCnt">
			<h2><img src="<?php echo $this->webroot; ?>common/images/contact/header_ttl.png" width="730" height="40" alt="お問い合わせ" /></h2>
			<p>入力内容をご確認の上、お間違いなければ「送信」ボタンをクリックしてください。</p>

				<table border="0" cellspacing="0" cellpadding="0" summary="お問い合せフォーム">
					<col width="25%" />
					<col width="" />
					<tr>
						<th scope="row">物件名</th>
						<td>
							<?php echo h($contact['buildings_name']); ?>
						</td>
					</tr>
					<tr>
						<th scope="row">会社名</th>
						<td>
							<?php echo h($contact['company_name']); ?>
						</td>
					</tr>
					<tr>
						<th scope="row">お名前</th>
						<td>
							<?php echo h($contact['name']); ?>
						</td>
					</tr>
					<tr>
						<th scope="row">電話番号</th>
						<td>
							<?php echo h($contact['tel']); ?>
						</td>
					</tr>
					<tr>
						<th scope="row">携帯電話</th>
						<td>
							<?php echo h($contact['mobile']); ?>
						</td>
					</tr>
					<tr>
						<th scope="row">家族構成</th>
						<td>
							<?php echo h($contact['family_structure']); ?>
						</td>
					</tr>
					<tr>
						<th scope="row">ご希望内容</th>
						<td>
							<table border="0" cellspacing="0" cellpadding="0">
								<tr>
									<th scope="row">ご予算</th>
									<td>
										<?php echo h($contact['budget']); ?>
									</td>
								</tr>
								<tr>
									<th scope="row">エリア</th>
									<td>
										<?php echo h($contact['area']); ?>
									</td>
								</tr>
								<tr>
									<th scope="row">間取り</th>
									<td>
										<?php echo h($contact['layout']); ?>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<th scope="row">お問い合わせ内容</th>
						<td>
							<?php echo nl2br(h($contact['message'])); ?>
						</td>
					</tr>
					<tr>
						<th scope="row">E-mail</th>
						<td>
							<?php echo h($contact['email']); ?>
						</td>
					</tr>
				</table>
				<div id="btn">
					<ul class="clearfix">
						<li class="fl"><a id="submit" onclick="$('#form').submit(); return false;">送信</a></li>
						<li class="fr"><a id="back" onclick="$('#form_back').submit(); return false;">入力画面に戻る</a></li>
					</ul>
				</div>
			<?php echo $this->Form->create('ContactResidence', array('id' => 'form', 'url' => '/contact/residence/complete')); ?>
				<?php echo $this->Form->hidden('buildings_name'); ?>
				<?php echo $this->Form->hidden('company_name'); ?>
				<?php echo $this->Form->hidden('name'); ?>
				<?php echo $this->Form->hidden('tel'); ?>
				<?php echo $this->Form->hidden('mobile'); ?>
				<?php echo $this->Form->hidden('family_structure'); ?>
				<?php echo $this->Form->hidden('budget'); ?>
				<?php echo $this->Form->hidden('area'); ?>
				<?php echo $this->Form->hidden('layout'); ?>
				<?php echo $this->Form->hidden('message'); ?>
				<?php echo $this->Form->hidden('email'); ?>
			<?php echo $this->Form->end(); ?>
			<?php echo $this->Form->create('ContactResidence', array('id' => 'form_back', 'url' => '/contact/residence/back')); ?>
			<?php echo $this->Form->end(); ?>
		</div>
		<!-- / #contactCnt -->
