<!--
Author: Camden I. Wagner
File: index.php
-->

<!DOCTYPE html>
<html>
	<head>
		<!-- Website Title & Description -->
		<title>elite300.com</title>
		<meta name="description" content="">

		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="includes/css/styles.css" rel="stylesheet">

		<!-- including FireBase script -->
		<script src="https://cdn.firebase.com/js/client/2.2.9/firebase.js"></script>

		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<div class="background">
		<!-- Layout -->
		<div class="container" id="main">

			<?php include './php/header.php';?>

			<hr>
			<hr>

			<div class="carousel slide" id="slideshow">

				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#slideshow"></li>
					<li data-slide-to="1" data-target="#slideshow"></li>
					<li data-slide-to="2" data-target="#slideshow"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active" id="slide1">
						<div class="carousel-caption">
							<h4>SITE UNDER CONSTRUCTION</h4>
							<p>null</p>
						</div>
					</div>
					<div class="item" id="slide2">
						<div class="carousel-caption">
							<h4>SITE UNDER CONSTRUCTION</h4>
							<p>null</p>
						</div>
					</div>
					<div class="item" id="slide3">
						<div class="carousel-caption">
							<h4>SITE UNDER CONSTRUCTION</h4>
							<p>null</p>
						</div>
					</div>
				</div><!-- end carousel-inner -->

				<!-- Controls -->
				<a class="left carousel-control" data-slide="prev" href="#slideshow"><span class="icon-prev"></span></a>
				<a class="right carousel-control" data-slide="next" href="#slideshow"><span class="icon-next"></span></a>

			</div><!-- end slideshow -->

			<hr>

			<div class="row" id="info">
				<div class="col-sm-12">
					<h2><center>null</center></h2>
					<h4><center>null</center></h4>
				</div>
			</div>
			<hr>
			<div class="row" id="workexp">
				<div class="col-sm-12">
					<h2><center>null</center></h2>
					<h4><center>null</center></h4>
				</div>
			</div>

			<hr>

			<div class="row" id="info">
				<div class="col-sm-6">
					<h2>null</h2>
					<p>null</h3>
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">null</h4>
							<p class="list-group-item-text">null</p>
						</a>
					</div><!-- end list-group -->
				</div><!-- end col-sm-6 -->
				<div class="col-sm-6">
					<h2>null</h2>
					<p>null</p>
					<h3>null</h3>
					<p>null</p>
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">null</h4>
							<p class="list-group-item-text">null</p>
						</a>
					</div><!-- end list-group -->
					<p><!-- null --></p>
				</div><!-- end col-sm-6 -->
			</div><!-- end info -->

		</div><!-- end container -->

		</div><!--end background -->

		<?php include './php/footer.php';?>

		<!-- All Javascript at the bottom of the page for faster page loading -->
		<!-- First try for the online version of jQuery-->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- If no online access, fallback to our hardcoded version of jQuery -->
		<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
		<!-- Bootstrap JS -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- Custom JS -->
		<script src="includes/js/script.js"></script>

	</body>
</html>
