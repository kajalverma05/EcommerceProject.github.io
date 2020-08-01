
<div class="panel panel-default sidebar-menu"><!--panel panel-dfault sidebar-menu  starts-->
	<div class="panel-heading"><!--panel heading starts-->
		<h3 class="panel-title">Product Catgories</h3>		
	</div><!--panel heading ends-->
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked category-menu">
			<!--call getPCat() for making product categories dynamic start-->
			<?php
			getPCats();
			?>
			<!--call getPCat() for making product categories dynamic end-->
		</ul>
	</div>
</div><!--panel panel-dfault sidebar-menu ends-->

<div class="panel panel-default sidebar-menu"><!--panel panel-dfault sidebar-menu  starts-->
	<div class="panel-heading"><!--panel heading starts-->
		<h3 class="panel-title">Catgories</h3>		
	</div><!--panel heading ends-->
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked category-menu">
			<!--call getCat() for making categories dynamic start-->
			<?php
			
			getCat();
			?>
		<!--call getCat() for making categories dynamic end-->
		</ul>
	</div>
</div><!--panel panel-dfault sidebar-menu ends-->