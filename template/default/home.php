<div class="row">
	<div class="col-lg-6 col-sm-12">
		<div class="card" style="min-height: 250px;"></div>
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

<?php 
$apps = [];
$apps[] = [
	"name" => "Miner Manager",
	"image" => "",
	"author" => ""
];

$apps[] = [
	"name" => "Auto Pool",
	"image" => "",
	"author" => ""
];

$apps[] = [
	"name" => "Share Maternode",
	"image" => "",
	"author" => ""
];


$apps[] = [
	"name" => "Smart Token",
	"image" => "",
	"author" => ""
];


$apps[] = [
	"name" => "B2B Proucts",
	"image" => "",
	"author" => ""
];


$apps[] = [
	"name" => "Exchange",
	"image" => "",
	"author" => ""
];


$apps[] = [
	"name" => "Security",
	"image" => "",
	"author" => ""
];

?>
<div class="row">

	<?php foreach ($apps as $key => $value) { ?>
		
	<div class="col-lg-3 col-sm-6 col-md-4 mb-4" >
		<div class="card">
			<div class="card-header" style="padding: 0; margin: 0;">
				<img src="https://5.imimg.com/data5/QN/DS/MY-11609112/electrical-bim-services-cad-outsourcing-500x500.jpg" class="w-100">
			</div>
			<div class="card-body">
				<h6><?php echo $value["name"];?></h6>
				Author : Roller Platform
			</div>
			<div class="card-footer">
				<a href="<?php echo store_url("install-1.jav");?>" class="btn btn-sm btn-info col-7">Install</a>
				<a href="" class="btn btn-sm btn-primary float-right">Online</a>
			</div>
		</div>
	</div>

	<?php } ?>
</div>