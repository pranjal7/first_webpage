<?php
include('session.php');
?>

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

<!-- -------------------------------------------End of CSS links-------------------------------------------------- -->

<html lang="en">
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
		<li class="active"><a href="#">Temperature Sensor<span class="sr-only">(current)</span></a></li>
        <li> <a href="aboutme.php">About Me</a></li>
        <li> <a href="profile.php">Home</a></li>
		</li>
      </ul> 
      
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown" align="right">
          <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More Options <span class="caret"></span></a> -->
          <ul class="dropdown-menu">
            <li><a href="index.php">Home Page</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="aboutme.php">About Me</a></li>
          </ul>
		  <li><a href="contact.php">Contact me</a></li>
		  <li><a href="#">Signed in as: <?php echo $login_session;?></a></li>
		  <li><a href="logout.php">Log Out</a></li>
		  </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!--   col-md-8  /.container-fluid -->
</nav>

<html>
<head>
<title>Home</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<h1 class="animated pulse" align="center">Temperature Sensor</h1>
<hr class="divider">

<iframe src="temp-sensor-info.html" width="40%" height="100" sandbox>  <!-- IFrame is an HTML document embedded inside a website -->
<p>Your browser does not support iframes.</p>
</iframe

<h1> </h1>
<h1> </h1>
<a href="#" button type="button" class="btn btn-info btn-lg" style="text-align:left;border-radius:10px 10px 10px 10px;margin: 10px 10px;padding:20px" button onclick="myFunction()">Heating on!</button></a>
<script>
function myFunction() {
    alert("Heating switching on");
}
</script>

<a href="#" button type="button" class="btn btn-info btn-lg" style="text-align:left;border-radius:10px 10px 10px 10px;margin: 10px 20px;padding:20px" button onclick="myFunction2()">Heating off!</button></a>
<script>
function myFunction2() {
    alert("Heating switching off");
}
</script>
<a href="#" button type="button" class="btn btn-info btn-lg" style="text-align:left;border-radius:10px 10px 10px 10px;margin: 10px 30px;padding:20px" button onclick="myFunction3()">Air-conditioning on!</button></a>
<script>
function myFunction3() {
    alert("Air-conditioning switching on");
}
</script>
<a href="#" button type="button" class="btn btn-info btn-lg" style="text-align:left;border-radius:10px 10px 10px 10px;margin: 10px 40px;padding:20px" button onclick="myFunction4()">Air-conditioning off!</button></a>
<script>
function myFunction4() {
    alert("Air-conditioning switching off");
}
</script>

</html> 

		
</body>

</html>
