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
      input,textarea {
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
      textarea {
      width: 100%;
      height: 150px;
      line-height: 150%;
      }
      #button-blue{
      text-align: center;
      font-family: 'Montserrat', Helvetica, Arial,  sans-serif;
      float:left;
      width: 100%;
      border: #fbfbfb solid 4px;
      cursor:pointer;
      background-color: #3498db;
      color:white;
      font-size:24px;
      padding-top:22px;
      padding-bottom:22px;
      -webkit-transition: all 0.3s;
      -moz-transition: all 0.3s;
      transition: all 0.3s;
      }
      #button-blue:hover{
      background-color: rgba(0,0,0,0);
      color: #0493bd;
      }
      .submit:hover {
      color: #3498db;
      }
      .ease {
      border-top:3px #3c3c3c solid;
      width: 0px;
      height: 76px;
      background-color: #fbfbfb;
      -webkit-transition: .3s ease;
      -moz-transition: .3s ease;
      -o-transition: .3s ease;
      -ms-transition: .3s ease;
      transition: .3s ease;
      }
      .submit:hover .ease{
      width:100%;
      background-color:white;
      }
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
            <h2 style="color: white; text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;
              "><span></span> Reach Out to Our Team </h2>
            <br><br><br>
            <center>
              <form id="loginform" method="POST" action="form_action.php" class="col-lg-offset-3 col-lg-6">
                <div id="loginmessage"></div>
                <p class="name">
                  <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" value="<?= $name ?>" />
                </p>
                <p class="email">
                  <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" value="<?= $email ?>" placeholder="Email" />
                </p>
                <p class="message">
                  <textarea name="message"  id="message" value="<?= $message ?>" placeholder="message"></textarea>
                </p>
                <div class="submit">
                  <input type="submit" value="SEND" id="button-blue" style="text-align:center;padding-left:5%;"/>
                  <div class="ease"></div>
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
    <?php include 'form_action.php';?>
    <script src="js/classie.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/custom.js"></script>
    <script  src="js/index.js"></script>
    <script  src="js/contactumain.js"></script>
  </body>
</html>
