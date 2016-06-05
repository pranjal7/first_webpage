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
		<li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li> <a href="aboutme.php">About Me</a></li>
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

<h1 class="animated pulse" align="center">Welcome!</h1>
<hr class="divider">
<p id="welcome" align="center">Welcome : <i><?php echo $login_session; ?></i></p>
<p align="center"> Please look below to find information about your sensors</p>
<hr class="divider">
<!-- <main class="bs-docs-masthead" id="content" role="main" tabindex="-1">
<div class="container">
<h1 class="animated pulse">Welcome to your HomePage</h1>
<hr class="divider">

<p id="welcome">Welcome : <i><?php// echo $login_session; ?></i></p>
<p> Please look below to find information regarding your Home Automation system</p>
</div>
</main> -->
<!--
<iframe src="lshw.html" width="100%" height="300" sandbox>  <!-- IFrame is an HTML document embedded inside a website -->
  <!--<p>Your browser does not support iframes.</p>
</iframe

<s1> Click on the button to monitor and control temperature sensors </s1> -->
<div style="width:600 px">
<img class="img-responsive block" style="float:left; width:300px; margin: 10px 180px"src="thermometers.jpg" alt="thermometer" >
<img class="img-responsive block" style="float:left; width:300px; margin: 10px 40px" src="bulb.png" alt="door">
<img class="img-responsive block" style="float:left; width:300px; margin: 10px 50px" src="messages.png" alt="messages">
<div style="clear:both"></div>
</div>
<a href="temperature.php" button type="button" class="btn btn-info btn-lg" style="text-align:left;border-radius:10px 10px 10px 10px;margin: 10px 200px;padding:20px">Temperature</button></a>


<a href="door.php" button type="button" class="btn btn-info btn-lg" style="text-align:left;border-radius:10px 10px 10px 10px;margin: 10px 230px;padding:20px">Light</button></a>

<a href="message.php" button type="button" class="btn btn-info btn-lg" style="text-align:left;border-radius:10px 10px 10px 10px;margin: 10px 80px;padding:20px">Messages</button></a>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!--  The code below is in JQuery. This tells the carousel to cycle through the pictures  -->
<!-- <script type="text/javascript">
$(document).ready(function(){
	// Initializes the carousel
    $(".start-slide").click(function(){
    	$("#myCarousel").carousel('cycle');
    });
	// Stops the carousel
    $(".pause-slide").click(function(){
    	$("#myCarousel").carousel('pause');
    });
	// Cycles to the previous item
    $(".prev-slide").click(function(){
    	$("#myCarousel").carousel('prev');
    });
	// Cycles to the next item
    $(".next-slide").click(function(){
    	$("#myCarousel").carousel('next');
    });
	// Cycles the carousel to a particular frame 
    $(".slide-one").click(function(){
    	$("#myCarousel").carousel(0);
    });
    $(".slide-two").click(function(){
    	$("#myCarousel").carousel(1);
    });
    $(".slide-three").click(function(){
    	$("#myCarousel").carousel(2);
    });
});
</script>
</style>
</head>
<body>
<! --<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
        <!-- Wrapper for carousel items -->
       <!-- <div class="carousel-inner">
            <div class="active item">
                <img src="images/bootstrap_logo.png" alt="First Slide">
         		<div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="images/jquery_large.png" alt="Second Slide">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="images/php.png" alt="Third Slide">
                <div class="carousel-caption">
                </div>
            </div>
			<div class="item">
                <img src="images/HTML5_Logo.png" alt="Fourth Slide">
                <div class="carousel-caption">
                </div>
            </div>
			<div class="item">
                <img src="images/css3.png" alt="Fifth Slide">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel controls buttons -->
  <!--  <div class="control-buttons">
        <input type="button" class="btn btn-info start-slide" value="Start">
        <input type="button" class="btn btn-info pause-slide" value="Pause">
        <input type="button" class="btn btn-info prev-slide" value="Previous Slide">
        <input type="button" class="btn btn-info next-slide" value="Next Slide">
        <!-- <input type="button" class="btn btn-info slide-one" value="Slide 1">
       <!-- <input type="button" class="btn btn-info slide-two" value="Slide 2">            
        <input type="button" class="btn btn-info slide-three" value="Slide 3">  
		<input type="button" class="btn btn-info slide-four" value="Slide 4">  
		<input type="button" class="btn btn-info slide-five" value="Slide 5">  -->
  <!--  </div>
</div>
</body> -->
</html> 

		
</body>

</html>
