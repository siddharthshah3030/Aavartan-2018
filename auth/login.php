<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <?php include '../meta.php' ;
      session_start();
      error_reporting(E_ERROR | E_PARSE);
      if (isset($_SESSION['id']))
   {
       header("location: dashboard.php");
    }
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
     form { max-width:420px; margin:50px auto; }

.feedback-input {
  color:white;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:90%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 90%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover { background:#CC4949; }
      </style>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   <body style="background: #291B2C;" class="particletext confetti">
      <div class="w3-row">
         <div id="perspective"  style="background:#black;" class="perspective effect-laydown">
            <div class="container" style="background:black;">
               <div class="wrapper"  >
                  <!-- wrapper needed for scroll -->
                  <div id="menunavbar" style="margin-bottom:1vw;position:sticky;top:0px;width:100%;background-image: url('test.gif'); height: 100%;   background-position: center;background-repeat: no-repeat;background-size: cover;" >
                     <button id="showMenu" class="button button-1" style="display: inline-block;float:right;background:black;color:white;text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #ff00de , 0 0 70px #ff00de , 0 0 80px #ff00de , 0 0 100px #ff00de ;">Menu</button>
                     <img src="images/Aavartan.png" height="50vw"  width="160px" style="display: inline-block;">
                    
                     <br>
                  </div>
                  <br>
                  <br>
                  <br>
                  <center>
                      <h2 style="color: white; text-shadow: 0 0 10px rgba(255,255,255,0) , 0 0 20px rgba(255,255,255,0) , 0 0 30px rgba(255,255,255,0) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;">
                     <span></span>Login Portal</h1>
                     <form id="loginform" method="POST" action="loginsubmit.php" >      

  <input name="email" id="email" type="text" class="feedback-input" placeholder="Email" required />
  <input name="password" id="password" type="password" class="feedback-input" placeholder="Password" required />
 <a  href="forgotpassword.php" style="float: right;padding-bottom:4%;margin-right:40px;color:white;">Forgot Password</a>
 <br>
  <input type="submit" value="SUBMIT"/>
   <br>
  <br>
  <br>
  <br>
  <br>
  <br>
   <br>
  <br>
  <br>
  <br>
  <br>
  <br>
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
