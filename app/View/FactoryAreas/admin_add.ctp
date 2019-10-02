<script src="https://maps.google.com/maps/api/js?key=AIzaSyDRe-SLe-oVJhmp1x0wDGUdtVOmFceE8eU&v=quarterly&v=3" type="text/javascript" charset="UTF-8"></script>
<?php echo $this->Html->script('jquery.map'); ?>

<div class="row-fluid">

	<h2><?php __h('Factory area management'); ?></h2>
	<ul class="nav nav-tabs">
		<li><a href="<?php echo $this->webroot; ?>admin/factory_areas"><?php __h('Factory area list'); ?></a></li>
		<li class="active"><a href="<?php echo $this->webroot; ?>admin/factory_areas/add"><?php __h('Add factory area'); ?></a></li>
		<li class="disabled"><a><?php __h('Edit factory area'); ?></a></li>
	</ul>

	<?php echo $this->Form->create('FactoryArea', array('class' => 'form-horizontal')); ?>
		<fieldset>
			<table class="table-input">
				<tr>
					<th><?php __h('Factory area name'); ?><span class="label label-important require-s"><?php __h('Required'); ?></span></th>
					<td><?php echo $this->Form->text('name'); ?>
<?php $err = isset($validErrors['name'][0]);?>
<?php if ($err) { ?>
					<p class="alert alert-error alert_valid">※<?php __h($validErrors['name'][0]); ?></p>
<?php } ?>
					</td>
				</tr>

				<tr>
					<th><?php __h('area'); ?></th>
					<td>
						<?php echo $this->Form->select('area', __arrTranslate(Configure::read('largeArea')), array('empty'=>false)); ?>
<?php $err = isset($validErrors['area'][0]);?>
<?php if ($err) { ?>
						<p class="alert alert-error alert_valid">※<?php __h($validErrors['area'][0]); ?></p>
<?php } ?>
					</td>
				</tr>

				<tr>
					<th><?php __h('Factory area Decription'); ?><span class="label label-important"></span></th>
					<td><?php echo $this->Wysiwyg->textarea('FactoryArea.note'); ?>
<?php $err = isset($validErrors['note'][0]);?>
<?php if ($err) { ?>
					<p class="alert alert-error alert_valid">※<?php __h($validErrors['note'][0]); ?></p>
<?php } ?>
					</td>
				</tr>
				
				<tr>
					<th><?php __h('Location Information'); ?></th>
					<td>
						<?php echo $this->Form->text('address', array('id' => 'map_address', 'class'=>'span5')); ?>
<?php $err = isset($validErrors['address'][0]);?>
<?php if ($err) { ?>
					<p class="alert alert-error alert_valid">※<?php __h($validErrors['address'][0]); ?></p>
<?php } ?>
					</td>
				</tr>
				<tr>
					<th><?php __h('Location information (latitude / longitude)'); ?></th>
					<td>
					<?php echo $this->Form->text('lat_disabled', array('class' => 'map_lat', 'disabled' => 'disabled')); ?>
					<?php echo $this->Form->text('lng_disabled', array('class' => 'map_lng', 'disabled' => 'disabled')); ?>
					<?php echo $this->Form->hidden('lat', array('id' => 'map_lat', 'class' => 'map_lat')); ?>
					<?php echo $this->Form->hidden('lng', array('id' => 'map_lng', 'class' => 'map_lng')); ?>
<?php $err = isset($validErrors['lat'][0]);?>
<?php if ($err) { ?>
					<p class="alert alert-error alert_valid">※<?php __h($validErrors['lat'][0]); ?></p>
<?php } ?>
<?php $err = isset($validErrors['lng'][0]);?>
<?php if ($err) { ?>
					<p class="alert alert-error alert_valid">※<?php __h($validErrors['lng'][0]); ?></p>
<?php } ?>
					<a href="#" id="set_location_btn" class="btn btn-small" ><?php __h('Set location information from address'); ?></a>
					<div id="map_canvas" style="height:<?php echo Configure::read('Admin.Map.Size.Height'); ?>px;width: <?php echo Configure::read('Admin.Map.Size.Width'); ?>px;"></div>
					</td>
				</tr>
			</table>

			<div class="form-actions"><button class="btn" type="submit"><?php __h('SAVE'); ?></button></div>
		</fieldset>
	<?php echo $this->Form->end(); ?>
</div>
