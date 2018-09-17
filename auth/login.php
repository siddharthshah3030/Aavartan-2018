<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <?php include '../meta.php' ;
      error_reporting(E_ERROR | E_PARSE);
      ?>
      <link rel="stylesheet" type="text/css" href="css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="css/demo.css" />
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      <link rel="stylesheet" type="text/css" href="css/star.css" />
      <link rel="stylesheet" type="text/css" href="css/custom.css" />
      <link rel="stylesheet" type="text/css" href="css/background.css">
      <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
      <script src="js/modernizr.custom.25376.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <style>
         .button {
         width: 110px;
         padding-top: 5px;
         padding-bottom: 5px;
         text-align: center;
         color: #000;
         text-transform: uppercase;
         font-weight: 60;
         margin-top:8px;
         margin-left: 30px;
         margin-bottom: 30px;
         cursor: pointer;
         display: inline-block;
         }
         .button-1 {
         background-color: transparent;
         border: 3px solid #00d7c3;
         border-radius: 50px;
         -webkit-transition: all .15s ease-in-out;
         transition: all .15s ease-in-out;
         color: #00d7c3;
         }
         .button-1:hover {
         box-shadow: 0 0 10px 0 #00d7c3 inset, 0 0 20px 2px #00d7c3;
         border: 3px solid #00d7c3;
         }
         #loginform {
         background-color:rgba(72,72,72,0.4);
         padding-left:15px;
         padding-right:35px;
         padding-top:35px;
         padding-bottom:50px;
         width: 450px;
         float: left;
         left: 50%;
         position: absolute;
         margin-top:30px;
         margin-left: -210px;
         -moz-border-radius: 7px;
         -webkit-border-radius: 7px;
         }
         input {
         color:#3c3c3c;
         font-family: Helvetica, Arial, sans-serif;
         font-weight:500;
         font-size: 18px;
         border-radius: 0;
         line-height: 22px;
         background-color: #fbfbfb;
         padding: 13px 13px 13px 54px;
         margin-bottom: 10px;
         width:100%;
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         -ms-box-sizing: border-box;
         box-sizing: border-box;
         border: 3px solid rgba(0,0,0,0);
         }
         #loginform{
         background: url("https://media.giphy.com/media/KVZWZQoS0yqfIiTAKq/giphy.gif");
         background-attachment: fixed;
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
         }
         form label{
         color:WHITE;
         text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;
         }
         .form-group a{
         color: aqua;
         }
         .form-group a:hover{
         color: mediumvioletred;
         }
      </style>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   <body style="background: black;" class="particletext confetti">
      <div class="w3-row">
         <div id="perspective" class="perspective effect-laydown">
            <div class="container" style="background:black;">
               <div class="wrapper"  >
                  <!-- wrapper needed for scroll -->
                  <div id="menunavbar" style="margin-bottom:1vw;position:sticky;top:0px;width:100%;background-image: url('test.gif'); height: 100%;   background-position: center;background-repeat: no-repeat;background-size: cover;" >
                     <button id="showMenu" class="button button-1" style="display: inline-block;float:right;background:black;color:white;text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #ff00de , 0 0 70px #ff00de , 0 0 80px #ff00de , 0 0 100px #ff00de ;">Menu</button>
                     <img src="images/Aavartan.png" height="70vw" width="auto" style="display: inline-block;">
                     <h2 style="color: white; text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;">
                     <span></span>Login Portal</h1>
                     <br>
                  </div>
                  <br>
                  <br>
                  <br>
                  <center>
                     <form id="loginform" method="POST"  class="col-lg-offset-3 col-lg-6">
                        <div id="loginmessage"></div>
                        <div class="form-group">
                           <label for="loginemail">Email</label>
                           <input type="email" class="form-control" id="loginemail" name="loginemail" required>
                        </div>
                        <br>
                        <div class="form-group">
                           <label for="loginpassword">Enter Password</label>
                           <input type="password" class="form-control" id="loginpassword" name="loginpassword" required>
                        </div>
                        <div class="form-group">
                           <br>
                           <button type="submit" class="btn btn-success btn-lg" style="float: left;">Login</button>
                           <a  href="forgotpassword.php" style="float: right;padding-top: 6px;">Forgot Password</a>
                        </div>
                     </form>
                  </center>
               </div>
               <!-- wrapper -->
            </div>
            <!-- /container -->
            <a id="menuclose" href="#" ><span class="close">&times;</span></a>
            <?php include '../header.php' ?>
         </div>
         <!-- /perspective -->
      </div>
      <script src="js/classie.js"></script>
      <script src="js/menu.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/auth.js"></script>
   </body>
</html>