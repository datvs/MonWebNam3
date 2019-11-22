<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Các dãy nhà</title>
	<link href="<?= base_url() ?>public/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url() ?>public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url() ?>public/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url() ?>public/css/theme.css" rel="stylesheet" media="all">
</head>
<body>

	<?php 
	include "navbar_view.php";
	 ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 push-sm-3">
				<div>
					<div class="alert alert-success" role="alert">
						<strong><h2>Kết quả tìm kiếm theo từ khóa: <?= $data_key ?> </h2></strong>
					</div>
				</div>
				<div>
					<?php foreach ($data_search as $value): ?>	
					
					<fieldset class="form-group">
						<label for="exampleInputEmail1"><h3>Các dãy nhà:</h3></label>
						<span class="TenDayNha"><h3><?= $value['TenDayNha'] ?></h3></span>
					</fieldset>

					<?php endforeach ?>
				</div>
			</div>

		</div>
	</div>

</body>
</html>