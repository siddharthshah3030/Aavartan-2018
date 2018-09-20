<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <?php include '../meta.php' ?>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/star.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <link rel="stylesheet" type="text/css" href="css/background.css">
    <link rel="stylesheet" type="text/css" href="css/sponsor/demo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script>document.documentElement.className = 'js';</script>
    <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
    <script src="js/modernizr.custom.25376.js"></script>   
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
            <script src="https://use.fontawesome.com/dbb72ac4f9.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
      .buttonxyz {
      width: 110px;
      padding-top: 5px;
      padding-bottom: 5px;
      text-align: center;
      color: #000;
      text-transform: uppercase;
      font-weight: 90;
      margin-top:8px;
      margin-left: 30px;
      margin-bottom: 30px;
      cursor: pointer;
      display: inline-block;
      }
      .buttonxyz-1{
      background-color: transparent;
      border: 3px solid #00d7c3;
      border-radius: 50px;
      -webkit-transition: all .15s ease-in-out;
      transition: all .15s ease-in-out;
      color: #00d7c3;
      }
      .buttonxyz-1:hover {
      box-shadow: 0 0 10px 0 #00d7c3 inset, 0 0 20px 2px #00d7c3;
      border: 3px solid #00d7c3;
      }
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
  width:50%;
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
  width: 50%;
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
  </head>

  <body style="background: black;font-family:Helvetica Neue,Helvetica,Arial,sans-serif" class="particletext confetti">
    <div class="w3-row">
      <div id="perspective" class="perspective effect-laydown">
        <div class="container" style="background:black;">
          <div class="wrapper"  >
            <!-- <div id="particles-js"></div> -->
            <!-- wrapper needed for scroll -->
            <div id="menunavbar" style="margin-bottom:1vw;position:sticky;top:0px;width:100%;" >
              <button id="showMenu" class="buttonxyz buttonxyz-1" style="display: inline-block;float:right;background:black;color:white">Menu</button>
              <img src="images/Aavartan.png" height="70vw" width="auto" style="display: inline-block;">
              <br>
              <br>
            </div>
            <h2 style="color: white; text-shadow: 0 0 10px rgba(255,255,255,0) , 0 0 20px rgba(255,255,255,0) , 0 0 30px rgba(255,255,255,0) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;
              "><span></span> Reach Out to Our Team </h2>
            <br><br><br>
            <center>
             <form method="POST" action="form_action.php">      

  <input name="name" type="text" id="name" class="feedback-input" placeholder="Name" required />   
  <input name="email" type="text" id="e mail" class="feedback-input" placeholder="Email" required/>
  <textarea name="message" class="feedback-input" id="message" placeholder="Comment" required></textarea>
  <input type="submit" value="SUBMIT"/>
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
    <?php include 'form_action.php';?>
    <script src="js/classie.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/custom.js"></script>
    <script  src="js/contactumain.js"></script>
  </body>
</html>
