<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <?php include '../meta.php';
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
         body{
         overflow-y:scroll;
         color:white;
         }
         #signupform {
         background-color:rgba(72,72,72,0.4);
         padding-left:25px;
         padding-right:52px;
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
         #signupform{

         background-attachment: fixed;
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
         }
         select,input {
           padding-left: 5%;
           padding-right:5%;
         color:black;
         font-family: Helvetica, Arial, sans-serif;
         font-weight:500;
         font-size: 18px;
         border-radius: 0;
         line-height: 22px;
         background-color: white;
         padding: 10px 10px ;
         margin-bottom: 10px;
         margin-right:10%;
         width:100%;
         color:black;
         border: 3px solid rgba(0,0,0,0);
         }
         form label{
         color:WHITE;
         text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;
         }
         .form-group p a{
         color: aqua;
         }
         .form-group p a:hover{
         color: mediumvioletred;
         }
      </style>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   <body style="background: black;" class="particletext confetti">

         <div id="perspective" class="perspective effect-laydown">
            <div class="container" style="background:black;">
               <div class="wrapper"  >
                  <!-- wrapper needed for scroll -->
                  <div id="menunavbar" style="margin-bottom:1vw;position:sticky;top:0px;width:100%;background-image: url('test.gif'); height: 100%;   background-position: center;background-repeat: no-repeat;background-size: cover;" >
                     <button id="showMenu" class="button button-1" style="display: inline-block;float:right;background:black;color:white;text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #ff00de , 0 0 70px #ff00de , 0 0 80px #ff00de , 0 0 100px #ff00de ;">Menu</button>
                     <img src="images/Aavartan.png" height="70vw" width="auto" style="display: inline-block;">
                     <h2 style="color: white; text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;">
                     <span></span>Registration Portal</h1>
                     <br>
                  </div>
                  <br>
                  <br>
                  <br>
                  <center>
                     <form id="signupform" method="POST"  class="col-sm-offset-3 col-sm-6">
                        <!--Sign up message from PHP file-->
                        <div id="signupmessage"></div>
                        <div class="form-group">
                           <label for="name" >Name</label>
                           <input type="text" class="form-control" id="name" name="name" autofocus required>
                        </div>
                        <div class="form-group">
                           <label for="contact">Contact Number</label>
                           <input type="number" class="form-control" id="contact" name="contact" minlength="10" maxlength="10" required>
                        </div>
                        <div class="form-group">
                           <label for="branch">Branch</label>
                           <input type="text" class="form-control" id="branch" name="branch" required>
                        </div>
                        <div class="form-group">
                           <label for="course">Course/Degree</label>
                           <input type="text" class="form-control" id="course" name="course" required>
                        </div>
                        <div class="form-group">
                           <label for="semester">Semester</label>
                           <!--<input type="number" class="form-control" id="semester" name="semester" min="1" max="10" required>-->
                           <select class="form-control" id="semester" name="semester" required>
                              <option value="1st">1st</option>
                              <option value="2nd">2nd</option>
                              <option value="3rd">3rd</option>
                              <option value="4th">4th</option>
                              <option value="5th">5th</option>
                              <option value="6th">6th</option>
                              <option value="7th">7th</option>
                              <option value="8th">8th</option>
                              <option value="9th">9th</option>
                              <option value="10th">10th</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="college">College/University</label>
                           <input type="text" class="form-control" id="college" name="college" required>
                        </div>
                        <div class="form-group">
                           <label for="email">Email</label>
                           <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                           <label for="password1">Create Password</label>
                           <input type="password" class="form-control" id="password1" name="password1" required>
                        </div>
                        <div class="form-group">
                           <label for="password2">Re-enter Password</label>
                           <input type="password" class="form-control" id="password2" name="password2" required>
                        </div>
                        <br>
                        <div class="form-group">
                           <button type="submit" class="btn btn-lg btn-success" style="float:left;">Sign up</button>
                           <p style="float:right;margin-right:4%;">Already Registered?<a href="login.php">login</a></p>
                        </div>
                     </form>
                  </center>
               </div>
               <!-- wrapper -->
            </div>
            <!-- /container -->
            <a id="menuclose" href="#" ><span class="close">&times;</span></a>
         <?php include '../header.php'; ?>
         </div>
         <!-- /perspective -->
      </div>
      <script src="js/classie.js"></script>
      <script src="js/menu.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/auth.js"></script>
   </body>
</html>
