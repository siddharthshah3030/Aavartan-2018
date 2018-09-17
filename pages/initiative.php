<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <?php include '../meta.php' ?>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/star.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <link rel="stylesheet" type="text/css" href="css/background.css">
    <link rel="stylesheet" type="text/css" href="initiative.css">
    <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
    <script src="js/modernizr.custom.25376.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
      div {
      font-family: 'Raleway', sans-serif;
      }
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
    </style>
  </head>
  <body style="background: black;font-family:Helvetica Neue,Helvetica,Arial,sans-serif" class="particletext confetti">
    <div class="w3-row">
      <div id="perspective" class="perspective effect-laydown">
        <div class="container" style="background:black;">
          <div class="wrapper"  >
            <!-- wrapper needed for scroll -->
            <div id="menunavbar" style="margin-bottom:1vw;position:sticky;top:0px;width:100%;" >
              <button id="showMenu" class="buttonxyz buttonxyz-1" style="display: inline-block;float:right;background:black;color:white">Menu</button>
              <img src="images/Aavartan.png" height="70vw" width="auto" style="display: inline-block;">
              <h2 style="color: white; text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;
                ">
              <span></span>Initiatives</h1>
              <br>
              <br>
              <div class="con">
                <div class="sub_con">
                  <div style="background:rgba(255,100,0, 0.3);padding-left:3%;padding-top:3%;padding-bottom:3%;padding-right:3%;opacity:0.5;">
                    <div class="topic">Vision</div>
                    <div class="content">The vision of our Digital India Initiative is to help people get aware technologically and to use information technology to revolutionize public services
                      .Our vision has been taken from the Digital India Programme launched by the Government of India which is for transforming India into a digitally empowered society and knowledge economy.
                    </div>
                  </div>
                  <br>
                  <div style="background:rgba(255,0,0, 0.3);padding-left:3%;padding-top:3%;padding-bottom:3%;padding-right:3%;opacity:0.5;">
                    <div class="topic">How can we contribute? </div>
                    <div class="content">
                      <p class="design">
                        &#9679 Guest Lectures <br>
                        &#9679  Competitions <br>
                        &#9679  Awareness Drives <br>
                        &#9679  Hackathons <br>
                        &#9679  Cashless Transactions <br>
                        &#9679  Digital Services <br>
                      </p>
                    </div>
                  </div>
                  <br>
                  <div style="background:rgba(255,100,0, 0.3);padding-left:3%;padding-top:3%;padding-bottom:3%;padding-right:3%;opacity:0.5;">
                    <div class="topic">About Digital India Initiative: </div>
                    <div class="content">Digital India Initiative was launched by our Honorable Prime Minister Mr. Narendra Modi on July 1,2015.The initiative includes plans to connect rural areas with high speed internet networks .From this our team ,The Technocracy has taken a step to help spread Digital literacy and digital delivery of services in the country where the government is trying its best to create Digital infrastructure.</div>
                  </div>
                </div>
                <div style="padding-left:2%;padding-top:2%;"><img src="digital.jpg"></div>
              </div>
            </div>
            <br><br><br>
          </div>
          <!-- wrapper -->
        </div>
        <!-- /container -->
        <a id="menuclose" href="#" ><span class="close">&times;</span></a>
        <?php include '../header.php' ?>
      </div>
      <!-- /perspective -->
    </div>
    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="js/classie.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>