<!DOCTYPE html>
<?php
include('connection.php');
session_start();
$id = $_SESSION['id'];
$sql = "SELECT * FROM registered_events WHERE id='$id'";
    $result = mysqli_query($link, $sql);
    if($result){
        $data = "";
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        for($i=1;$i<=sizeOf($row);$i++)
        {
        $data.=$row[$i];
        }
        echo '<div id="eventdata">'.$data.'</div>';
    }
    else{
        echo '<div class="alert alert-danger">Error running the query!</div>';
        exit;
    }
?>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Aavartan18</title>
		<meta name="description" content="Perspective Page View Navigation: Transforms the page in 3D to reveal a menu" />
		<meta name="keywords" content="3d page, menu, navigation, mobile, perspective, css transform, web development, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/loader.css">


		<!-- loader begins -->
		<div id = "loaderbody">

		<div  class="body">
	<span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</span>
	<div class="base">
		<span></span>
		<div class="face"></div>
	</div>
</div>
<div class="longfazers">
	<span></span>
	<span></span>
	<span></span>
	<span></span>
</div>
<h2>Brace Yourselves</h2>
</br>
<h1>Reaching Aavartan18</h1>
</div>

<link rel="stylesheet" type="text/css" href="css/normalize.css" />

		<link rel="stylesheet" type="text/css" href="css/menudemo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/star.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<link rel="stylesheet" type="text/css" href="css/background.css">
		<link rel="stylesheet" type="text/css" href="css/eventnormalize.css" />
		<link rel="stylesheet" type="text/css" href="css/eventdemo.css" />
		<link rel="stylesheet" type="text/css" href="css/lightbox.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/checkbox.css">
		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
		<script src="js/modernizr.custom.25376.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	</head>
	<body style="background: black;" class="particletext confetti">
        <?php
include('connection.php');
session_start();
$id = $_SESSION['id'];
$sql = "SELECT * FROM registered_events WHERE id='$id'";
    $result = mysqli_query($link, $sql);
    if($result){
        $data = "";
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        for($i=1;$i<=sizeOf($row);$i++)
        {
        $data.=$row[$i];
        }
        echo '<div id="eventdata">'.$data.'</div>';
    }
    else{
        echo '<div class="alert alert-danger">Error running the query!</div>';
        exit;
    }
?>





		<div class="w3-row">
		<div id="perspective" class="perspective effect-laydown">
			<div class="container" style="background:black;">
				<div class="wrapper"  >
<!-- wrapper needed for scroll -->
				<div id="menunavbar" style="margin-bottom:1vw;position:sticky;top:0px;width:100%;background-image: url('test.gif'); height: auto;   background-position: center;background-repeat: no-repeat;background-size: cover;" >
					 <button id="showMenu" style="display: inline-block;float:right;background:black;color:white;text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #ff00de , 0 0 70px #ff00de , 0 0 80px #ff00de , 0 0 100px #ff00de ;">Menu</button>
					 <img src="images/Aavartan.png" height="70vw" width="auto" style="display: inline-block;">
					 <h2 style="color: white; text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;"><span></span>Events</h1>
<br>
<br>
	             </div>
	<div id="particles-js">
</div>
	<div class="container">
<section id="main" class="main">


	<div class="pb-wrapper pb-wrapper-1">
		<h3 class="pb-title">Technical</h3>

		<div class="pb-scroll">
			<ul class="pb-strip">
				<li><a href="images/large/1.jpg" rel="lightbox[album1]" title="event1"><img src="images/small/1.jpg" /></a></li>
				<li><a href="images/large/2.jpg" rel="lightbox[album1]" title="eventname"><img src="images/small/2.jpg" /></a></li>
				<li><a href="images/large/3.jpg" rel="lightbox[album1]" title="namehere"><img src="images/small/3.jpg" /></a></li>
				<li><a href="images/large/4.jpg" rel="lightbox[album1]" title="name of event is here "><img src="images/small/4.jpg" /></a></li>
				<li><a href="images/large/5.jpg" rel="lightbox[album1]" title="Softness"><img src="images/small/5.jpg" /></a></li>
				<li><a href="images/large/6.jpg" rel="lightbox[album1]" title="Bliss"><img src="images/small/6.jpg" /></a></li>
				<li><a href="images/large/7.jpg" rel="lightbox[album1]" title="Adorable"><img src="images/small/7.jpg" /></a></li>
				<li><a href="images/large/8.jpg" rel="lightbox[album1]" title="Forever"><img src="images/small/8.jpg" /></a></li>
				<li><a href="images/large/9.jpg" rel="lightbox[album1]" title="Silence"><img src="images/small/9.jpg" /></a></li>
				<li><a href="images/large/10.jpg" rel="lightbox[album1]" title="Love"><img src="images/small/10.jpg" /></a></li>
			</ul>
		</div>
	</div>

	<div class="pb-wrapper pb-wrapper-2">
		<h3 class="pb-title">Managerial.</h3>

		<div class="pb-scroll">
			<ul class="pb-strip">
				<li><a href="images/large/11.jpg" rel="lightbox[album2]" title="Serenity"><img src="images/small/11.jpg" /></a></li>
				<li><a href="images/large/12.jpg" rel="lightbox[album2]" title="Color"><img src="images/small/12.jpg" /></a></li>
				<li><a href="images/large/13.jpg" rel="lightbox[album2]" title="Serendipity"><img src="images/small/13.jpg" /></a></li>
				<li><a href="images/large/14.jpg" rel="lightbox[album2]" title="Sunshine"><img src="images/small/14.jpg" /></a></li>
				<li><a href="images/large/15.jpg" rel="lightbox[album2]" title="Love"><img src="images/small/15.jpg" /></a></li>
				<li><a href="images/large/16.jpg" rel="lightbox[album2]" title="Friendship"><img src="images/small/16.jpg" /></a></li>
				<li><a href="images/large/17.jpg" rel="lightbox[album2]" title="Spring"><img src="images/small/17.jpg" /></a></li>
				<li><a href="images/large/18.jpg" rel="lightbox[album2]" title="Future"><img src="images/small/18.jpg" /></a></li>
				<li><a href="images/large/19.jpg" rel="lightbox[album2]" title="Summer"><img src="images/small/19.jpg" /></a></li>
				<li><a href="images/large/20.jpg" rel="lightbox[album2]" title="Lightness"><img src="images/small/20.jpg" /></a></li>
			</ul>
		</div>
	</div>

	<div class="pb-wrapper pb-wrapper-3">
		<h3 class="pb-title">Robotics</h3>

		<div class="pb-scroll">
			<ul class="pb-strip">
				<li><a href="images/large/20.jpg" rel="lightbox[album3]" title="Spring"><img src="images/small/20.jpg" /></a></li>
				<li><a href="images/large/10.jpg" rel="lightbox[album3]" title="Sunshine"><img src="images/small/10.jpg" /></a></li>
				<li><a href="images/large/9.jpg" rel="lightbox[album3]" title="Summer"><img src="images/small/9.jpg" /></a></li>
				<li><a href="images/large/19.jpg" rel="lightbox[album3]" title="Delicious"><img src="images/small/19.jpg" /></a></li>
				<li><a href="images/large/8.jpg" rel="lightbox[album3]" title="Softness"><img src="images/small/8.jpg" /></a></li>
				<li><a href="images/large/18.jpg" rel="lightbox[album3]" title="Bliss"><img src="images/small/18.jpg" /></a></li>
				<li><a href="images/large/4.jpg" rel="lightbox[album3]" title="Adorable"><img src="images/small/4.jpg" /></a></li>
				<li><a href="images/large/6.jpg" rel="lightbox[album3]" title="Forever"><img src="images/small/6.jpg" /></a></li>
				<li><a href="images/large/7.jpg" rel="lightbox[album3]" title="Silence"><img src="images/small/7.jpg" /></a></li>
				<li><a href="images/large/11.jpg" rel="lightbox[album3]" title="Love"><img src="images/small/11.jpg" /></a></li>
			</ul>
		</div>
	</div>

	<div class="pb-wrapper pb-wrapper-4">
		<h3 class="pb-title">Fun events</h3>
		<div class="pb-scroll">
			<ul class="pb-strip">
				<li><a href="images/large/18.jpg" rel="lightbox[album4]" title="Spring"><img src="images/small/18.jpg" /></a></li>
				<li><a href="images/large/16.jpg" rel="lightbox[album4]" title="Sunshine"><img src="images/small/16.jpg" /></a></li>
				<li><a href="images/large/8.jpg" rel="lightbox[album4]" title="Summer"><img src="images/small/8.jpg" /></a></li>
				<li><a href="images/large/18.jpg" rel="lightbox[album4]" title="Delicious"><img src="images/small/18.jpg" /></a></li>
				<li><a href="images/large/19.jpg" rel="lightbox[album4]" title="Softness"><img src="images/small/19.jpg" /></a></li>
				<li><a href="images/large/20.jpg" rel="lightbox[album4]" title="Bliss"><img src="images/small/20.jpg" /></a></li>
				<li><a href="images/large/1.jpg" rel="lightbox[album4]" title="Adorable"><img src="images/small/1.jpg" /></a></li>
				<li><a href="images/large/5.jpg" rel="lightbox[album4]" title="Forever"><img src="images/small/5.jpg" /></a></li>
				<li><a href="images/large/3.jpg" rel="lightbox[album4]" title="Silence"><img src="images/small/3.jpg" /></a></li>
				<li><a href="images/large/6.jpg" rel="lightbox[album4]" title="Love"><img src="images/small/6.jpg" /></a></li>
			</ul>
		</div>
	</div>

</section>
	</div>


    </div><!-- wrapper -->
    </div><!-- /container -->
			<a id="menuclose" href="#" ><span class="close">&times;</span></a>
			<nav class="outer-nav top horizontal" style="text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #ff00de , 0 0 70px #ff00de , 0 0 80px #ff00de , 0 0 100px #ff00de ;">
				<a href="#" class="icon-home">Home</a>
				<a href="#" class="icon-news">News</a>
				<a href="#" class="icon-image">Images</a>
				<a href="#" class="icon-upload">Uploads</a>
				<a href="#" class="icon-star">Favorites</a>
				<a href="#" class="icon-mail">Messages</a>
				<a href="#" class="icon-lock">Security</a>
			</nav>
		</div><!-- /perspective -->
	</div>
<!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/menu.js"></script>
		<!-- <script src="js/particle.js"></script> -->
		<!-- <script src="js/particleapp.js"></script> -->
		<script src="js/custom.js"></script>
		<script  src="js/index.js"></script>
		<script src="js/data.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="js/lightbox.js"></script>
		<script  src="js/loader.js"></script>

	</body>
</html>