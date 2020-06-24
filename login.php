<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: admin.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
			
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: admin.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "Wrong Password.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
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
		.input-container1 {
		  display: -ms-flexbox; /* IE10 */
		  display: flex;
		  width: 100%;
		  margin-bottom: 15px;
		}

		.icon1 {
		  padding: 10px;
		  background: dodgerblue;
		  color: white;
		  min-width: 50px;
		  text-align: center;
		}

		.input-field1 {
		  width: 100%;
		  padding: 10px;
		  outline: none;
		}

		.input-field1:focus {
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
					<div class="item-slider relative" style="background: url(img/login1.jpg);background-size: cover;">
						<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center">
										<h4 class="text-white mb-20 text-uppercase">Explore the Wonders Japan</h4>
										<h1 class="text-uppercase text-white">Admin Login</h1>
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
										<h1 class="text-uppercase text-white">Admin Login</h1>
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
								<h1 class="mb-10">Login</h1>
								<p></p>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center d-flex">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="max-width:500px;margin:auto" method="post">
						  <h2></h2>
						  <div class="input-container1 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
							<i class="fa fa-user icon1"></i>
							<input class="input-field1" type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
							
						  </div>
						  <span class="help-block" style="color:red;"><?php echo $username_err; ?></span>
						  <div class="input-container1 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
							<i class="fa fa-key icon1"></i>
							<input class="input-field1" type="password" placeholder="Password" name="password" >
							 
						  </div>
						  <span class="help-block" style="color:red;"><?php echo $password_err; ?></span>

						  <button type="submit" class="btn1" value="Login">Login</button>
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