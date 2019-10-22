		<!-- topicpath/ -->
		<ul id="topicpath">
			<li class="home"><a href="<?php echo $this->webroot; ?>">TOP</a></li>
			<li>Contact</li>
		</ul>
		<!-- /topicpath -->
		
		<div id="contactCnt">
			<h2 class="contact-title">Inquiry Form</h2>
			<p>Please confirm your inquiry information and click "send" button.</p>

				<table border="0" cellspacing="0" cellpadding="0" summary="お問い合せフォーム">
					<col width="25%" />
					<col width="" />
					<tr>
						<th scope="row">Name</th>
						<td>
							<?php echo h($contact['name']); ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Phone number</th>
						<td>
							<?php echo h($contact['tel']); ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Company</th>
						<td>
							<?php echo h($contact['company_name']); ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Mail address</th>
						<td>
							<?php echo h($contact['email1']); ?>@<?php echo h($contact['email2']); ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Inquiry</th>
						<td>
							<?php echo nl2br(h($contact['message'])); ?>
						</td>
					</tr>
				</table>
				<div id="btn">
					<ul class="clearfix">
						<li class="fl"><a id="submit" onclick="$('#form').submit(); return false;">Send</a></li>
						<li class="fr"><a id="back" onclick="$('#form_back').submit(); return false;">Returns to the input screen</a></li>
					</ul>
				</div>
			<?php echo $this->Form->create('ContactFactory', array('id' => 'form', 'url' => '/contact/factory/complete')); ?>
				<?php echo $this->Form->hidden('name'); ?>
				<?php echo $this->Form->hidden('tel'); ?>
				<?php echo $this->Form->hidden('email'); ?>
				<?php echo $this->Form->hidden('company_name'); ?>
				<?php echo $this->Form->hidden('message'); ?>
			<?php echo $this->Form->end(); ?>
			<?php echo $this->Form->create('ContactFactory', array('id' => 'form_back', 'url' => '/contact/factory/back')); ?>
			<?php echo $this->Form->end(); ?>
		</div>
		<!-- / #contactCnt -->
