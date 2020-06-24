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
									<li><a href="home.html">Home</a></li>
									<li><a href="info.html">Info</a></li>
									<li class="dropdown">
								      <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								        Travel
								      </a>
								      <div class="dropdown-menu">
								        <a class="dropdown-item" href="tokyo.html">Tokyo</a>
								        <a class="dropdown-item" href="osaka.html">Osaka</a>
										<a class="dropdown-item" href="hokkaido.html">Hokkaido</a>
								      </div>
								    </li>								
									<li><a href="faq.html">Faq</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="login.php">Login</a></li>
									
							    </ul>
							  </div>						
						</div>
					</nav>
				</header>
				<!-- End Header Area -->				
			</section>
			
				<section class="default-banner active-blog-slider">
					<div class="item-slider relative" style="background: url(img/slider4.jpg);background-size: cover;">
						<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center">
										<h4 class="text-white mb-20 text-uppercase">Explore the Wonders Japan</h4>
										<h1 class="text-uppercase text-white">Search a Question</h1>
										<p class="text-white">Search any questions about Japan to make ur trip <br>
										more comfortable and enjoy in the fullest.</p>
										
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="item-slider relative" style="background: url(img/slider5.jpg);background-size: cover;">
						<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center">
										<h4 class="text-white mb-20 text-uppercase">Explore the Wonders Japan</h4>
										<h1 class="text-uppercase text-white">Browse Our FAQs</h1>
										<p class="text-white">Questions provided to solve your problems<br>
										and help to plan out your Japan trip.</p>
										
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
								<h1 class="mb-10">Communication Resources</h1>
								<p></p>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center d-flex">
					<?php
							/* Attempt MySQL server connection. Assuming you are running MySQL
							server with default setting (user 'root' with no password) */
							$link = mysqli_connect("localhost", "root", "", "travel");
							 
							// Check connection
							if($link === false){
								die("ERROR: Could not connect. " . mysqli_connect_error());
							}
							 
							// Attempt select query execution
							$sql = "SELECT * FROM faq WHERE category ='Communication Resources'";
							if($result = mysqli_query($link, $sql)){
								if(mysqli_num_rows($result) > 0){
									
									while($row = mysqli_fetch_array($result)){
										echo "<div class=\"section-top-border\">
												<h4 class=\"mb-30\">".$row['question']."</h4>
													<div class=\"row\">
														<div class=\"col-lg-12\">
															<blockquote class=\"generic-blockquote\">".$row['answer']."
															</blockquote>
														</div>
													</div>
											</div>";
									}
									
									// Free result set
									mysqli_free_result($result);
								} else{
									echo "No records matching your query were found.";
								}
							} else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
							}
							 
							// Close connection
							mysqli_close($link);
						?>
						
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