
<html>
<head>
    <title>Login</title>
      <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hogwarts Wizardry Library</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

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

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


	<link href='css/style_1.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/login1.js"></script>
	
	<style>
                .error {color: #FF0000;}
     </style>
</head>

<body>

<?php
$conn= mysqli_connect('localhost','root','','ab');
//connect to db here

$error = "";
$un = $pass = "";

if(isset($_POST['submit'])) {
	
	$un = $_POST['username'];
    $pass = md5($_POST['password']);
	

	
	$sql="SELECT * FROM regi WHERE un ='".$un."' AND pw ='".$pass."'";
	$result = mysqli_query($conn,$sql)
	   or die("faild to query database".mysqli_error());
	   
	 $row = mysqli_fetch_array($result);

		 
	 if ($row['tag'] == '1' && $un == $row['un'] && $pass == $row['pw'])
	 {
		
		header( "Location: admin.php");
		 
	 }
	 
	 if ($row['tag'] == '2' && $un == $row['un'] && $pass == $row['pw'])
	 {
		
		header( "Location: index.php");
		 
	 }

	 else
	 {
		 $error="Username or Password is incorrect";
	 }
	


	
	
	} 	
	
	
 
?>


	<!-- Menu -->
	 <nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.html">Hogwarts Wizardry Library</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li class="has-dropdown">
								<a href="blog.html">Library</a>
								<ul class="dropdown">
									<li><a href="#">Hogwarts Books</a></li>
									<li><a href="#">Other Books</a></li>
									
								</ul>
							</li>
							
							
							<li><a href="#contact">Contact Us</a></li>
							<li><a href="about.php">About Developer</a></li>
							<li class="btn-cta"><a href="login.php"><span>Login</span></a></li>
							<li class="btn-cta"><a href="sign_up.php"><span>Sign Up</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	      
			

	
		<div class="login">
           
            <form method="post" name="myForm" onsubmit="return validateForm()"  action="">
              <div>
                <label style="color:blue">Username</label><br>
                <input type="text" class="input" name="username" placeholder="User Name">
              </div>
              <div>
                <label style="color:blue">Password</label><br>
                <input type="Password" class="input" name="password" placeholder="Password">
				<span class="error"> <?php echo $error;?></span>
              </div>
              <br>
              <input  type="submit" name="submit" class="btn lbtn"   value="Login" >	
              
              <br>
			  <br/>
              <a href="sign_up.php">Don't have a account?Register First</a>

          </form>
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
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	
	           
</body>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<!-- Bottom -->
	
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h4>Attorney's Law</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h4>Navigation</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">Practice Areas</a></li>
						<li><a href="#">Won Cases</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">About us</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<li><a href="http://gettemplates.co">gettemplates.co</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Opening Hours</h4>
					<ul class="fh5co-footer-links">
						<li>Mon - Thu: 9:00 - 21 00</li>
						<li>Fri 8:00 - 21 00</li>
						<li>Sat 9:30 - 15: 00</li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
</html>