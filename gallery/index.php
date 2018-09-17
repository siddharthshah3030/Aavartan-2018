<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <?php include '../meta.php' ?>
      <link rel="shortcut icon" href="../favicon.ico">
      <link rel="stylesheet" type="text/css" href="css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      <link rel="stylesheet" type="text/css" href="css/star.css" />
      <link rel="stylesheet" type="text/css" href="css/menucustom.css" />
      <link rel="stylesheet" type="text/css" href="css/background.css">
      <link rel="stylesheet" type="text/css" href="css/base.css" />
      <link rel="stylesheet" type="text/css" href="css/custom.css" />
      <link rel="stylesheet" type="text/css" href="css/grid.css" />
      <link rel="stylesheet" type="text/css" href="css/slider.css">
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
      </style>
      <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
      <script src="js/modernizr.custom.25376.js"></script>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   <body style="background: black;" class="particletext confetti demo-1">
      <div class="w3-row">
         <div id="perspective" class="perspective effect-laydown">
            <div class="container" style="background:black;">
               <div class="wrapper"  >
                  <!-- wrapper needed for scroll -->
                  <div id="menunavbar" style="position:sticky;top:0px;width:100%;background-image: url('test.gif'); height: 100%;   background-position: center;background-repeat: no-repeat;background-size: cover;" >
                     <button id="showMenu" class="button button-1" style="display: inline-block;float:right;background:black;color:white;text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #ff00de , 0 0 70px #ff00de , 0 0 80px #ff00de , 0 0 100px #ff00de ;">Menu</button>
                     <img src="images/Aavartan.png" height="50px" width="160px" style="display: inline-block;">
                    
                     <br>
                     <br>
                  </div>
                   <center><h2 style="text-align:center;color: white; text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;">
                    Gallery</h2></center>
                  <!-- <div id="particles-js"></div> -->
                  <main>
                     <div class="content">
                        <!-- Pieces Slider -->
                        <div class="pieces-slider">
                           <!-- Each slide with corresponding image and text -->
                           <div class="pieces-slider__slide">
                              <img class="pieces-slider__image" data-echo="img/1.jpg" src="img/1.jpg" alt="">
                              <h2 class="pieces-slider__text">let's begin</h2>
                           </div>
                           <div class="pieces-slider__slide">
                              <img class="pieces-slider__image" data-echo="img/2.jpg" src="img/2.jpg" alt="">
                              <h2 class="pieces-slider__text">i can jump </h2>
                           </div>
                           <div class="pieces-slider__slide">
                              <img class="pieces-slider__image" data-echo="img/3.jpg" src="img/3.jpg" alt="">
                              <h2 class="pieces-slider__text">nighiteeee</h2>
                           </div>
                           <div class="pieces-slider__slide">
                              <img class="pieces-slider__image" data-echo="img/4.jpg" src="img/4.jpg" alt="">
                              <h2 class="pieces-slider__text">let's shout</h2>
                           </div>
                           <div class="pieces-slider__slide">
                              <img class="pieces-slider__image" data-echo="img/5.jpg" src="img/5.jpg" alt="">
                              <h2 class="pieces-slider__text">laser show glimpse</h2>
                           </div>
                           <div class="pieces-slider__slide">
                              <img class="pieces-slider__image" data-echo="img/6.jpg" src="img/6.jpg" alt="">
                              <h2 class="pieces-slider__text">robot</h2>
                           </div>
                           <div class="pieces-slider__slide">
                              <img class="pieces-slider__image" data-echo="img/7.jpg" src="img/7.jpg" alt="">
                              <h2 class="pieces-slider__text">Fun Fun Run</h2>
                           </div>
                           <div class="pieces-slider__slide">
                              <img class="pieces-slider__image" data-echo="img/8.jpg" src="img/8.jpg" alt="">
                              <h2 class="pieces-slider__text">NFS fever ahead</h2>
                           </div>
                           <!-- Canvas to draw the pieces -->
                           <canvas class="pieces-slider__canvas"></canvas>
                           <!-- Slider buttons: prev and next -->
                           <button class="pieces-slider__button pieces-slider__button--prev">prev</button>
                           <button class="pieces-slider__button pieces-slider__button--next">next</button>
                           <button id="changerButton" class=" pieces-slider__button--change">change</button>
                        </div>
                     </div>
                  </main>
                  <ul id="rig">
                     <li onClick=getIndex(this) value=1>
                        <a class="rig-cell" >
                        <img class="rig-img"  data-echo="img/1.jpg" src="img/1.jpg">
                        <span class="rig-overlay"></span>
                        <span class="rig-text">let us bigin</span>
                        </a>
                     </li>
                     <li onClick=getIndex(this) value=2>
                        <a class="rig-cell" >
                        <img class="rig-img" data-echo="img/2.jpg" src="img/2.jpg">
                        <span class="rig-overlay"></span>
                        <span class="rig-text">i can jump</span>
                        </a>
                     </li>
                     <li onClick=getIndex(this) value=3>
                        <a class="rig-cell" >
                        <img class="rig-img"  data-echo="img/3.jpg" src="img/3.jpg">
                        <span class="rig-overlay"></span>
                        <span class="rig-text">wowwweeeeee</span>
                        </a>
                     </li>
                     <li onClick=getIndex(this) value=4>
                        <a class="rig-cell" >
                        <img class="rig-img"   data-echo="img/4.jpg" src="img/4.jpg">
                        <span class="rig-overlay"></span>
                        <span class="rig-text">let us al shout</span>
                        </a>
                     </li>
                     <li onClick=getIndex(this) value=5 >
                        <a class="rig-cell" >
                        <img class="rig-img"  data-echo="img/5.jpg" src="img/5.jpg">
                        <span class="rig-overlay"></span>
                        <span class="rig-text">hii everyone</span>
                        </a>
                     </li>
                     <li onClick=getIndex(this) value=6>
                        <a class="rig-cell" >
                        <img class="rig-img"  data-echo="img/6.jpg" src="img/6.jpg">
                        <span class="rig-overlay"></span>
                        <span class="rig-text">amazin caption here</span>
                        </a>
                     </li>
                     <li onClick=getIndex(this) value=7>
                        <a class="rig-cell" >
                        <img class="rig-img"  data-echo="img/7.jpg" src="img/7.jpg">
                        <span class="rig-overlay"></span>
                        <span class="rig-text">amazin caption here</span>
                        </a>
                     </li>
                     <li onClick=getIndex(this) value=8>
                        <a class="rig-cell" >
                        <img class="rig-img"  data-echo="img/8.jpg" src="img/8.jpg">
                        <span class="rig-overlay"></span>
                        <span class="rig-text">amazin caption here</span>
                        </a>
                     </li>
                     <aside></aside>
                  </ul>
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
      <!-- <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> -->
      <script src="js/classie.js"></script>
      <script src="js/menu.js"></script>
      <!-- <script src="js/particle.js"></script> -->
      <!-- <script src="js/particleapp.js"></script> -->
      <script src="js/custom.js"></script>
      <script  src="js/index.js"></script>
      <script src='js/anime.min.js'></script>
      <script src='js/pieces.min.js'></script>
      <script src='js/demo.js'></script>
      <!-- <img src="35.gif" alt="Photo" data-echo="img/5.jpg"> -->
      <script src="js/echo.js"></script>
      <script src="js/change.js"></script>
   </body>
</html>