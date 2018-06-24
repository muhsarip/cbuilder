<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title." | ".$this->cms->row()->judul ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- google font  -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- /google font  -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background: url(<?php echo base_url('assets/img/bg-login.jpg') ?>) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-centered text-center font-roboto box-welcome">
			<div class="row">
				<div class="col-lg-4"  style="padding: 0px !important;">
					<img src="<?php echo base_url("assets/img/logo-desa.png") ?>" style="max-height: 100px;">
				</div>
				<div class="col-lg-8" style="padding: 0px !important;">
					<h1 style="text-align: left">Desa Karang Anyar</h1>
				</div>
			</div>
			<h1>Selamat Datang di <br> <strong><?php echo $this->cms->row()->judul ?></strong></h1>

			<h3>
				<i>" Membantu penyelenggaraan Desa lebih baik dan efektif."</i>
			</h3>

			<p>Login sebagai :</p>
			<a href="<?php echo base_url("admin/auth/login") ?>" class="btn btn-default btn-lg">
				<img src="<?php echo base_url('assets/img/staff-symbol.png') ?>"> Staff Desa
			</a>
			<a href="<?php echo base_url("admin/auth/login") ?>" class="btn btn-default btn-lg">
				<img src="<?php echo base_url('assets/img/chief.png') ?>"> Kepala Desa
			</a>
		</div>
	</div>
</div>

</body>
</html>