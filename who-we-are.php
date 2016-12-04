<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>Solo Atom</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="icon" href="images/soloatom.png" />
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="js/gmaps.js"></script>
	<script type="text/javascript">
		var map;
		$(document).ready(function(){
			map = new GMaps({
				el: '#map',
				lat: -12.043333,
				lng: -77.028333,
				zoomControl : true,
				zoomControlOpt: {
					style : 'SMALL',
					position: 'TOP_LEFT'
				},
				panControl : false,
				streetViewControl : false,
				mapTypeControl: false,
				overviewMapControl: false
			});
		});
	</script>
</head>
<body>
	<div class="containers">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="logo navbar-brand">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img class="top-img" src="images/soloatom.jpg">
							</div>
							<div class="back">
								<img class="top-img" src="images/soloatomrev.jpg">
							</div>
						</div>
					</div>
				</div>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
						<li ><a href="index.php">Home</a></li>
						<li><a href="what-we-do.php">What we do</a></li>
						<li class="active"><a href="who-we-are.php">Who we are</a></li>
						<li><a href="upcoming-events.php">Upcoming events</a></li>
						<li data-toggle="modal" data-target="#myModal"><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="">

		</div>
		<div class="center-section">

			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<center><h4 class="modal-title">Contact Us</h4></center>
						</div>
						<div class="modal-body">
							<form method="POST" action="#">
								<h4>Name:</h4><input name="fname" class="input" type="text" required="required" placeholder="Ranjeet">
								<h4>E-mail:</h4><input name="e-mail" class="input" type="email" required="required" placeholder="Ranjeetjain3@gmail.com">
								<h4>Your Comment</h4><textarea name="comment" class="input-cont" required="required" placeholder="   Your comment please"></textarea>
								
								<center><input type="submit" class="btn btn-success btn-lg"></input></center>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
						</div>
					</div>
				</div>
			</div>
			<div >

				<div class="row jumbotron image main" width="100%">
					<div class="col-md-3 col-xs-14 col-sm-6" >
						<img class="images" src="images/nitin.jpg" width="100%" height="300px">
						<div class="info-zone" >
							<h3  class="about-text glyphicon glyphicon-user " > Nitin M</h3><br/>
							<h3 class="about-text glyphicon glyphicon-screenshot"> Event Co-ordinator</h3><br/>
							<h3 class="about-text glyphicon glyphicon-stats"> Accounts Manager</h3><br/>
							<h3 class="about-text glyphicon glyphicon-phone"> 91-7200 363550</h3><br/>
						</div>
					</div>
					<div class="col-md-3 col-xs-14 col-sm-6">
						<img class="images" src="images/nikhil.jpg" width="100%" height="300px" >
						<div class="info-zone">
							<h3 class="about-text glyphicon glyphicon-user"> Nikhil Kumar</h3><br/>
							<h3 class="about-text glyphicon glyphicon-screenshot"> Event Co-ordinator</h3><br/>
							<h3 class="about-text glyphicon glyphicon-check"> Candidates Verifier</h3><br/>
							<h3 class="about-text glyphicon glyphicon-phone"> 91-95000 06031</h3><br/>
						</div>
					</div>
					<div class="col-md-3 col-xs-14 col-sm-6">
						<img class="images" src="images/ranjeet.jpg" width="100%" height="300px">
						<div class="info-zone">
							<h3  class=" glyphicon glyphicon-user about-text"> Ranjeet Jain</h3><br/>
							<h3 class="about-text glyphicon glyphicon-screenshot"> Event Co-ordinator</h3><br/>
							<h3 class="about-text glyphicon glyphicon-globe"> Website Developer</h3><br/>
							<h3 class="about-text glyphicon glyphicon-phone"> 91-97890 13928</h3><br/>
						</div>
					</div>
					<div class="col-md-3 col-xs-14 col-sm-6">
						<img class="images" src="images/sanjay.jpg" width="100%" height="300px">
						<div class="info-zone">
							<h3 class="about-text glyphicon glyphicon-user"> Sanjay Gehloth</h3><br/>
							<h3 class="about-text glyphicon glyphicon-screenshot"> Event Co-ordinator</h3><br/>
							<h3 class="about-text glyphicon glyphicon-ok"> Event acceptor</h3><br/>
							<h3 class="about-text glyphicon glyphicon-phone"> 91-90429 64750</h3><br/>
						</div>
					</div>

				</div>
				<!--<div id="maps">



					<div id="map">
						
					</div>-->

				</div>
				
		</div>
	</div>
	<!--<footer class="footer">
			<h3>&copy; All rights reserved</h3>
			<div class="footer-cnt">
			<ul>
				
				<a href=""><li>Facebook</li></a>
				<a href=""><li>Twitter</li></a>
				<a href=""><li>Google+</li></a>
			</ul>
			</div>
		</footer>-->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>