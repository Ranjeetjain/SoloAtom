<!DOCTYPE html>
<!-- <?php
$servername="localhost";
$rootname="root";
$password="ranjeet";
echo "top";
if(isset($_POST["fname"])&&isset($_POST["lname"])&&isset($_POST["email"])&&isset($_POST["phnum"])&&isset($_POST["option"]))
{
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$phnum=$_POST["phnum"];
	$option=$_POST["option"];

}
if(empty($name)&&empty($email)&&empty($comment))
	{

	}
	else
	{
	$conn=mysql_connect($servername,$rootname,$password);
	if (!$conn) {
		die("connect failed");
	}
$sql=" insert into reg (fname,lname,email,phnum,options) values('".$fname."','".$lname."','".$email."',".$phnum.",'".$option." ' )";
mysql_select_db('register');
$result = mysql_query($sql) or
die(mysql_error());
echo "string";
}
?> -->
<html>
<head>
	<title>Solo Atom</title>
	<link rel="icon" href="images/soloatom.png" />
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
						<li><a href="who-we-are.php">Who we are</a></li>
						<li class="active"><a href="upcoming-events.php">Upcoming events</a></li>
						<li data-toggle="modal" data-target="#myModal"><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
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
								<h4>Name:</h4><input name="fnamec" class="input" type="text" required="required" placeholder="Ranjeet">
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
			<div class="btn-float">
			<button class="button" data-toggle="modal" data-target="#myModal1">Register</button>
			<div class="modal fade" id="myModal1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Register</h4>
						</div>
						<div class="modal-body">
							<form method="post" action="">
								<h4>First Name:</h4><input name="fname" class="input" type="text" required="required" placeholder="Ranjeet">
								<h4>Last Name:</h4><input name="lname" class="input" type="text" required="required" placeholder="Jain">
								<h4>E-mail:</h4><input name="email" class="input" type="email" required="required" placeholder="Ranjeetjain3@gmail.com">
								<h4>Phone Number:</h4><input name="phnum" class="input" type="phonenumber" required="required" placeholder="9789013928"><br/>
								<h4>Select event:</h4><select name="option" class="option">
									<option>One Plus Two</option>
								</select><br/>
								<input type="checkbox" required="required" name="somt" value="get"><a class="chk" data-toggle="modal" data-target="#myModal2">I agree the terms and conditions</a>
								<center><input type="submit" class="btn btn-success btn-lg"></input></center>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
						</div>
					</div>
				</div>
			</div>


			<div class="modal fade" id="myModal2" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 style="text-align:center; font-size:50px;text-decoration:underline" class="modal-title">Terms &amp; Conditions</h4>
						</div>
						<div class="modal-body">
							<h5>By clicking Submit, you accept that you have read the terms and conditions and the needs of the event thoroughly and also agree to all the terms and conditions put forth by the company.</h5>
							<h5>1.	A person who is above the age of 16 and who is physically and mentally fit for the event can only register for the event.</h5>
							<h5>2.	By registering with us does not mean the candidate is hired for the event. The company will contact the candidate by a call or a SMS or an e-mail if he/she is shortlisted based on our needs and criteria.</h5>
							<h5>3.	The candidates will be hired on the First Come, First Serve basis but only after the verification of their details, their eligibility and according to company’s needs.</h5>
							<h5>4.	The candidate is supposed to give only correct information. In case, any of the details is found to be wrong, it will immediately lead to elimination of his/her name from the event he/she has registered for and will not be able to take part in any of the future events.</h5>
							<h5>5.	The company is not responsible for failed registrations due to server problems, bad internet speed or any unforeseen reasons.</h5>
							<h5>6.	A candidate, if shortlisted, may receive a call for verification of details and so is advised to coordinate with the verification staff.</h5>
							<h5>7.	The candidate hired for an event should report on time to the specified time and venue. If not, he/she will be eliminated from the event and the company will not be liable to pay any amount to him/her whatsoever.</h5>
							<h5>8.	The candidate hired should report at the event well groomed, shaved, neat &amp;clean, decent and in the outfit recommended or provided by the organizer or the company.</h5>
							<h5>9.	The candidate hired is supposed to bring any of his/her government ID cards to the venue of the event.</h5>
							<h5>10.	The candidate hired is supposed to work honestly according to the organiser’s and the company supervisors needs. If the candidate refuses to do any work, he/she might be eliminated immediately and the company will not be liable to pay any amount to him/her whatsoever.</h5>
							<h5>11.	The candidate should ensure that his/her parents are well informed about the candidate’s willingness to work for the organizer.</h5>
							<h5>12.	The company will not be responsible for casualties, loss of materials of individuals or any kind of security before, during or after the event the candidate is registering for.</h5>
							<h5>13.	If a candidate does not appear for the event he/she is hired, he/she will be barred to attend any other event from then.</h5>
							<h5>14.	The payment will be done to the candidate hired only 10 days after the whole event is completed.</h5>
							<h5>15.	If a candidate is found to spoil the name of the company, the organizers, the partners or any organization in any way related to the event then a legal action will be taken against him/her and the company is not liable to pay any amount to the candidate hired for the event whatsoever.</h5>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
						</div>
					</div>
				</div>
			</div>

			</div>
			<div class="upcoming events">
			<!--events start-->
				<div class="event-1">
				<center><h1 class="event-name">One Plus Two</h1></center>
					<!--<h2 style="font-family:'semangat';font-size:35px;" class="event-location">Location:-ITC grand chola,guindy</h2>-->
					<h2 style="font-family:'semangat';font-size:35px;" class="date">Date:17th  18th August</h2>
					<h2 style="font-family:'semangat';font-size:35px;" class="timings">Timings:-9AM-5PM</h2>
					<!--<h2 style="font-family:'semangat';font-size:35px;" class="Dress-code">Dress code:-Saree</h2>-->
					<h2 style="font-family:'semangat';font-size:35px;" class="pay">Pay:-Rs-450</h2>
				</div>

				<!--event close-->

			</div>
		</div>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

	</body>
	</html>
