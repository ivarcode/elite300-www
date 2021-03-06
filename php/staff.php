<!--
Author: Camden I. Wagner
File: staff.php
-->

<!DOCTYPE html>
<html>
<head>
	<!-- Website Title & Description -->
	<title>Staff</title>
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

			<center><h1>2016 Staff</h1></center>

			<hr>

			<center><h3>These college & university soccer programs are represented on the Elite 300 Soccer Academy staff:</h3></center>

			<div id="logos">
				<center>
					<table>
						<tr>
							<td><a href="#" title="Penn"><img src="./img/penn_logo.jpg"></a><center><h5>Penn</h5></center></td>
							<td><a href="#" title="Swarthmore"><img src="./img/swarthmore_logo.jpg"></a><center><h5>Swarthmore</h5></center></td>
							<td><a href="#" title="Georgetown"><img src="./img/georgetown_logo.jpg"></a><center><h5>Georgetown</h5></center></td>
							<td><a href="#" title="Drexel"><img src="./img/drexel_logo.jpg"></a><center><h5>Drexel</h5></center></td>
							
							<td><a href="#" title="Connecticut College"><img src="./img/connecticut_college_logo.jpg"></a><center><h5>Connecticut College</h5></center></td>
							<td><a href="#" title="Bowdoin"><img src="./img/bowdoin_logo.jpg"></a><center><h5>Bowdoin</h5></center></td>
							<td><a href="#" title="Lehigh"><img src="./img/lehigh_logo.jpg"></a><center><h5>Lehigh</h5></center></td>
						</tr>
					</table>
					
				</center>
			</div>


			<hr>

			<div class="row" id="coach_list">
				<div class="col-sm-12" id="coaches">
					<h3>Rudy Fuller<i>~ Elite 300 Soccer Academy Director</i></h3>
					<img src="./img/rfuller.jpg" class="pull-left" id="coach-bio">
					<p>The James C. Gentle Head Coach of Men&rsquo;s Soccer, Rudy Fuller enters his 18th season at the helm of the University of Pennsylvania men&rsquo;s soccer program in 2015. In his tenure at Penn, Fuller has elevated the Quakers&rsquo; notoriety in the Ivy League and nationally. From renovating Rhodes Field to recruiting some of the best players in the country and stacking the Quakers&rsquo; schedule with NCAA contenders, Fuller&rsquo;s club has established itself as one of the nation&rsquo;s elite soccer programs.</p><p>The 2013 season saw Fuller&rsquo;s team do something no Penn club had done since 1972 -- win an outright Ivy League championship...  <a href="/php/staff/rfuller.php">view full bio</a></p>
				</div>
				<div class="col-sm-12" id="coaches">
					<h3>Keith Tabatznik<i>~ Elite 300 Soccer Academy Director</i></h3>
					<img src="./img/ktabatznik.jpg" class="pull-left" id="coach-bio">
					<p>In 1994, Keith was named the South Atlantic Region and BIG EAST Coach of the Year after leading the Hoyas to an incredible 18-4 record and the school&rsquo;s first-ever berth in the NCAA Championship as well as its first BIG EAST Regular Season Title. Thirteen former Hoyas have become professional players.</p><p>In addition to taking Hoya soccer to new heights, Keith has been an integral part of the U.S. youth development programs. In 2004 he was appointed as the Director of the Maryland Olympic Development program - a position he had held previously from 1989 to 1997...  <a href="/php/staff/ktabatznik.php">view full bio</a></p>
				</div>
				<div class="col-sm-12" id="coaches">
					<h3>Eric Wagner<i>~ Elite 300 Soccer Academy Director</i></h3>
					<img src="./img/ewagner.jpg" class="pull-left" id="coach-bio">
					<p>Eric Wagner took over the Garnet soccer program in 2002, transforming the team in short order. In 14 seasons, Wagner&rsquo;s teams have posted a 166-82-35 record, and have had 17 postseason tournament appearances.</p><p>In 2015, the Garnet earned a post-season bid for the 12th consecutive season. In 2013, Swarthmore captured its third ECAC championship and posted an undefeated home ledger of 9-0-3 at Clothier Field.</p><p>Named Centennial Conference Coach of the Year for the second time in 2012, Wagner led the Garnet to a 16-3-2 record to steer the squad to the Sweet 16 of the NCAA Tournament for the third time in five years...  <a href="/php/staff/ewagner.php">view full bio</a></p>
				</div>
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
