		<!-- search_pagenav/ -->
		<div class="search_pagenav">

			<dl class="clearfix">
				<dt>Result</dt>
<?php if ($this->Paginator->counter(array('format' => '%count%')) > 0) { ?>
				<dd><?php echo $this->Paginator->counter(array('format' => 'Show %start%～%end% properties out of %count% properties')); ?></dd>
<?php } else { ?>
				<dd>Not found result</dd>
<?php } ?>
			</dl>

			<div class="search_pagenav_li">
<?php if ($this->Paginator->counter(array('format' => '%pages%')) > 1) { ?>
				<ul class="clearfix">
<?php     if ($this->Paginator->hasPrev()) { ?>
					<?php echo $this->Paginator->first('<small>&lt;&lt;</small>&nbsp;First', array('tag' => 'li', 'escape' => false, 'class' => 'first')); ?>
					<?php echo $this->Paginator->prev('<small>&lt;</small>&nbsp;Prev', array('tag' => 'li', 'escape' => false, 'class' => 'prev')); ?>
<?php     } else { ?>
					<li class="first on"><small>&lt;&lt;</small>&nbsp;First</li>
					<li class="prev on"><small>&lt;</small>&nbsp;Prev</li>
<?php     } ?>

						<?php echo $this->Paginator->numbers(array('separator' => false, 'tag' => 'li', 'modulus'=>4)); ?>

<?php     if ($this->Paginator->hasNext()) { ?>
					<?php echo $this->Paginator->next('Next&nbsp;<small>&gt;</small>', array('tag' => 'li', 'escape' => false, 'class' => 'next')); ?>
					<?php echo $this->Paginator->last('Last&nbsp;<small>&gt;&gt;</small>', array('tag' => 'li', 'escape' => false, 'class' => 'last')); ?>
<?php   } else { ?>
					<li class="next">Next&nbsp;<small>&gt;</small></li>
					<li class="last">Last&nbsp;<small>&gt;&gt;</small></li>
<?php   } ?>
				</ul>
<?php } else { ?>
				<ul class="clearfix">
					<li class="first"><small>&lt;&lt;</small>&nbsp;First</li>
					<li class="prev"><small>&lt;</small>&nbsp;Prev</li>
					<li class="on">1</li>
					<li class="next">Next&nbsp;<small>&gt;</small></li>
					<li class="last">Last&nbsp;<small>&gt;&gt;</small></li>
				</ul>
<?php } ?>
			</div>
		</div>
		<!-- /search_pagenav -->