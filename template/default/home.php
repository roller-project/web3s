<div class="row">
	<div class="col-lg-6 col-sm-12">
		<div class="card" style="min-height: 250px;">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-sm-6">
		<div class="card" style="min-height: 250px;"></div>
	</div>
	<div class="col-lg-3 col-sm-6">
		<div class="card" style="min-height: 250px;"></div>
	</div>
</div>
<br>
<h3><i class="ti-layout-grid2"></i> New Application</h3>
<hr>


<div class="row">

	<?php foreach ($apps as $key => $value) { ?>
		
	<div class="col-lg-3 col-sm-6 col-md-4 mb-4" >
		<div class="card">
			<div class="card-header" style="padding: 0; margin: 0;">
				<img src="<?php echo $value->app_image;?>" style="height:250px;" class="w-100">
			</div>
			<div class="card-body">
				<h6><i class="ti-layout-grid3"></i> <?php echo $value->app_name;?></h6>
				<i class="ti-user"></i> Author : <?php echo $value->app_author;?><br>
				<i class="ti-money"></i> Requiced : <?php echo number_format($value->app_requiced);?> ROL Token
			</div>
			<div class="card-footer">
				<?php if($value->app_status == 1){ ?>
					<a href="<?php echo store_url("install-".$value->app_id.".jav");?>" class="btn btn-sm btn-info col-7">Install</a>
				<?php }else{ ?>
					<a href="<?php echo store_url("detail-".$value->app_id.".jav");?>" class="btn btn-sm btn-outline-info col-7">Wait Complete</a>
				<?php } ?>
				<a href="" class="btn btn-sm btn-primary float-right">Detail</a>
			</div>
		</div>
	</div>

	<?php } ?>
</div>