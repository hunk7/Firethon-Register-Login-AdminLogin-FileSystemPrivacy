<?php

session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Firethon | About </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: +91 80803 96365</p>
						<ul class="fh5co-social">
							<li><a href="https://www.instagram.com/fireblazeaischool/?hl=en"><i class="icon-instagram"></i></a></li>
							<li><a href="https://www.fireblaze.in/"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.php">Firethon<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<!-- <li class="active"><a href="index.html">Home</a></li> -->
							<li class="active"><a href="about.php">About</a></li>
							<li><a href="https://www.fireblazeaischool.in/blog/">Blog</a></li>
							<li class="has-dropdown">
								<a href="#">Services</a>
								<ul class="dropdown">
									<li><a href="https://www.fireblaze.in/">Fireblaze Tech</a></li>
									<li><a href="https://www.fireblazeaischool.in/">AI School</a></li>
									<li><a href="https://www.fireblazeaischool.in/online">Fireblaze Ignite</a></li>
									<?php
    	                                if (isset($_SESSION['u_id'])){
										   echo '<li><a href="#">Logged In </a></li>';
										} else {
										echo '<li><a href="signup.php">Register User</a></li>';
										}
							        ?>
								</ul>
							</li>
							<li><a href="terms.php">Terms</a></li>
							<?php
    	                       if (isset($_SESSION['u_id'])){
    	   		               echo '<li class="btn-cta"><a href="logout.php"><span>Logout</span></a></li>';
    	                       } else {
    	                        echo '<li class="btn-cta"><a href="login.html"><span>Login</span></a></li>';
							   }
							?>		
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/4.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>About the Event | Firethon</h1>
							<h2>WORKING HARD IS REWARDING | Register Here <a href="https://www.fireblazeaischool.in/Firethon/Register/" target="_blank">Get Me Signed Up</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-about">
		<div class="container">
			<div class="about-content">
				<div class="row animate-box">
					<div class="col-md-6 col-md-push-6">
						<img class="img-responsive" src="images/img_bg_1.jpg" alt="about">
						<br><br>
						<div class="desc">
							<h3>Submission Guideline</h3>
							<p><b>Please submit your “Jupyter Notebook” in .html, .pdf, .markdown
                            format. </b><br>
                            <b>Do not accpet the .ipynb or .py file.</b>
                            <br></p>
						</div>
						<img class="img-responsive" src="images/img_bg_1.jpg" alt="about">
						<br><br>
						<div class="desc">
							<h3>Result</h3>
							<p><b>Grade point</b><br>
							<ul>
							    <li>#1 is great.</li>
							    <li>#2 is fine if the group is happy.</li>
							    <li>#3 is bad</li>
							</ul>
                            <b>Mostly depends on following points.</b>
                            <br>
                            <ul>
                                <li>Experts and other participants successfully working together.</li>
                                <li>Experts working with other subject matter experts on problem
                                investigation but not implementation.</li>
                                <li>Other participants struggling to find something relevant to work on /
                                implementing a solution.</li>
                            </ul>
                            </p>
						</div>
						<img class="img-responsive" src="images/img_bg_1.jpg" alt="about">
						<br><br>
						<div class="desc">
							<h3>Evaluation</h3><br>
							<p>Total Marks = <b>100</b> <br>
                            1) based upon jupyter_notebook representation. <b>20 Marks </b><br>
                            2) Data Pre-Processing (all steps upto cleaning part) <b>20 Marks </b> <br>
                            3) Data Visualization and explain plotting technique. <b>30 Marks </b><br>
                            4) Machine Learning Algorithm (Build the model) <b>10 Marks</b> <br>
                            5) why used this model? <b>10 Marks</b> <br>
                            6) Save the output in csv format / proper classification or regression report. <br>
                            <b>10 Marks</b>.<br><br>
                           <b> Based on this point’s decide the grade</b>.
                            <br></p>
						</div>
					</div>
					<div class="col-md-6 col-md-pull-6">
						<div class="desc">
							<h3>About | Fireblaze technologies Pvt Ltd Pune.</h3>
							<p>There is a spiritual aspect to our lives – when we give, we receive – when a
                            business does something good for somebody, that somebody feels good about
                            them!!!</p>
                            <h3>About | Firethon</h3>
							<p>Firethon’s aren’t really about wining prizes. They are about playing with
                            awesome new technology and meet new idea’s.
                            Firethon like a “tournament” show your skills­set in a crowd & get a new
                            match with new technology with inovations. Firethon Always hack with new
                            problems. It is a best platform for begineers who is intersted in Data Science.
                            Advantages is open for all , No education restriction “No Degree”, free of
                            cost..</p>
						</div>
						<div class="desc">
							<h3>Welcome session</h3>
							<p><b>Introduce the organizers </b><br>
                            • Explain the Fireblaze history and purpose of the event <br>
                            • Ask who has not been to a hackathon before, or to your particular event
                            before; give an applause.<br>
                            • Explain : the schedule of workshops, Breakfast, end time.<br>
                            • Anyone who has brought a project idea and he/she happy for introduce
                            the project to everyone “sure”. This is sometimes called “project
                            pitches”.<br>
                            • Keep each pitch short :<br>
                            a) The leader’s name and affiliation<br>
                            b) a problem statement<br>
                            c) the solution idea and the skills/help needed.<br></p>
						</div>
						<div class="desc">
						    <h3>Hacking Rules</h3>
						    <ul>
								<li>This Firethon is open to those who are interested in technology and
                                innovation.</li>
								<li><b>The event is open to Students or recent university graduates or Working
                                professional of the following categories:</b></li>
                                <ul>
                                    <li>Engineering Student</li>
                                    <li>BCA or MCA Student</li>
                                    <li>Developers</li>
                                    <li>Data Analyst</li>
                                    <li>Data Scientist</li>
                                    <li>Machine Learning Engineer</li>
                                </ul>
								<li>Often groups of 2-3 and individual form around a project, such as
                                building a new data visualization, writing a document, or
                                collaboratively investigating a problem.</li>
                                <li>Hackathon is open to the participation of natural persons who:</li>
                                <ul>
                                    <li>are over 18 years of age and have full legal capacity;</li>
                                    <li>have a confirmation of their participation in Firethon (“register
                                    form”).</li>
                                </ul>
                                <li>The members of each team are to ensure that the personal information
                                provided upon registration online is true and accurate and must
                                unconditionally accept any and all decisions made by Hackathon
                                organizers with regard to event organization.</li>
                                <li>Registering for the ‘Firethon’ it's Totally Free for All.</li>
                                <li>You can either invite your friends to form a team or you can request
                                other teams to add you as a member.</li>
                                <li>The hackathon will <b>start at Mar 14, 2020 10:00 AM IST</b> and end at
                                <b>Mar 14, 2020 06:00 PM IST.</b></li>
                                <li>Participants take out their laptops and charger, connect to power and
                                wifi, and get working.</li>
                                <li>Once the hackathon starts, you will get an option to submit your
                                hack, you can submit as many times as you want, the last hack will be
                                considered as the final submission.</li>
                                <li>Participants that bring projects to the event have an opportunity to
                                briefly (2 minute max) explain what they are working on at that given
                                problem statement.</li>
                                <li>Your hack must be developed entirely during the Hackathon
                                duration.</li>
                                <li>You may use open source libraries and other freely available
                                systems.</li>
                                <li>At the end of the event, a wrap-up session gives each project a
                                chance to demonstrate some accomplishments.</li>
							</ul>
						</div>
						<div class="desc">
							<h3>Registration</h3>
							<p><b>Registration Link : </b> https://www.fireblazeaischool.in/Firethon/Register/<br>
                            Registration Limit - <br>
                            Limited seat for both(Team / Individuals). Only 35 Participants. <br><br>
                            <b>Prize -</b> <br>
                            Some cool T-shirts, stickers, prizes and many more. <br> <br>
                            <b>Thanking You! </b><br>
                            “Fireblaze Technologies Team.”
                            </p>
						</div>
					</div>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Meet Our Team</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="images/person_1.jpg" alt="Free HTML5 Templates by gettemplates.co">
						<h3>Aniruddha Kalbande</h3>
						<strong class="role">Director & CEO</strong>
						<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
						<!--<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>-->
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="images/person_2.jpg" alt="Free HTML5 Templates by gettemplates.co">
						<h3>Shubham Sir</h3>
						<strong class="role">Data Science Instructor</strong>
						<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
						<!--<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>-->
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="images/person_3.jpg" alt="Free HTML5 Templates by gettemplates.co">
						<h3>Internship Team (2020)</h3>
						<strong class="role">Front-end | Back-end Developers | Digital Marketers</strong>
						<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
						<!--<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>-->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Lets Get Started</h2>
					<p>Download the PDF format of the Details Regarding the Event | Firethon</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="Firethon_Rules_Guidelines.pdf" class="btn btn-default btn-lg">Get Info</a></p>
				</div>
			</div>
		</div>
	</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

