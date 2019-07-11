<div class="container">
<?php if ($residenceAlertCount > 0) { ?>
	<h2 class="lead"><?php echo __('Residential property ') ?>(<?php echo count($residenceBuildings); ?><?php echo __(' Out of ') ?><?php echo $residenceAlertCount; ?>)</h2>
	<table class="table table-striped">
		<tr>
			<th><?php echo __('Property Name') ?></th>
			<th><?php echo __('Property Type') ?></th>
			<th><?php echo __('Area') ?></th>
			<th><?php echo __('Date Update') ?></th>
			<th><?php echo __('Frequency Update') ?></th>
			<th class="actions"><?php echo __('Action') ?></th>
		</tr>
<?php     foreach ($residenceBuildings as $residenceBuilding) { ?>
		<tr class="error">
			<td style="width: 20%"><?php echo h(__($residenceBuilding['ResidenceBuilding']['name'])); ?>&nbsp;</td>
			<td style="width: 15%"><?php echo h(__($residenceCategories[$residenceBuilding['ResidenceBuilding']['residence_category_id']])); ?>&nbsp;</td>
			<td style="width: 20%"><?php echo h(__($areas[$residenceBuilding['ResidenceBuilding']['area_id']])); ?>&nbsp;</td>
			<td style="width: 15%"><?php echo h(__($residenceBuilding['ResidenceBuilding']['modified'])); ?>&nbsp;</td>
			<td style="width: 20%"><?php echo h(__(Configure::read('AlertTerm.' . $residenceBuilding['ResidenceBuilding']['alert_id'] . '.name'))); ?>&nbsp;</td>
			<td style="width: 10%" class="actions">
				<div class="btn-group">
<?php         if (!empty($roleStaff)) { ?>
					<a class="btn btn-small" href="<?php echo $this->webroot; ?>admin/residence_buildings/edit/<?php echo $residenceBuilding['ResidenceBuilding']['id']; ?>"><?php echo __('Edit') ?></a>
<?php         } ?>
				</div>
			</td>
		</tr>
<?php     } ?>
	</table>
<?php } ?>
<?php if ($officeAlertCount > 0) { ?>
	<h2 class="lead"><?php echo __('Property Office ') ?>(<?php echo count($officeBuildings); ?><?php echo __(' Out of ') ?><?php echo $officeAlertCount; ?>)</h2>
	<table class="table table-striped">
		<tr>
			<th><?php echo __('Property Name') ?></th>
			<th><?php echo __('Property Type') ?></th>
			<th><?php echo __('Area') ?></th>
			<th><?php echo __('Date Update') ?></th>
			<th><?php echo __('Frequency Update') ?></th>
			<th class="actions"><?php echo __('Action') ?></th>
		</tr>
<?php     foreach ($officeBuildings as $officeBuilding) { ?>
		<tr class="error">
			<td style="width: 20%"><?php echo h(__($officeBuilding['OfficeBuilding']['name'])); ?>&nbsp;</td>
			<td style="width: 15%"><?php echo h(__($officeCategories[$officeBuilding['OfficeBuilding']['office_category_id']])); ?>&nbsp;</td>
			<td style="width: 15%"><?php echo h(__($areas[$officeBuilding['OfficeBuilding']['area_id']])); ?>&nbsp;</td>
			<td style="width: 15%"><?php echo h(__($officeBuilding['OfficeBuilding']['modified'])); ?>&nbsp;</td>
			<td style="width: 20%"><?php echo h(__(Configure::read('AlertTerm.' . $officeBuilding['OfficeBuilding']['alert_id'] . '.name'))); ?>&nbsp;</td>
			<td style="width: 10%" class="actions">
				<div class="btn-group">
<?php         if (!empty($roleStaff)) { ?>
					<a class="btn btn-small" href="<?php echo $this->webroot; ?>admin/office_buildings/edit/<?php echo $officeBuilding['OfficeBuilding']['id']; ?>"><?php echo __('Edit') ?></a>
<?php         } ?>
				</div>
			</td>
		</tr>
<?php     } ?>
	</table>
<?php } ?>
<?php if ($factoryAlertCount > 0) { ?>
	<h2 class="lead"><?php echo __('Factory property ') ?>(<?php echo count($factoryBuildings); ?><?php echo __(' Out of ') ?><?php echo $factoryAlertCount; ?>)</h2>
	<table class="table table-striped">
		<tr>
			<th><?php __('Property Name') ?></th>
			<th><?php echo __('Property Type') ?></th>
			<th><?php echo __('Area') ?></th>
			<th><?php echo __('Date Update') ?></th>
			<th><?php echo __('Frequency Update') ?></th>
			<th class="actions"><?php echo __('Action') ?></th>
		</tr>
<?php     foreach ($factoryBuildings as $factoryBuilding) { ?>
		<tr class="error">
			<td style="width: 20%"><?php echo h(__($factoryBuilding['FactoryBuilding']['name'])); ?>&nbsp;</td>
			<td style="width: 15%"><?php echo h(__($factoryCategories[$factoryBuilding['FactoryBuilding']['factory_category_id']])); ?>&nbsp;</td>
			<td style="width: 15%"><?php echo h(__($factoryAreas[$factoryBuilding['FactoryBuilding']['factory_area_id']])); ?>&nbsp;</td>
			<td style="width: 15%"><?php echo h(__($factoryBuilding['FactoryBuilding']['modified'])); ?>&nbsp;</td>
			<td style="width: 20%"><?php echo h(__(Configure::read('AlertTerm.' . $factoryBuilding['FactoryBuilding']['alert_id'] . '.name'))); ?>&nbsp;</td>
			<td style="width: 10%" class="actions">
				<div class="btn-group">
<?php         if (!empty($roleStaff)) { ?>
					<a class="btn btn-small" href="<?php echo $this->webroot; ?>admin/factory_buildings/edit/<?php echo $factoryBuilding['FactoryBuilding']['id']; ?>"><?php echo __('Edit') ?></a>
<?php         } ?>
				</div>
			</td>
		</tr>
<?php     } ?>
	</table>
<?php } ?>
</div>
