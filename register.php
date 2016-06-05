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
include('register-data.php'); // Includes register-data Script
//include('register-data.php')

if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>

<html>
<body background="images/fresh_snow.png">
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
        <li class="active"><a href="register.php">Create Account<span class="sr-only">(current)</span></a></li>
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
		<title>Register</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
			
			<h1 class="animated pulse" align="center">Create an account</h1>
			<!-- <main class="bs-docs-masthead" id="content" role="main" tabindex="-1">
			<div class="container">
			<h1 class="animated pulse">Create an account</h1>
			<hr class="divider">
			</div>
			</main> -->
		<div id="main">
			<!-- <h1>Create an account</h1> -->
			
			<hr class="divider">
			<div id="login">
			
			<!-- <h2>New Account</h2> -->
			<form action="" method="post">
			
			<label>First Name :</label>
			<input id="name" name="name" placeholder="name" type="text">
			
			<label>Last Name :</label>
			<input id="lastname" name="lastname" placeholder="lastname" type="text">
			
			<label>Email :</label>
			<input id="email" name="email" placeholder="email" type="text">
			
			<label>Username :</label>
			<input id="name" name="username" placeholder="Username" type="text">

			<label>Password :</label>
			<input id="password" name="password" placeholder="********" type="password">
						
			<h2> </h2>
			<input name="submit" type="submit" value=" Create an account ">

			<span><?php echo $error; ?></span>
			</form>
		</div>
		</div>
		
		<script type="text/javascript">
			function validateForm()
			{
				var a=document.forms["reg"]["username"].value;
				var b=document.forms["reg"]["email"].value;
				var c=document.forms["reg"]["name"].value;
				var d=document.forms["reg"]["lastname"].value;
				var e=document.forms["reg"]["password"].value;
				
			if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e==""))
				{
					alert("All Field must be filled out");
					return false;
				}
			if (a==null || a=="")
				{
					alert("User name must be filled out");
					return false;
				}
			if (b==null || b=="")
				{
					alert("Email must be filled out");
					return false;
				}
			if (c==null || c=="")
				{
					alert("First Name name must be filled out");
					return false;
				}
			if (d==null || d=="")
				{
					alert("Last Name must be filled out");
					return false;
				}
			if (e==null || e=="")
				{
					alert("Password must be filled out");
					return false;
				}
			}
		</script>
	</body>
	
</html>
