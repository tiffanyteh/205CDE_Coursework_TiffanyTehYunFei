<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Konnichiwa Japan</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			
			
		</head>
		
		<style>
		.input-container {
		  display: -ms-flexbox; /* IE10 */
		  display: flex;
		  width: 100%;
		  margin-bottom: 15px;
		}

		.icon {
		  padding: 10px;
		  background: dodgerblue;
		  color: white;
		  min-width: 50px;
		  text-align: center;
		}

		.input-field {
		  width: 100%;
		  padding: 10px;
		  outline: none;
		}

		.input-field:focus {
		  border: 2px solid dodgerblue;
		}

		/* Set a style for the submit button */
		.btn1 {
		  background-color: dodgerblue;
		  color: white;
		  padding: 15px 20px;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		  opacity: 0.9;
		}

		.btn1:hover {
		  opacity: 1;
		}
		</style>
		
		<body>
		
			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<!-- Start Header Area -->
				<header class="default-header">
					<nav class="navbar navbar-expand-lg  navbar-light">
						<div class="container">
							  <a class="navbar-brand" href="index.html">
							  	<img src="img/logo1.png" alt="">
							  </a>
							  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							    <span class="text-white lnr lnr-menu"></span>
							  </button>

							  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
							    <ul class="navbar-nav">
									
									<li><a href="logout.php">Log Out</a></li>
									<li><b><script>
	
										var date = new Date();
										var whole;
										var day = date.getDate();
										var month = date.getMonth() + 1;
										var year = date.getFullYear();
										
										whole = day + "/" + month + "/" + year;
										document.write(whole.fontcolor("white"));
										
									</script></b></li>
									
							    </ul>
							  </div>						
						</div>
					</nav>
				</header>
				<!-- End Header Area -->				
			</section>
			
				<section class="default-banner active-blog-slider">
					<div class="item-slider relative" style="background: url(img/login1.jpg);background-size: cover;">
						<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center">
										<h4 class="text-white mb-20 text-uppercase">Explore the Wonders Japan</h4>
										<h1 class="text-uppercase text-white">Admin Page</h1>
										<p class="text-white"></p>
										
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="item-slider relative" style="background: url(img/login2.jpg);background-size: cover;">
						<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center">
										<h4 class="text-white mb-20 text-uppercase">Explore the Wonders Japan</h4>
										<h1 class="text-uppercase text-white">Admin Page</h1>
										<p class="text-white"></p>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</section>
				
			<!-- Start feature Area -->
			<section class="feature-area section-gap" id="secvice" >
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Add Details</h1>
								<p></p>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center d-flex">
						<form action="add.php" style="max-width:500px;margin:auto" method="post">
						  <h4 style="margin-bottom: 20px;">Add FAQ</h4>
						  <div class="input-container">
							<i class="fa fa-tag icon"></i>
							<input class="input-field" type="text" placeholder="Category" name="cat">
						  </div>

						  <div class="input-container">
							<i class="fa fa-question-circle icon"></i>
							<input class="input-field" type="text" placeholder="Question" name="ques">
						  </div>
						  
						  <div class="input-container">
							<i class="fa fa-pencil-square icon"></i>
							<input class="input-field" type="text" placeholder="Answer" name="ans">
						  </div>

						  <button type="submit" class="btn1" value="Submit">Add</button>
						</form>
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
			
			<!-- Start update Area -->
			<section class="project-area section-gap" id="project">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-30 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10"> Update Details </h1>
								<p></p>
							</div>
						</div>
					</div>						
					
					<div class="row justify-content-center d-flex">
						<form action="update.php" style="max-width:500px;margin:auto" method="post">
						  <h4 style="margin-bottom: 20px;">Update FAQ</h4>

						  <div class="input-container">
							<i class="fa fa-question-circle icon"></i>
							<input class="input-field" type="text" placeholder="Question" name="ques">
						  </div>
						  
						  <div class="input-container">
							<i class="fa fa-pencil-square icon"></i>
							<input class="input-field" type="text" placeholder="Answer" name="ans">
						  </div>

						  <button type="submit" class="btn1" value="Submit">Update</button>
						</form>
					</div>	
						
				</div>	
			</section>
			<!-- End update Area -->
			
			<!-- Start feature Area -->
			<section class="feature-area section-gap" id="secvice" >
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Delete Details</h1>
								<p></p>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center d-flex">
						<form action="delete.php" style="max-width:500px;margin:auto" method="post">
						  <h4 style="margin-bottom: 20px;">Delete FAQ</h4>

						  <div class="input-container">
							<i class="fa fa-question-circle icon"></i>
							<input class="input-field" type="text" placeholder="Question" name="ques">
						  </div>

						  <button type="submit" class="btn1" value="Submit">Delete</button>
						  <br><br>
						  <h5>FAQ Deleted Successfully.</h5>
						</form>
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
			
			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Plans seek to deliver transport and related benefits to the community as well as some more direct benefits.
								</p>
								
            		<p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
            		
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest <br> We try to serve you our best <br> Contact us ur needs</p>
								
								</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/explore"><i class="fa fa-twitter"></i></a>
									<a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a>
									
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->			

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/slick.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>		
			<script src="js/main.js"></script>	
			
			
			
		</body>
	</html>