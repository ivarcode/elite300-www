<!--
Author: Camden I. Wagner
File: contact.php
-->

<!DOCTYPE html>
<html>
<head>
	<!-- Website Title & Description -->
	<title>Contact</title>
	<meta charset="utf-8">
	<meta name="description" content="">

	<link rel="shortcut icon" href="img/e300.ico" type="e300/ico" />

	<!-- Mobile viewport optimized -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Bootstrap CSS -->
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../includes/css/bootstrap-glyphicons.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../includes/css/styles.css" rel="stylesheet">

	<!-- Include Modernizr in the head, before any other Javascript -->
	<script src="../includes/js/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<div class="background">
		<!-- Layout -->
		<div class="container" id="main">

			<?php include './header.php';?>

			<hr>
			<hr>

			<center><img src="./img/logo.png"></center>

			<div class="carousel slide" id="slideshow">
			</div><!-- end slideshow -->

			<center><h1>Contact Us</h1></center>

			<hr>

			<img src="./img/e300_banner.jpg" class="pull-right" style="margin-bottom:30px; margin-right:74px;">

			<h2 style="margin-top:80px;">Contact Elite 300 Soccer Academy</h2>

			<h4><b>Email:  </b>ewagner1@swarthmore.edu</h4>
			<h4><b>Phone:  </b>610-690-6882 (work)</h4>

			<center><img src="./img/frombleachers.jpg"></center>

			<hr>


		</div><!-- end container -->

	</div><!--end background -->

	<?php include './footer.php';?>

	<!-- All Javascript at the bottom of the page for faster page loading -->
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="../includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	<!-- Bootstrap JS -->
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<!-- Custom JS -->
	<script src="../includes/js/script.js"></script>

</body>
</html>
