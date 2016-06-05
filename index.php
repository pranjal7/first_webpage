<!DOCTYPE html>
<!--//Bootstrap CSS-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<head>
  <link rel="stylesheet" href="animate.css">
</head>
<!-- Website Favicon -->
<link rel="icon" type="image/x-icon" href="favicon.ico">
<meta name="theme-color" content="#008080" />

<!-- -------------------------------------------End of CSS links-------------------------------------------------- -->


<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user']))  //starting session
{
header("location: profile.php");  //location of file after clicking submit
}
?>

<html>
 <body background="images/fresh_snow.png">  <!-- Teal.png -->  
<nav class="navbar navbar-default">
  <div class="navbar navbar-inverse navbar-static-top">  <!--navbar navbar-inverse <div class="container-fluid">  -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <link href = "logo.png" rel="icon" type="image/png">
      <a class="navbar-brand" href="index.php">FYP<span class="sr-only">(current)</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Login<span class="sr-only">(current)</span></a></li>
        <li><a href="aboutme.php">About Me</a></li>
        </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <!-- <li><a href="https://portal.gre.ac.uk/cp/home/displaylogin">University Portal</a></li> 
        <li><a href="startbootstrap-freelancer-1.0.3/newlandpage.html">New Homepage</a></li> -->
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More Options <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="aboutme.php">About Me</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="contact.php">Contact me</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<head>
		<title>Login Form</title>
		<!-- Styesheet addition -->
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<h1 class="animated pulse" align="center">Welcome to my webpage!</h1>
	<!-- <main class="bs-docs-masthead" id="content" role="main" tabindex="-1">
<div class="container">
<h1 class="animated pulse">Login Page</h1>

<hr class="divider">

</div> 
</main> -->

		<div class="container">
		<div id="main">
			
			<hr class="divider">
			<div class="col-md-8">
			<h4> This website is made as part of my final year project for Home Automation. I will be using this website to control and monitor sensors which will be placed in the house. </h4>
			<img class="img-responsive center-block img-circle" src="logo_v2.png" alt="me" >
			</div>
			<div id="login">
			

			<!-- Login Form -->
			<form action="" method="post">
			
			<label>Username :</label>
			<input id="name" name="username" placeholder="Username" type="text">

			<label>Password :</label>
			<input id="password" name="password" placeholder="********" type="password">

			<h1> </h1>
			<input name="submit" type="submit" value=" Login ">
			
			<a href="register.php" class="text-center new-account">Create an account </a>
			<h4> </h4>
			
			<a href="forgotpasswd.php" class="text-center new-account">Change password </a>
			<!-- <a href="register.php" class="btn btn-info" role="button">Forgot Password</a>    <!-- #5bc0de  -->
			<hr class="divider">  
			<span><?php echo $error; ?></span>
			</form>
		</div>
		</div>
		</div>
	
	<!-- Copyright footer -->
	</body>
		<div id="footer_bottom" class="footer-bottom">
		<div class="container">		
		<p class="muted credit">Copyright &copy;<a href="#">  Pranjal Bhatnagar</a></p>
		</div>
	</div>
	
</html>
