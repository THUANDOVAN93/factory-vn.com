<script src="<?php echo $this->webroot; ?>common/js/jquery.viewareamap.js" type="text/javascript" charset="UTF-8"></script>
<script src="<?php echo $this->webroot; ?>common/js/jquery.searchcontrol.js" type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>common/js/list.js"></script>

		<!-- topicpath/ -->
		<ul id="topicpath">
			<li class="home"><a href="<?php echo $this->webroot; ?>">TOP</a></li>
			<li><a href="<?php echo $this->webroot; ?>factory/area/">Search factory / industrial site Search from all industrial areas in Vietnam</a></li>
			<li>Properties in <?php echo h($factoryArea['FactoryArea']['name']); ?></li>
		</ul>
		<!-- /topicpath -->

		<!-- search_header/ -->
		<div class="search_header clearfix">
			<h2 class="title-row">Search from all industrial areas in Vietnam
			</h2>
		</div>
		<!-- /search_header -->

		<!-- search_list/ -->
		<h3 class="search_list_ttl">Properties in <?php echo h($factoryArea['FactoryArea']['name']); ?></h3>

		<!-- search_list_map_nav/ -->
		<div id="map_canvas" class="search_list_map"></div>
		<?php echo $this->Form->hidden('lat', array('id'=>'map_lat', 'value'=>$factoryArea['FactoryArea']['lat'])); ?>
		<?php echo $this->Form->hidden('lng', array('id'=>'map_lng', 'value'=>$factoryArea['FactoryArea']['lng'])); ?>
		<?php $area_arr = array( 'BANGKOK', 'SAMUTH PRAKARN', 'PATHUM THANI', 'SAMUTH SAKHON', 'CHACHOENGSAO' );
			$f_flg = false;
			foreach ( $area_arr as $value ) {
				if ( strpos($factoryArea['FactoryArea']['name'], $value) !== false ) {
		 			$f_flg = true;
					break;
				}
			}
			if ( $f_flg ) {
	 			echo $this->Form->hidden('zoom', array('id'=>'map_zoom', 'value'=>'11'));
			} else {
	 			echo $this->Form->hidden('zoom', array('id'=>'map_zoom', 'value'=>'10'));
			}
		 ?>
		<?php echo $this->Form->hidden('icon_path', array('id'=>'icon_path', 'value'=>$this->webroot . 'common/images/search/map/')); ?>
		<?php echo $this->Form->hidden('detail_url', array('id'=>'detail_url', 'value'=>$this->webroot . 'factory/area/detail/')); ?>
		<?php echo $this->Form->hidden('image_path', array('id'=>'image_path', 'value'=>$this->webroot . 'upload/FactoryBuildings/')); ?>
		<?php echo $this->Form->hidden('xml_url', array('id'=>'xml_url', 'value'=>$this->webroot . 'map/factory/')); ?>

		<dl class="search_list_map_nav clearfix">
			<dt class="d-flex align-items-center">Icon</dt>
			<dd class="d-flex w-100">
				<ul class="d-flex clearfix align-items-center justify-content-betwen w-100">
					<li class="d-flex search_list_map_nav_factory01">
						<label for="list_map_nav01"><?php echo $this->Form->checkbox('list_map_nav01', array('value' => '1', 'class' => 'list_map_nav', 'checked' => true)); ?>Industrial zone</label>
					</li>
					<li class="d-flex search_list_map_nav_factory02">
						<label for="list_map_nav02"><?php echo $this->Form->checkbox('list_map_nav02', array('value' => '2', 'class' => 'list_map_nav', 'checked' => true)); ?>Factory</label>
					</li>
					<li class="d-flex search_list_map_nav_factory03">
						<label for="list_map_nav03"><?php echo $this->Form->checkbox('list_map_nav03', array('value' => '3', 'class' => 'list_map_nav', 'checked' => true)); ?>Warehouse</label>
					</li>
				</ul>
			</dd>
		</dl>
		<!-- /search_list_map_nav -->

		<?php echo $this->Form->create('FactoryBuilding', array('url' => '/factory/area/list/' . $factoryArea['FactoryArea']['id'], 'id' => 'U_FactoryBuildingAreaListForm')); ?>
			<!-- search_nav/ -->
			<div class="search_nav clearfix">
				<h4 class="imgbtn hover-red">FILTER</h4>
				<div class="search_nav_detail">
					<ul class="clearfix">
						<li>
							Sort
							<?php echo $this->Form->select('sort', Configure::read('SearchList.Sort'), array('empty' => false, 'id' => 'U_FactoryBuildingSort')); ?>
						</li>
						<li>
							Display results
							<?php echo $this->Form->select('limit', Configure::read('SearchList.Limit'), array('empty' => false, 'id' => 'U_FactoryBuildingLimit')); ?>
						</li>
					</ul>
				</div>
			</div>
			<!-- /search_nav -->

			<!-- search_nav_table/ -->
			<div class="search_nav_table">
				<table summary="Refine search condition">
					<tr>
						<th>Inside and outside the industrial park</th>
						<td>
							<ul class="search_nav_table_li1 clearfix">
<?php foreach ($industrialParks as $value => $name) { ?>
<?php     $checked = ''; ?>
<?php     if (isset($this->request->data['FactoryBuilding']['industrial_park_id']) && in_array($value, $this->request->data['FactoryBuilding']['industrial_park_id'])) { ?>
<?php         $checked = 'checked="checked"'; ?>
<?php     } ?>
								<li>
									<label class="d-flex align-items-start"><input type="checkbox" id="U_FactoryBuildingIndustrialParkId<?php echo $value; ?>" name="data[FactoryBuilding][industrial_park_id][]" value="<?php echo $value; ?>" <?php echo $checked; ?> /><?php echo $name; ?></label>
								</li>
<?php } ?>
							</ul>
						</td>
					</tr>
					<tr>
						<th>Property type</th>
						<td>
							<ul class="search_nav_table_li1 clearfix">
<?php $checked = ''; ?>
<?php if (empty($this->request->data['FactoryBuilding']['factory_sub_category_id'])) { ?>
<?php     $checked = 'checked="checked"'; ?>
<?php } ?>
								<li><label class="d-flex align-items-start"><input type="radio" id="U_FactoryBuildingFactoryCategoryId0" name="data[FactoryBuilding][factory_sub_category_id]" value="" <?php echo $checked; ?> class="u_cat_types" />All property types</label></li>
<?php $checked = ''; ?>
<?php if (!empty($this->request->data['FactoryBuilding']['factory_sub_category_id']) && $this->request->data['FactoryBuilding']['factory_sub_category_id'] == '2,4') { ?>
<?php     $checked = 'checked="checked"'; ?>
<?php } ?>
								<li><label class="d-flex align-items-start"><input type="radio" id="U_FactoryBuildingFactorySubCategoryId24" name="data[FactoryBuilding][factory_sub_category_id]" value="2,4" <?php echo $checked; ?> class="u_cat_types" />Rental factory / Lending warehouse</label></li>
<?php $checked = ''; ?>
<?php if (!empty($this->request->data['FactoryBuilding']['factory_sub_category_id']) && $this->request->data['FactoryBuilding']['factory_sub_category_id'] == '1,3') { ?>
<?php     $checked = 'checked="checked"'; ?>
<?php } ?>
								<li><label class="d-flex align-items-start"><input type="radio" id="U_FactoryBuildingFactorySubCategoryId13" name="data[FactoryBuilding][factory_sub_category_id]" value="1,3" <?php echo $checked; ?> class="u_cat_types" />Selling factory / selling warehouse</label></li>
<?php $checked = ''; ?>
<?php if (!empty($this->request->data['FactoryBuilding']['factory_sub_category_id']) && $this->request->data['FactoryBuilding']['factory_sub_category_id'] == '5') { ?>
<?php     $checked = 'checked="checked"'; ?>
<?php } ?>
								<li><label class="d-flex align-items-start"><input type="radio" id="U_FactoryBuildingFactorySubCategoryId5" name="data[FactoryBuilding][factory_sub_category_id]" value="5" <?php echo $checked; ?> class="u_cat_types" />Selling land</label></li>
							</ul>
						</td>
					</tr>
					<tr class="u_switch disp_U_FactoryBuildingFactorySubCategoryId24">
						<th>Budget</th>
						<td>
							<?php echo $this->Form->select('price', Configure::read('Price.FactoryBuilding.2,4'), array('empty' => 'Please select', 'id' => 'U_FactoryBuildingPrice24')); ?>&nbsp;VND/1600m&sup2;
						</td>
					</tr>
					<tr class="u_switch disp_U_FactoryBuildingFactorySubCategoryId13">
						<th>Budget</th>
						<td>
							<?php echo $this->Form->select('price', Configure::read('Price.FactoryBuilding.1,3'), array('empty' => 'Please select', 'id' => 'U_FactoryBuildingPrice13')); ?>&nbsp;VND
						</td>
					</tr>
					<tr class="u_switch disp_U_FactoryBuildingFactorySubCategoryId5">
						<th>Budget</th>
						<td>
							<?php echo $this->Form->select('price', Configure::read('Price.FactoryBuilding.5'), array('empty' => 'Please select', 'id' => 'U_FactoryBuildingPrice5')); ?>&nbsp;VND/m&sup2;
						</td>
					</tr>
					<tr class="u_switch disp_U_FactoryBuildingFactorySubCategoryId24 disp_U_FactoryBuildingFactorySubCategoryId13">
						<th>Area</th>
						<td>
							<?php echo $this->Form->select('floor_space', Configure::read('FloorSpace.FactoryBuilding.1,2,3,4'), array('empty' => 'Please select', 'id' => 'U_FactoryBuildingFloorSpace1234')); ?>&nbsp;m&sup2;
						</td>
					</tr>
					<tr class="u_switch disp_U_FactoryBuildingFactorySubCategoryId5">
						<th>Area</th>
						<td>
							<?php echo $this->Form->select('site_area', Configure::read('FloorSpace.FactoryBuilding.5'), array('empty' => 'Please select', 'id' => 'U_FactoryBuildingSiteArea5')); ?>&nbsp;1600m&sup2;
						</td>
					</tr>
					<tr>
						<th>Other conditions</th>
						<td>
							<ul class="search_nav_table_li3 clearfix">
<?php foreach(Configure::read('Facility.FactoryBuilding') as $key => $val) { ?>
<?php     $checked = ''; ?>
<?php     if (isset($this->request->data['FactoryBuilding'][$key]) && $this->request->data['FactoryBuilding'][$key] == $key) { ?>
<?php         $checked = 'checked="checked"'; ?>
<?php     } ?>
								<li><label class="d-flex align-items-start"><input type="checkbox" id="U_FactoryBuilding<?php echo $key; ?>" name="data[FactoryBuilding][<?php echo $key; ?>]" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $val; ?></label></li>
<?php } ?>
							</ul>
						</td>
					</tr>
				</table>
				<div class="imgbtn"><input type="image" name="submit" src="<?php echo $this->webroot; ?>common/images/search/search_nav_btn02.png" alt="この条件で絞り込む" /></div>
			</div>
			<!-- /search_nav_table -->
		<?php echo $this->Form->end(); ?>

<?php
    $this->Paginator->options(array(
        'url' => array(
            'controller' => 'factory',
            'action'     => 'area/list/' . $factoryArea['FactoryArea']['id'],
        )
    ));
?>
<?php echo $this->element('paging'); ?>

		<!-- search_column/ -->
<?php foreach ($factoryBuildings as $factoryBuilding) { ?>

		<div class="search_column_ttl clearfix">
			<h3><a href="<?php echo $this->webroot; ?>factory/area/detail/<?php echo h($factoryBuilding['FactoryBuilding']['id']); ?>"><?php echo h($factoryBuilding['FactoryBuilding']['name']); ?></a></h3>
			<p><img src="<?php echo $this->webroot; ?>common/images/search/search_column_ttl_factory<?php echo $factoryBuilding['FactoryBuilding']['factory_category_id']; ?>.png" width="110" height="20" alt="<?php echo h($factoryCategories[$factoryBuilding['FactoryBuilding']['factory_category_id']]); ?>" /></p>
		</div>

		<div class="search_column_data clearfix">
			<ul class="clearfix">
<?php     if (isset($factoryBuilding['FactoryBuilding']['newly']) && strlen($factoryBuilding['FactoryBuilding']['newly'] > 0)) { ?>
				<li><img src="<?php echo $this->webroot; ?>common/images/search/search_column_icon_new.png" width="50" height="17" alt="NEW" /></li>
<?php     } ?>
<?php     if (isset($factoryBuilding['FactoryBuilding']['recommend']) && strlen($factoryBuilding['FactoryBuilding']['recommend'] > 0)) { ?>
				<li><img src="<?php echo $this->webroot; ?>common/images/search/search_column_icon_recommend.png" width="50" height="17" alt="おすすめ" /></li>
<?php     } ?>
<?php     if (isset($factoryBuilding['FactoryBuilding']['popluar']) && strlen($factoryBuilding['FactoryBuilding']['popluar'] > 0)) { ?>
				<li><img src="<?php echo $this->webroot; ?>common/images/search/search_column_icon_popular.png" width="50" height="17" alt="人気" /></li>
<?php     } ?>
			</ul>
			<dl>
				<dt><img src="<?php echo $this->webroot; ?>common/images/search/search_column_icon_update.png" width="45" height="13" alt="UPDATE" /></dt>
				<dd><?php echo date('Y/m/d H:i', strtotime($factoryBuilding['FactoryBuilding']['modified'])); ?></dd>
			</dl>
		</div>
		<div class="search_column_article clearfix">
			<div class="search_column_aside">
				<div>
					<p>
						<span><img src="<?php echo $this->webroot; ?>common/images/spacer.gif" alt="" /></span>
<?php     if (isset($factoryBuilding['FactoryPhoto']['0']['path']) && strlen($factoryBuilding['FactoryPhoto']['0']['path'] > 0)) { ?>
						<img src="<?php echo $this->webroot; ?>upload/FactoryBuildings/tmb_list_<?php echo h($factoryBuilding['FactoryPhoto']['0']['path']); ?>" alt="<?php echo h($factoryBuilding['FactoryPhoto']['0']['caption']); ?>" />
<?php     } else { ?>
						<img src="<?php echo $this->webroot; ?>common/images/noimage-list.png" alt="NoImage" />
<?php     } ?>
					</p>
				</div>
<?php     if (isset($factoryBuilding['FactoryPhoto']['1']['path']) && strlen($factoryBuilding['FactoryPhoto']['1']['path'] > 0)) { ?>
				<div>
					<p>
						<span><img src="<?php echo $this->webroot; ?>common/images/spacer.gif" alt="" /></span>
						<img src="<?php echo $this->webroot; ?>upload/FactoryBuildings/tmb_list_<?php echo h($factoryBuilding['FactoryPhoto']['1']['path']); ?>" alt="<?php echo h($factoryBuilding['FactoryPhoto']['1']['caption']); ?>" />
					</p>
				</div>
<?php     } ?>
			</div>
			<div class="search_column_section">
				<ul class="clearfix first">
<?php     if (isset($factoryBuilding['FactoryBuilding']['giz']) && !empty($factoryBuilding['FactoryBuilding']['giz'])) { ?>
					<li class="border-gray bk-gray p-y-10">General Processing Zone (GIZ)</li>
<?php     } ?>
<?php     if (isset($factoryBuilding['FactoryBuilding']['epz']) && !empty($factoryBuilding['FactoryBuilding']['epz'])) { ?>
					<li class="border-gray bk-gray p-y-10">Output Processing Zone (EPZ)</li>
<?php     } ?>
<?php     if (isset($factoryBuilding['FactoryBuilding']['fz']) && !empty($factoryBuilding['FactoryBuilding']['fz'])) { ?>
					<li class="border-gray bk-gray p-y-10">Free zone (FZ)</li>
<?php     } ?>

					<?php if ($factoryBuilding['FactoryBuilding']['industrial_park_id'] == 1) { ?>
					<li class="border-gray bk-gray p-y-10">Industrial park</li>
					<?php } ?>

					<?php if ($factoryBuilding['FactoryBuilding']['industrial_park_id'] == 2) { ?>
					<li class="border-gray bk-gray p-y-10">Industrial park (EAT not approved)</li>
					<?php } ?>

					<?php if ($factoryBuilding['FactoryBuilding']['industrial_park_id'] == 3) { ?>
					<li class="border-gray bk-gray p-y-10">Outside Industrial park</li>
					<?php } ?>
				</ul>
				<table summary="Property Details">
					<col width="110">
					<col width="">
					<tr>
						<th><span>Area</span></th>
						<td><?php echo h($factoryArea['FactoryArea']['name']); ?></td>
					</tr>
					<tr>
						<th><span>Completion year</span></th>
						<td>
<?php     if (isset($factoryBuilding['FactoryBuilding']['complated']) && !empty($factoryBuilding['FactoryBuilding']['complated'])) { ?>
							<?php echo h($factoryBuilding['FactoryBuilding']['complated']); ?>
<?php     } else { ?>
							&nbsp;
<?php     } ?>
						</td>
					</tr>
				</table>
				<ul class="clearfix search_column_type">
<?php     foreach(Configure::read('Facility.FactoryBuilding') as $key => $val) { ?>
<?php         if ($factoryBuilding['FactoryBuilding'][$key] == '1') { ?>
					<li class="type-item d-inline-block on p-10">
						<?php echo $val; ?>
					</li>
<?php         } else { ?>
					<li class="type-item d-inline-block off p-10">
						<?php echo $val; ?>
					</li>
<?php         } ?>

<?php     } ?>
				</ul>
				<p class="imgbtn"><a class="button-red hover-dark" href="<?php echo $this->webroot; ?>factory/area/detail/<?php echo h($factoryBuilding['FactoryBuilding']['id']); ?>">See Details of this property</a></p>
			</div>
		</div>
<?php } ?>
<?php if (count($factoryBuildings) == 0) { ?>
		<div class="no_data" style="margn: 10px;"><p>お探しの物件は、見つかりませんでした。</p></div>
<?php }  ?>
		<!-- /search_column -->

<?php echo $this->element('paging'); ?>

		<?php echo $this->Form->create('FactoryBuilding', array('url' => '/factory/area/list/' . $factoryArea['FactoryArea']['id'], 'id' => 'B_FactoryBuildingAreaListForm')); ?>
			<!-- search_nav/ -->
			<div class="search_nav clearfix">
				<h4 class="imgbtn hover-red">FILTER</h4>
				<div class="search_nav_detail">
					<ul class="clearfix">
						<li>
							Sort by
							<?php echo $this->Form->select('sort', Configure::read('SearchList.Sort'), array('empty' => false, 'id' => 'B_FactoryBuildingSort')); ?>
						</li>
						<li>
							Display results
							<?php echo $this->Form->select('limit', Configure::read('SearchList.Limit'), array('empty' => false, 'id' => 'B_FactoryBuildingLimit')); ?>
						</li>
					</ul>
				</div>
			</div>
			<!-- /search_nav -->

			<!-- search_nav_table/ -->
			<div class="search_nav_table">
				<table summary="Refine search condition">
					<tr>
						<th>Inside and outside the industrial park</th>
						<td>
							<ul class="search_nav_table_li1 clearfix">
<?php foreach ($industrialParks as $value => $name) { ?>
<?php     $checked = ''; ?>
<?php     if (isset($this->request->data['FactoryBuilding']['industrial_park_id']) && in_array($value, $this->request->data['FactoryBuilding']['industrial_park_id'])) { ?>
<?php         $checked = 'checked="checked"'; ?>
<?php     } ?>
								<li>
									<label class="d-flex align-items-start"><input type="checkbox" id="B_FactoryBuildingIndustrialParkId<?php echo $value; ?>" name="data[FactoryBuilding][industrial_park_id][]" value="<?php echo $value; ?>" <?php echo $checked; ?> /><?php echo $name; ?></label>
								</li>
<?php } ?>
							</ul>
						</td>
					</tr>
					<tr>
						<th>Property type</th>
						<td>
							<ul class="search_nav_table_li1 clearfix">
<?php $checked = ''; ?>
<?php if (empty($this->request->data['FactoryBuilding']['factory_sub_category_id'])) { ?>
<?php     $checked = 'checked="checked"'; ?>
<?php } ?>
								<li><label class="d-flex align-items-start"><input type="radio" id="B_FactoryBuildingFactoryCategoryId0" name="data[FactoryBuilding][factory_sub_category_id]" value="" <?php echo $checked; ?> class="b_cat_types" />All property types</label></li>
<?php $checked = ''; ?>
<?php if (!empty($this->request->data['FactoryBuilding']['factory_sub_category_id']) && $this->request->data['FactoryBuilding']['factory_sub_category_id'] == '2,4') { ?>
<?php     $checked = 'checked="checked"'; ?>
<?php } ?>
								<li><label class="d-flex align-items-start"><input type="radio" id="B_FactoryBuildingFactorySubCategoryId24" name="data[FactoryBuilding][factory_sub_category_id]" value="2,4" <?php echo $checked; ?> class="b_cat_types" />Rental factory / Lending warehouse</label></li>
<?php $checked = ''; ?>
<?php if (!empty($this->request->data['FactoryBuilding']['factory_sub_category_id']) && $this->request->data['FactoryBuilding']['factory_sub_category_id'] == '1,3') { ?>
<?php     $checked = 'checked="checked"'; ?>
<?php } ?>
								<li><label class="d-flex align-items-start"><input type="radio" id="B_FactoryBuildingFactorySubCategoryId13" name="data[FactoryBuilding][factory_sub_category_id]" value="1,3" <?php echo $checked; ?> class="b_cat_types" />Selling factory / selling warehouse</label></li>
<?php $checked = ''; ?>
<?php if (!empty($this->request->data['FactoryBuilding']['factory_sub_category_id']) && $this->request->data['FactoryBuilding']['factory_sub_category_id'] == '5') { ?>
<?php     $checked = 'checked="checked"'; ?>
<?php } ?>
								<li><label class="d-flex align-items-start"><input type="radio" id="B_FactoryBuildingFactorySubCategoryId5" name="data[FactoryBuilding][factory_sub_category_id]" value="5" <?php echo $checked; ?> class="b_cat_types" />Selling land</label></li>
							</ul>
						</td>
					</tr>
					<tr class="b_switch disp_B_FactoryBuildingFactorySubCategoryId24">
						<th>Budget</th>
						<td>
							<?php echo $this->Form->select('price', Configure::read('Price.FactoryBuilding.2,4'), array('empty' => 'Please select', 'id' => 'B_FactoryBuildingPrice24')); ?>&nbsp;VND/m&sup2;
						</td>
					</tr>
					<tr class="b_switch disp_B_FactoryBuildingFactorySubCategoryId13">
						<th>Budget</th>
						<td>
							<?php echo $this->Form->select('price', Configure::read('Price.FactoryBuilding.1,3'), array('empty' => 'Please select', 'id' => 'B_FactoryBuildingPrice13')); ?>&nbsp;VND
						</td>
					</tr>
					<tr class="b_switch disp_B_FactoryBuildingFactorySubCategoryId5">
						<th>Budget</th>
						<td>
							<?php echo $this->Form->select('price', Configure::read('Price.FactoryBuilding.5'), array('empty' => 'Please select', 'id' => 'B_FactoryBuildingPrice5')); ?>&nbsp;VND
						</td>
					</tr>
					<tr class="b_switch disp_B_FactoryBuildingFactorySubCategoryId24 disp_B_FactoryBuildingFactorySubCategoryId13">
						<th>Floor space</th>
						<td>
							<?php echo $this->Form->select('floor_space', Configure::read('FloorSpace.FactoryBuilding.1,2,3,4'), array('empty' => 'Please select', 'id' => 'B_FactoryBuildingFloorSpace1234')); ?>&nbsp;m&sup2;
						</td>
					</tr>
					<tr class="b_switch disp_B_FactoryBuildingFactorySubCategoryId5">
						<th>Area</th>
						<td>
							<?php echo $this->Form->select('site_area', Configure::read('FloorSpace.FactoryBuilding.5'), array('empty' => 'Please select', 'id' => 'B_FactoryBuildingSiteArea5')); ?>&nbsp;x&nbsp;1600m&sup2;
						</td>
					</tr>
					<tr>
						<th>Other conditions</th>
						<td>
							<ul class="search_nav_table_li3 clearfix">
<?php foreach(Configure::read('Facility.FactoryBuilding') as $key => $val) { ?>
<?php     $checked = ''; ?>
<?php     if (isset($this->request->data['FactoryBuilding'][$key]) && $this->request->data['FactoryBuilding'][$key] == $key) { ?>
<?php         $checked = 'checked="checked"'; ?>
<?php     } ?>
								<li><label class="d-flex align-items-start"><input type="checkbox" id="B_FactoryBuilding<?php echo $key; ?>" name="data[FactoryBuilding][<?php echo $key; ?>]" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $val; ?></label></li>
<?php } ?>
							</ul>
						</td>
					</tr>
				</table>
				<div class="imgbtn"><input type="image" name="submit" src="<?php echo $this->webroot; ?>common/images/search/search_nav_btn02.png" alt="この条件で絞り込む" /></div>
			</div>
			<!-- /search_nav_table -->
		<?php echo $this->Form->end(); ?>

		<!-- /search_list -->

		<!-- contents_inquiry/ -->
<?php echo $this->element('section_contact'); ?>
		<!-- /contents_inquiry -->