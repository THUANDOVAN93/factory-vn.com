<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title><?php echo $title_for_layout; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<?php echo $this->Html->script('jquery-1.7.2.min'); ?>

	<!-- Le styles -->
	<?php echo $this->Html->css('bootstrap.min'); ?>

	<?php //echo $this->Html->css('bootstrap-responsive.min'); ?>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php echo $this->Html->css('admin'); ?>
	<?php echo $this->fetch('meta'); ?>
	<?php echo $this->fetch('css'); ?>

	<script type="text/javascript">
		$(function(){
			$('a.lang').on('click',function(e){
				e.preventDefault();
				$.post('/lang/'+$(this).attr('href'),function(){location.reload()});
			})
		})
	</script>
</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a href="<?php echo $this->webroot; ?>admin"><img src="<?php echo $this->webroot; ?>img/logo.png" alt="TDC ADMINISTRATION CONSOLE" /></a>
				<ul class="nav pull-right">
<?php if (!empty($roleStaff)) { ?>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">
							Management
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $this->webroot; ?>admin/residence_buildings">Residential Management</a></li>
							<li><a href="<?php echo $this->webroot; ?>admin/residence_properties">Residential Room Management</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $this->webroot; ?>admin/office_buildings">Office Management</a></li>
							<li><a href="<?php echo $this->webroot; ?>admin/office_properties">Office Room Management</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $this->webroot; ?>admin/factory_buildings">Factory Management</a></li>
							<li><a href="<?php echo $this->webroot; ?>admin/factory_properties">Factory Area Management</a></li>
						</ul>
					</li>
<?php } ?>
<?php if (!empty($roleManager)) { ?>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">
							User Management
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $this->webroot; ?>admin/users">User Management</a></li>
							<li><a href="<?php echo $this->webroot; ?>admin/roles">Authority Management</a></li>
						</ul>
					</li>
<?php } ?>
<?php if (!empty($roleAdmin)) { ?>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">
							Master Admin
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $this->webroot; ?>admin/add_informations">TOP Management</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $this->webroot; ?>admin/areas">Area Management</a></li>
							<li><a href="<?php echo $this->webroot; ?>admin/factory_areas">Factory Area Management</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $this->webroot; ?>admin/lines">Route Management</a></li>
							<li><a href="<?php echo $this->webroot; ?>admin/stations">Station Management</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $this->webroot; ?>admin/residence_categories">House Type Management</a></li>
							<li><a href="<?php echo $this->webroot; ?>admin/residence_layouts">House Floor Flan Management</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $this->webroot; ?>admin/office_categories">Office Type Management</a></li>
							<li><a href="<?php echo $this->webroot; ?>admin/office_layouts">Office Floor Plan Management</a></li>
							<li><a href="<?php echo $this->webroot; ?>admin/office_person_nums">Office Number Management</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $this->webroot; ?>admin/factory_categories">Factory Type Management</a></li>
							<li><a href="<?php echo $this->webroot; ?>admin/factory_sub_categories">Partition Type Management</a></li>
							<li><a href="<?php echo $this->webroot; ?>admin/industrial_parks">Industrial Park In/Out side Management</a></li>
							<li><a href="<?php echo $this->webroot; ?>admin/factory_tenants">Factory Tenant Company Management</a></li>
						</ul>
					</li>
<?php } ?>
<?php if (!empty($username)) { ?>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">
						<?php echo $username; ?>
						<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $this->webroot; ?>admin/logout">Logout</a></li>
							<li class="divider"></li>
							<li><a href="ja" class="lang">Japanese</a></li>
							<li><a href="en" class="lang">English</a></li>
						</ul>
					</li>
<?php } ?>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
<?php echo $this->Session->flash('auth-alert'); ?>
<?php echo $this->Session->flash(); ?>
<?php echo $this->Session->flash('db-alert'); ?>
<?php echo $this->Session->flash('update-alert'); ?>

		<?php echo $this->fetch('content'); ?>

	</div> <!-- /container -->

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php echo $this->Html->script('bootstrap.min'); ?>
	<?php echo $this->fetch('script'); ?>

</body>
</html>
