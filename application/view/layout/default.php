<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8" />
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
		<link rel="icon" type="image/png" href="<?php echo URL; ?>assets/img/favicon.ico">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Applicación Baloncesto</title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
		<!--     Fonts and icons     -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
		<!-- CSS Files -->
		<link href="<?php echo URL; ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo URL; ?>assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<!-- CSS Just for demo purpose, don't include it in your project -->
		<link href="<?php echo URL; ?>assets/css/demo.css" rel="stylesheet" />
</head>

<body>
<div class="wrapper">
    <?php if (isset($_SESSION['user'])):?>
				<div class="sidebar" data-image="assets/img/sidebar-5.jpg">
						<div class="sidebar-wrapper">
								<div class="logo">
										<a href="" class="simple-text">
												Amirouche
										</a>
								</div>
								<ul class="nav">
										<li class="nav-item active disabled">
												<a class="nav-link " href="" >
														<i class="fa fa-tachometer" aria-hidden="true"></i>
														<p>Adminitrador</p>
												</a>
										</li>
										<li class="nav-item active">
												<a class="nav-link" href="<?php echo URL; ?>">
														<i class="fa fa-home" aria-hidden="true"></i>
														<p>Home</p>
												</a>
										</li>
										<li class="nav-item active">
												<a class="nav-link" href="<?php echo URL; ?>jugadores/mejores">
														<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
														<p>Mejores</p>
												</a>
										</li>
										<li class="nav-item active">
												<a class="nav-link" href="<?php echo URL; ?>jugadores/posicion">
														<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
														<p>Mejores posicíon </p>
												</a>
										</li>
										<li class="nav-item active">
												<a class="nav-link" href="<?php echo URL; ?>jugadores/ver_jugadores">
														<i class="fa fa-eye" aria-hidden="true"></i>
														<p>Ver Jugadores </p>
												</a>
										</li>
										<li class="nav-item active">
												<a class="nav-link" href="<?php echo URL; ?>jugadores/ver_estadisticas">
														<i class="fa fa-level-up" aria-hidden="true"></i>
														<p>Ver Estadisticas </p>
												</a>
										</li>
										<li class="nav-item active">
												<a class="nav-link" href="<?php echo URL; ?>jugadores/add_jugador">
														<i class="fa fa-plus" aria-hidden="true"></i>
														<p>Nuevo Jugador</p>
												</a>
										</li>
										<li class="nav-item active">
												<a class="nav-link" href="<?php echo URL; ?>acta/index">
														<i class="fa fa-plus" aria-hidden="true"></i>
														<p>Subir acta</p>
												</a>
										</li>
								</ul>
						</div>
				</div>
    <?php endif;?>
		<div class="main-panel">
				<!-- Navbar -->
				<nav class="navbar navbar-expand-lg " color-on-scroll="500">
						<div class=" container-fluid  ">
								<a class="navbar-brand" href="<?php echo URL; ?>"> Dashboard </a>
								<button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-bar burger-lines"></span>
										<span class="navbar-toggler-bar burger-lines"></span>
										<span class="navbar-toggler-bar burger-lines"></span>
								</button>
								<div class="collapse navbar-collapse justify-content-end" id="navigation">
										<ul class="nav navbar-nav mr-auto">
												<li class="nav-item">
														<a href="#" class="nav-link" data-toggle="dropdown">
																<i class="nc-icon nc-palette"></i>
																<span class="d-lg-none">Dashboard</span>
														</a>
												</li>

										</ul>
										<ul class="navbar-nav ml-auto">
												<li class="nav-item">
                            <?php if(isset($_SESSION['user'])): ?>
																<a class="nav-link" href="<?php echo URL; ?>user/logout">
																		<span class="no-icon">logout</span>
																</a>
                            <?php else: ?>
																<a class="nav-link" href="<?php echo URL; ?>user">
																		<span class="no-icon">login</span>
																</a>
                            <?php endif;?>
												</li>
										</ul>
								</div>
						</div>
				</nav>
				<!-- End Navbar -->
				<div class="content">
						<div class="container-fluid">
								<div class="row">
                    <?= $content ;?>
								</div>
						</div>
				</div>
				<footer class="footer">
						<div class="container">
								<p class="copyright text-center">
										<a href="">Amirouche Naitslimane </a>Práctica entorno servidor
								</p>

						</div>
				</footer>
		</div>
</div>

</body>
<!--   Core JS Files   -->
<script src="<?php echo URL; ?>assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo URL; ?>assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="<?php echo URL; ?>assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo URL; ?>assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?php echo URL; ?>assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo URL; ?>assets/js/demo.js"></script>

</html>