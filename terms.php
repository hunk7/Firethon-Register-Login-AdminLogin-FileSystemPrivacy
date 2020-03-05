<?php

session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Firethon | Terms & Conditions</title>
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
							<li><a href="about.php">About</a></li>
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
							<li class="active"><a href="terms.php">Terms</a></li>
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

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/8.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>TERMS AND CONDITIONS</h1>
							<h2>WORKING HARD IS REWARDING | Register Here <a href="https://www.fireblazeaischool.in/Firethon/Register/" target="_blank">Get Me Signed Up</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-services">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="feature-center animate-box">
						<span class="icon icon2">
							<i class="icon-eye"></i>
						</span>
						<div class="desc">
							<h3>TERMS AND CONDITIONS</h3>
							<p>
                            Your website may use the Terms and Conditions given below. The terms "We" / "Us" / "Our"/”Company” individually and collectively refer to Fireblaze Technologies Private Limited | Firethon and the terms "Visitor” ”User” refer to the users. <br> <br>
                            
                             This page states the Terms and Conditions under which you (Visitor) may visit this website (“Website”). Please read this page carefully. <br> <br>
                            
                            If you do not accept the Terms and Conditions stated here, we would request you to exit this site. The business, any of its business divisions and / or its subsidiaries, associate companies or subsidiaries to subsidiaries or such other investment companies (in India or abroad) reserve their respective rights to revise these Terms and Conditions at any time by updating this posting. <br><br>You should visit this page periodically to re-appraise yourself of the Terms and Conditions, because they are binding on all users of this Website. </p>
						</div>
					</div>

					<div class="feature-center animate-box">
						<span class="icon icon2">
							<i class="icon-command"></i>
						</span>
						<div class="desc">
							<h3> Privacy Policy</h3>
							<p>  The terms "We" / "Us" / "Our"/”Company” individually and collectively refer to Fireblaze Technologies Private Limited | Firethon and the terms "You" /"Your" / "Yourself" refer to the users. <br><br>
                            
                            This Privacy Policy is an electronic record in the form of an electronic contract formed under the information Technology Act, 2000 and the rules made thereunder and the amended provisions pertaining to electronic documents / records in various statutes as amended by the information Technology Act, 2000. This Privacy Policy does not require any physical, electronic or digital signature.<br><br>
                            
                            This Privacy Policy is a legally binding document between you and o Fireblaze Technologies Private Limited (both terms defined below). The terms of this Privacy Policy will be effective upon your acceptance of the same (directly or indirectly in electronic form, by clicking on the I accept tab or by use of the website or by other means) and will govern the relationship between you and o Fireblaze Technologies Private Limited for your use of the website “Website” (defined below).<br><br>
                            
                            This document is published and shall be construed in accordance with the provisions of the Information Technology (reasonable security practices and procedures and sensitive personal data of information) rules, 2011 under Information Technology Act, 2000; that require publishing of the Privacy Policy for collection, use, storage and transfer of sensitive personal data or information.<br><br>
                            
                            Please read this Privacy Policy carefully by using the Website, you indicate that you understand, agree and consent to this Privacy Policy. If you do not agree with the terms of this Privacy Policy, please do not use this Website.<br><br>
                            
                            By providing us your Information or by making use of the facilities provided by the Website, You hereby consent to the collection, storage, processing and transfer of any or all of Your Personal Information and Non-Personal Information by us as specified under this Privacy Policy. You further agree that such collection, use, storage and transfer of Your Information shall not cause any loss or wrongful gain to you or any other person.</p>
						</div>
					</div>

					<!--<div class="feature-center animate-box">
						<span class="icon icon2">
							<i class="icon-power"></i>
						</span>
						<div class="desc">
							<h3>Web Starter</h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>

					<div class="feature-center animate-box">
						<span class="icon icon2">
							<i class="icon-brush"></i>
						</span>
						<div class="desc">
							<h3>Web Design</h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>

					<div class="feature-center animate-box">
						<span class="icon icon2">
							<i class="icon-camera"></i>
						</span>
						<div class="desc">
							<h3>Video Editing</h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>-->

					<div class="feature-center animate-box">
						<span class="icon icon2">
							<i class="icon-help2"></i>
						</span>
						<div class="desc">
							<h3>24/7 Help &amp; Support</h3>
							<p>If you Face any Problem Regarding Registration | Login | Terms of Use | Privacy Policy | Events | Hackathons Feel Free to Contact us - We are here 24/7 to Help you Out!!! <br> Email : shubham.fireblaze@gmail.com <br> Contact No : 743918364891</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="fhco-cta-block">
						<h2>Want To Work With Us?</h2>
						<p>Provide your Details According to the Eligibility of the Criteria and Futher Application Process There on !</p>
						<p><a href="https://www.fireblazeaischool.in/careers.html" class="btn btn-primary">Get In Touch</a></p>
					</div>

					<div class="fhco-cta-block">
						<h2>Subscribe ( In Beta )</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						<form action="#" id="fh5co-subscribe">
							<div class="form-group">
								<label for="email">Enter Email</label>
								<input type="text" class="form-control" id="email">
								<button class="btn btn-primary">Send</button>
							</div>
						</form>
					</div>
					
					<div class="fhco-cta-block">
						<h2>Contact Us?</h2>
						<p>You can Request a Query by Mail or Contact the Fireblaze Technologies Office by Contact No : 34873262983</p>
						<p><a href="https://www.fireblazeaischool.in/contact-us.html" class="btn btn-primary">Get In Touch</a></p>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Get Detailed Infomation Regarding Terms & Privacy Policy</h2>
					<p>We use the General Privacy Policy as per the Government of india Act</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="https://www.fireblazeaischool.in/privacy-policy.html" class="btn btn-default btn-lg">Get Info</a></p>
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


