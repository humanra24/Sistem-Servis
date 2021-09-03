<!doctype html>
<html lang="en">

<head>
	<title><?= $judul; ?></title>
</head>
<!-- bootstrap -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
<!-- end bootstrap -->

<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url(); ?>assets/images/logo.png">

<!-- fontAwesome -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/fontAwesome/css/all.css">
<!-- end fontAwesome -->

<!-- datatables -->
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/DataTables/datatables.min.css" />
<!-- end datatables -->

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery-ui.css" type="text/css" />


<!-- sidebar -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/sidebar.css">
<!-- end sidebar -->

</head>

<body>
	<?php if ($this->session->userdata("level") == 'admin') : ?>
	<nav class="navbar navbar-expand-md navbar-dark" style="background:  blue">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
			data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<a class="navbar-brand" href="<?= base_url(); ?>/dashboard">
			<span class="menu-collapsed col-md-2"><img src="<?= base_url() ?>assets/images/ELS.png" width="120px"
					alt="..."></span>
		</a>

		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item dropdown d-sm-block d-md-none">
					<a class="nav-link <?php if ($judul == 'Dashboard') {
												echo 'active';
											} ?>" href="<?= base_url(); ?>dashboard"><i class="fas fa-home mr-2"></i> Dashboard</a>
					<a class="nav-link <?php if ($judul == 'Pelanggan') {
												echo 'active';
											} ?>" href="<?= base_url(); ?>Pelanggan">&nbsp;<i class="fa fa-user mr-3"></i>Pelanggan</a>
					<a class="nav-link <?php if ($judul == 'Servis') {
												echo 'active';
											} ?>" href="<?= base_url(); ?>Servis"><i class="fas fa-laptop-medical mr-2"></i> Servis</a>
					<a class="nav-link <?php if ($judul == 'Pembayaran') {
												echo 'active';
											} ?>" href="<?= base_url(); ?>Pembayaran">&nbsp;<i class="fas fa-dollar-sign mr-3"></i> Pembayaran</a>

					<div class="dropdown">
						<a class="nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<hr>
							<span style="color:white">
								<i class="far fa-user-circle mr-3"></i><?= $this->session->userdata("user"); ?>
							</span>
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" onclick="return confirm('Apakah anda yakin ingin keluar ?')"
								href="<?= base_url() ?>login/logout"><i class="fas fa-sign-out-alt"></i> Keluar</a>
						</div>
					</div>

				</li>
			</ul>
		</div>
	</nav>

	<div class="row" id="body-row">
		<div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
			<ul class="list-group">
				<li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed"
					style="background: gray">
					<small style="color: white;"> <b>MAIN MENU</b></small>
				</li>
				<a href="<?= base_url(); ?>dashboard" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start <?php if ($judul == 'Dashboard') {
																																										echo 'active';
																																									} ?>">
					<div class="d-flex w-100 justify-content-start align-items-center">
						<span class="fas fa-home fa-fw mr-3"></span>
						<span class="menu-collapsed">Dashboard</span>
					</div>
				</a>

				<a href="<?= base_url(); ?>pelanggan" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start <?php if ($judul == 'Pelanggan') {
																																										echo 'active';
																																									} ?>">
					<div class="d-flex w-100 justify-content-start align-items-center">
						<span class="fa fa-user fa-fw mr-3"></span>
						<span class="menu-collapsed">Pelanggan</span>
					</div>
				</a>

				<a href="<?= base_url(); ?>servis" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start <?php if ($judul == 'Servis') {
																																										echo 'active';
																																									} ?>">
					<div class="d-flex w-100 justify-content-start align-items-center">
						<span class="fas fa-laptop-medical fa-fw mr-3"></span>
						<span class="menu-collapsed">Servis</span>
					</div>
				</a>

				<a href="<?= base_url(); ?>pembayaran" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start <?php if ($judul == 'Pembayaran') {
																																											echo 'active';
																																										} ?>">
					<div class="d-flex w-100 justify-content-start align-items-center">
						<span class="fas fa-dollar-sign fa-fw mr-3"></span>
						<span class="menu-collapsed">Pembayaran</span>
					</div>
				</a>

				<a href="<?= base_url(); ?>laporan" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start <?php if ($judul == 'Laporan') {
																																											echo 'active';
																																										} ?>">
					<div class="d-flex w-100 justify-content-start align-items-center">
						<span class="far fa-sticky-note mr-3"> </span>
						<span class="menu-collapsed">Laporan</span>
					</div>
				</a>

				<a href="#logout" data-toggle="collapse" aria-expanded="false"
					class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
					<div class="d-flex w-100 justify-content-start align-items-center">
						<span class="far fa-user-circle fa-fw mr-3"></span>
						<span class="menu-collapsed"><?= $this->session->userdata("user"); ?></span>
						<span class="fas fa-caret-down ml-auto"></span>
					</div>
				</a>
				<div id='logout' class="collapse sidebar-submenu">
					<a href="<?= base_url() ?>admin/ubah/<?=$this->session->userdata('id')?>" class="list-group-item list-group-item-action bg-dark text-white">
						<span class="menu-collapsed"><i class="fas fa-edit"></i> Edit</span>
					</a>
				</div>
				<div id='logout' class="collapse sidebar-submenu">
					<a href="<?= base_url() ?>login/logout" onclick="return confirm('Apakah anda yakin ingin keluar ?')"
						class="list-group-item list-group-item-action bg-dark text-white">
						<span class="menu-collapsed"><i class="fas fa-sign-out-alt"></i> Keluar</span>
					</a>
				</div>

			</ul>
		</div>
		<?php else : ?>
		<!-- End Sidebar -->

		<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background: blue">
			<a class="navbar-brand" href="<?= base_url(); ?>dashboard"><img src="<?= base_url() ?>assets/images/ELS.png"
					width="120px" alt="..."></span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
				aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url(); ?>home">Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url(); ?>home/#servis">Servis</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url(); ?>home/#tentang">Tentang</a>
					</li>
					<span>
						<hr></span>

				</ul>
				<ul class="navbar-nav mr-4 mt-2 mt-lg-0">
					<li class="dropdown">
						<a href="#notif" class="dropdown btn" data-toggle="dropdown">
							<span style="color: white"><i class="far fa-bell"></i>
								<?php if ($idServ) : ?>
								<span style="color : red"><strong>!</strong></span>
								<?php endif; ?>
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-lg-right" id="notif">

						Cek Status Servis
						<hr>
							<button class="dropdown-item" type="button">

								<?php if ($idServ) : ?>
								<?php foreach ($idServ as $serv) : ?>
								<form action="<?= base_url(); ?>home/detail" method="post">
									
									<input type="hidden" name="id" value="<?=$serv['id'];?>">
									<?php if ($serv['status'] !== 'terima' ) : ?>
									<button type="submit" class="btn btn-outline-primary"><?=$serv['kode'] . $serv['id']; 
										if ($serv['status'] == 'succ') : ?>
										<i class="fas fa-check-circle" style="font-size: 20px; color: blue"></i>
										<?php elseif ($serv['status'] == 'pend') : ?>
										<i class="fas fa-minus" style="font-size: 20px;"></i>
										<?php elseif ($serv['status'] == 'acc') : ?>
										<i class="fas fa-sign-in-alt" style="font-size: 20px; color: green"></i>
										<?php elseif ($serv['status'] == 'fail') : ?>
										<i class="fas fa-times-circle" style="font-size: 20px; color: red"></i>
										<?php else : ?>
										
										<?php endif; ?>
									</button>
									<?php endif; ?>
								</form>
								<?php endforeach;?>

								<?php else : ?>
								Belum Ada Servis
								<?php endif ?>

							</button>
						</div>
					</li>
				</ul>

				<a class="badge" style="color: white" href="#keluar" id="navbarDropdownMenuLink" role="button"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="far fa-user-circle mr-1" style="font-size: 15px"></span>
					<span style="font-size: 15px"><?= $this->session->userdata("user"); ?></span>
				</a>
				<div class="dropdown-menu dropdown-menu-lg-right" id="keluar" aria-labelledby="navbarDropdownMenuLink">

					<a class="dropdown-item" href="<?= base_url() ?>login/logout"
						onclick="return confirm('Apakah anda yakin ingin keluar ?')"><i class="fas fa-sign-out-alt"></i>
						Keluar</a>
				</div>

			</div>
		</nav>
		<?php endif; ?>

		<!-- MAIN -->
		<div class="col mt-3">
