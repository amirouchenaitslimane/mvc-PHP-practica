<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8" />
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
		<link rel="icon" type="image/png" href="<?php echo URL; ?>assets/img/favicon.ico">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
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
		<div class="main-panel">
				<div class="content">
						<div class="container-fluid">
								<div class="row">
                    <?= $content ;?>
								</div>
						</div>
				</div>
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