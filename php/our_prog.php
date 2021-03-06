<!--
Author: Camden I. Wagner
File: our_prog.php
-->

<!DOCTYPE html>
<html>
<head>
	<!-- Website Title & Description -->
	<title>Our Program</title>
	<meta name="description" content="">
	
	<link rel="shortcut icon" href="img/e300.ico" type="e300/ico" />
	
	<!-- Mobile viewport optimized -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Bootstrap CSS -->
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../includes/css/bootstrap-glyphicons.css" rel="stylesheet">
	
	<!-- Custom CSS -->
	<link href="../includes/css/styles.css" rel="stylesheet">

	<!-- including FireBase script -->
	<script src="https://cdn.firebase.com/js/client/2.2.9/firebase.js"></script>
	
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

			<center><img src="../img/banner.jpg"></center>
			<hr>

			<center><h1>Our Program</h1></center>

			<hr>

			<center><h3>Elite 300 Soccer Academy</h3></center>
			<center><h7>__</h7></center>
			<center><h3>Elite 300 Juniors</h3></center>
			<hr>
			<div id="ourprog_body">
				<h4>The Elite 300 Soccer Academy is the premier training camp in the country for high school and middle school boys.  The renowned staff includes some of the nation&rsquo;s top college coaches, from some of the top college and university soccer program in the country.</h4>
				<h4>Our training program challenges the Elite 300 Soccer Academy participants to improve their technical, tactical, and physical abilities, as well as introducing the mental and emotional aspects of the college game to through our unique Sports Psychology Seminar.  We also host the popular College Recruiting Seminar, which helps aspiring college players to navigate the intricate and sometimes confusing world of the college soccer recruiting process.</h4>
				<h4><a href="http://www.swarthmoreathletics.com/">The outstanding facilities at Swarthmore College</a>, the challenging and competitive program, and the matches against top-level competitive soccer players from all over the country and around the world will enable each Elite 300 Soccer Academy player to have a great opportunity to showcase their abilities during the session.</h4>
				<h4>Similarly, the Elite 300 Juniors is for boys entering 6th-8th grades, and is a high-level training program for competitive players looking to enhance their game.  The Elite 300 Juniors utilizes the same schedule, facilities, and program as the Elite 300 Soccer Academy.  For more information, call us here: 610-690-6882.</h4>
			</div>
			<hr>
			<div>
				<center><h3>Weekly Schedule</h3></center>
				<hr>
				<div class="pull-left" style="width:33%;padding:10px;">
					<div class="pull-left">
						<h4><b>Day 1:</b></h4>
					</div>
					<div class="pull-left">
						<h4>Arrive / Check-in (1:30-3:00pm)</h4>
						<h4>Welcome & Introductions</h4>
						<h4>Dinner</h4>
						<h4>Evening Training Session</h4>
						<h4>* Elite 300 Soccer Academy Exclusive College Soccer Recruiting Seminar *</h4>
					</div>
				</div>
				<div class="pull-left" style="width:33%;padding:10px;">
					<div class="pull-left">
						<h4><b>Days 2-4:</b></h4>
					</div>
					<div class="pull-left">
						<h4>Breakfast</h4>
						<h4>Morning Training or Match Session</h4>
						<h4>Lunch</h4>
						<h4>Afternoon Training or Match Session</h4>
						<h4>Dinner</h4>
						<h4>Evening Training or Match Session</h4>
						<h4>* Day 2 - Elite 300 Soccer Academy Exclusive Sports Psychology Seminar *</h4>
					</div>
				</div>
				<div class="pull-left" style="width:20%;padding:10px;">
					<div class="pull-left">
						<h4><b>Day 5:</b></h4>
					</div>
					<div class="pull-left">
						<h4>Breakfast</h4>
						<h4>Final Match Session</h4>
						<h4>Depart (10:00am)</h4>
					</div>
				</div>
				<div class="pull-left"></div>
			</div>
			<div class="carousel slide" id="slideshow">
			</div><!-- end slideshow -->

			<div class="row" id="info">
				<div class="col-sm-6">
					
				</div><!-- end col-sm-6 -->

				<div class="col-sm-6">
					
				</div><!-- end col-sm-6 -->
			</div><!-- end info -->


		</div><!-- end container -->

	</div><!--end background -->

	<?php include './footer.php';?>

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

