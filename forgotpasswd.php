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

<!----------------------------------------------End of CSS links----------------------------------------------------->


<?php
//include('register-data.php'); // Includes forgotpasswd-data Script
include('forgotpasswd-data.php');

if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>

<html>
<nav class="navbar navbar-default">
  <div class="navbar navbar-inverse">  <!-- <div class="container-fluid">  -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">FYP<span class="sr-only">(current)</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="forgotpasswd.php">Account Settings<span class="sr-only" >(current)</span></a></li>
        <li><a href="aboutme.php">About Me</a></li>
        </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="https://portal.gre.ac.uk/cp/home/displaylogin">University Portal</a></li>  -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More Options <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="aboutme.php">About Me</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="contact.php">Contact us</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<head>
		<title>Change Password</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	
	<h1 class="animated pulse" align="center">Change Password</h1>
	<!-- <main class="bs-docs-masthead" id="content" role="main" tabindex="-1">
			<div class="container">
			<h1 class="animated pulse">Change Password</h1>
			<hr class="divider">
			</div>
			</main> -->
		<div id="main">
		<!-- <div class="message"> <?php //if(isset($message)) { echo $message; } ?> </div>  -->
			
			
			<hr class="divider">
			<div id="login">
			
			
			<form action="" method="post">
						
			<label>Username :</label>
			<input id="name" name="username" placeholder="Username" type="text">
			
			<label>Current Password :</label>
			<input id="password" name="currentpassword" placeholder="********" type="password">
			
			<label>New Password :</label>
			<input id="password" name="newpassword" placeholder="********" type="password">
			
			<label>Confirm Password :</label>
			<input id="password" name="confirmpassword" placeholder="********" type="password">
			
			<h2> </h2>
			<input name="submit" type="submit" value=" Change Password ">
			
			<!--<h3><?php// include "secure_email.php"?></h3>-->
			<?php /*
			if(isset(_POST['submit'])) 
			{
			echo " <div id='success-message'>Please check your email to confirm password change.</div>";
			} */
			?>

			<span><?php echo $error; ?></span>
			</form>
		</div>	
			
	</body>
	<div id="footer_bottom" class="footer-bottom">
		<div class="container">		
		<p class="muted credit">Copyright &copy;<a href="#">  Pranjal Bhatnagar</a></p>
		</div>
	</div>
</html>
