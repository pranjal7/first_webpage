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
<link href="style.css" rel="stylesheet" type="text/css">
  </head>
 <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <!-- <link href="startbootstrap-freelancer-1.0.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!--<link href="startbootstrap-freelancer-1.0.3/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!-- <link href="startbootstrap-freelancer-1.0.3/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">  

	<!-- Website Favicon -->
<link rel="icon" type="image/x-icon" href="favicon.ico">
  
<!-- -------------------------------------------End of CSS links-------------------------------------------------- -->

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
      <a class="navbar-brand" href="index.php">FYP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li> <a href="aboutme.php">About Me</a></li>
        </li>
      </ul> 
      
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown" align="right">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More Options <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php">Home Page</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="aboutme.php">About Me</a></li>
          </ul>
		  <li class="active"><a href="contact.php">Contact me<span class="sr-only">(current)</span></a></li>
		</li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!--   col-md-8  /.container-fluid -->
</nav>

	<head>
		<title>Contact me!</title>
			
			<h1 class="animated pulse" align="center">Contact me</h1>
			<hr class="divider">
			<!-- <main class="bs-docs-masthead" id="content" role="main" tabindex="-1">
			<div class="container">
			<h1 class="animated pulse">Contact me</h1>
			<hr class="divider">
			</div>
			</main> -->
			<img class="img-responsive center-block img-circle" src="logo_v2.png" alt="me" >
			<hr class="divider">
			<h3 align="center">Here are my details.</h3>		
			
			<p align="center">Name: Pranjal Bhatnagar </p>
			<p align="center">Email: <a href="mailto:bp210@gre.ac.uk">bp210@gre.ac.uk</a>.</p>
			<p align="center">Address: Gillingham, United Kingdom </p>
			<!--<div class="nav3" style="height:705px;">

			<a href="https://uk.linkedin.com/in/bhatnagarpranjal"  class="icons"><img src="linkedin.png"></a>  <!-- style="float:left; width:10px; margin: 10px 1000px" -->
			<!-- <a href="https://twitter.com/pranjal091994"  class="icons"><img src="twitter.png"></a>  <!-- style="float:left; width:10px; margin: 10px 10px" -->
			<!-- </div> -->
			<hr class="divider">
			<h1> </h1>
			
						
			<div class="container">
<!-- Feedback Form Starts Here -->
			<div id="feedback">
<!-- Heading Of The Form -->
			<div class="head">
			<h3>Contact me</h3>
			<p>Please contact me if you have any questions</p>
			</div>
<!-- Feedback Form -->
			<form action="#" id="form" method="post" name="form">
			<input name="vname" placeholder="Your Name" type="text" value="">
			<input name="vemail" placeholder="Your Email" type="text" value="">
			<input name="sub" placeholder="Subject" type="text" value="">
			<label>Your message</label>
			<textarea rows="4" cols="89" name="msg" placeholder="Type your text here..."></textarea>   <!-- rows="4" cols="89" -->
			<input id="send" name="send" type="submit" value="Send">
			</form>
			<h3><?php include "secure_email.php"?></h3>
			</div>
<!-- Feedback Form Ends Here -->
			</div>
						
	</head>
	<div id="footer_bottom" class="footer-bottom">
		<div class="container">		
		<p class="muted credit">Copyright &copy;<a href="#">  Pranjal Bhatnagar</a></p>
		</div>
	</div>
</html>
