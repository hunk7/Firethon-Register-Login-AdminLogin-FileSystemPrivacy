<?php
session_start();
// Include the database configuration file
include 'dbh.php';

?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Firethon &mdash; Downloadable content | Upload content </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

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

	<script>
    function init() {
        let count = localStorage.getItem('counter');
        if(count === null){
            count = 0;
            localStorage.setItem('counter', count);
        }
        count = parseInt(count);
        updateCount(count);
    }
    function incrementCounter() {
        let count = parseInt(localStorage.getItem('counter'));
        count = count + 1;
        localStorage.setItem('counter', count);
        updateCount(count);
        return true;
    }

    function updateCount(count) {
        document.getElementById("count").innerHTML = "Total Downloads "+count+" times!";
    }
	</script>

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

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Working hard is <strong>rewarding</strong></h1>
							<p><a href="https://www.fireblazeaischool.in/Firethon/Register" class="btn btn-primary btn-lg with-arrow">Register for Firethon Event</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Lets Get Started</h2>
					<p id="count">-</p>
				    <script type="text/javascript">
				        init();
				    </script>
				    <p>Given below are the Downloadable content which gets expired within 3 weeks of the corresponding uploaded date. </p><br>
\
					<?php // Upload Section
					    if (isset($_SESSION['u_id'])){
					    	$sess = $_SESSION['u_id'];
					    	if ($sess == 7) {
						    echo '
						    	<ul class="list-group">
								  <li class="list-group-item d-flex justify-content-between align-items-center">
								    Max File Size to be uploaded 
								    <span class="badge badge-primary badge-pill"> 25 mb</span>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
								  	Minimum file size excepted
								    <span class="badge badge-primary badge-pill">0.01 mb</span>
								  </li>
								</ul>
								<div class="list-group">
								  <a href="Upload.php" class="list-group-item list-group-item-action">Upload Files</a>  
								</div>

								<div class="alert alert-success alert-dismissible" role="alert" id="success-alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								 	 </button>
								  	Admin Login Successful
								</div>
								';
						} else {
						     echo '<h2>Required Admin Access</h2><div class="list-group">
							  <a href="#" data-toggle="tooltip" title="Restricted Content!" class="list-group-item list-group-item-action disabled">Upload Section</a>
							</div><br>';
						}

					       
					    } else {
					    echo '<h2>Access Restricted</h2><div class="list-group">
							  <a href="#" data-toggle="tooltip" title="Restricted Content!" class="list-group-item list-group-item-action disabled">Upload Section</a>
							</div><br>';
					    }
					?>

					<!-- <div class="alert alert-success alert-dismissible" role="alert" id="success-alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					  Login In to Access Content
					</div> -->

					<?php
                        
                        if (isset($_SESSION['u_id'])){
                            // Get files from the database
                            $query = $conn->query("SELECT * FROM files ORDER BY uploaded_on DESC");

                        	?>
							<div class="list-group">
								  <a href="#" class="list-group-item list-group-item-action active">
								    Downloadable Content
								  </a>
							</div>
							<div class="list-group">
							<?php


                        	if($query->num_rows > 0){
							    while($row = $query->fetch_assoc()){
							        $imageURL = 'upload/'.$row["file_name"];
							?>
							    
							    	<a href="<?php echo $imageURL; ?>" onclick="incrementCounter()" class="list-group-item list-group-item-action"><?php echo $imageURL; ?></a>
							   
							<?php }
							}else{ ?>
							    <p>No image(s) found...</p>
							<?php } ?>
							 </div>

						<?php   echo '<div class="alert alert-success alert-dismissible" role="alert" id="success-alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							  Logged In Successfully
							</div>

								<div class="list-group">
								  <a href="#" class="list-group-item list-group-item-action active">
								    Free Downloadable Content
								  </a>

								  <a href="'.$imageURL.'" onclick="incrementCounter()" class="list-group-item list-group-item-action">'.$imageURL.'</a>

								  <a href="#" class="list-group-item list-group-item-action">Dataset.txt</a>

								  <a href="#" class="list-group-item list-group-item-action">Machine-Learning.xlx </a>

								  <a href="#" data-toggle="tooltip" title="Restricted Content!" class="list-group-item list-group-item-action disabled">graph.py</a>
								</div>';
						} else {
						echo '<h2>Access Restricted</h2>
							<div class="list-group">
							  <a href="#" data-toggle="tooltip" title="Restricted Content!" class="list-group-item list-group-item-action disabled">Download Section</a>
							</div><br>';
						}
			        ?>	
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<?php
                       if (isset($_SESSION['u_id'])){
   		               echo '<p><a href="logout.php" class="btn btn-default btn-lg">Log Out</a></p>';
                       } else {
                        echo '<p><a href="login.html" class="btn btn-default btn-lg">Log in</a></p>';
					   }
					?>
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

		<script>
	// tooltip
	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();   
	});

	// Alert 
	$(function () {
 	  TriggerAlertClose();
	});

	function TriggerAlertClose() {
	    window.setTimeout(function () {
	        $(".alert").fadeTo(1000, 0).slideUp(1000, function () {
	            $(this).remove();
	        });
	    }, 5000);
	}
	</script>

	</body>
</html>