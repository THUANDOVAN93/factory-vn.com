<div class="container">
	<div id="admin-login">
		<div class="login-box">
			<?php echo $this->Form->create('User', array('url'=>'/admin/login', 'class' => 'form-horizontal')); ?>
				<fieldset>
				<div class="legend"><?php __h('Management login screen'); ?></div>
				<table>
					<tr>
						<th><?php __h('User name'); ?></th>
						<td><?php echo $this->Form->text('login_id'); ?></td>
					</tr>
					<tr>
						<th><?php __h('Password'); ?></th>
						<td><?php echo $this->Form->password('password'); ?></td>
					</tr>
				</table>
				</fieldset>
				<button class="btn" type="submit"><?php __h('Login'); ?></button>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
<script type="text/javascript">
	window.onload = function(){ document.getElementById("UserLoginId").focus(); };
</script>
