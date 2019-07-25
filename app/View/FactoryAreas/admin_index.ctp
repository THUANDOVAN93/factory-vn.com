<div class="row-fluid">

	<h2><?php __h('Factory area management'); ?></h2>
	<ul class="nav nav-tabs">
		<li class="active"><a href="<?php echo $this->webroot; ?>admin/factory_areas"><?php __h('Factory area list'); ?></a></li>
		<li><a href="<?php echo $this->webroot; ?>admin/factory_areas/add"><?php __h('Add factory area'); ?></a></li>
		<li class="disabled"><a><?php __h('Edit factory area'); ?></a></li>
	</ul>

	<?php echo $this->BootstrapPaginator->pagination(); ?>
	<table class="table table-striped">
		<tr>
			<th>Factory area name</th>
			<th class="actions">Action</th>
		</tr>
		<?php foreach ($factoryAreas as $factoryArea): ?>
		<tr>
			<td><?php echo h($factoryArea['FactoryArea']['name']); ?>&nbsp;</td>
			<td class="actions">
				<div class="btn-group">
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $factoryArea['FactoryArea']['id']), array('class' => 'btn btn-small')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $factoryArea['FactoryArea']['id']), array('class' => 'btn btn-small btn-danger'),__('Do you want to delete the information of %s？', $factoryArea['FactoryArea']['name'])); ?>
				</div>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php echo $this->BootstrapPaginator->pagination(); ?>
</div>
