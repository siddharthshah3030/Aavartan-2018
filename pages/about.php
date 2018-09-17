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
    <link rel="stylesheet" type="text/css" href="initiative.css">
    <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
    <script src="js/modernizr.custom.25376.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
      section {
      font-size: 35px;
      text-align: center;
      color: white;
      font-weight: bold;
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
              <h2 style="color: white; text-shadow: 0 0 10px rgba(255,255,255,0) , 0 0 20px rgba(255,255,255,0) , 0 0 30px rgba(255,255,255,0) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;
                ">
              <span></span>About Us</h1>
              <br>
              <br>
              <div class="con" id="fullpage">
                <div class="sub_con" >
                  <section style="background:rgba(255,100,100, 0.3);padding-left:3%;padding-top:3%;padding-bottom:3%;padding-right:3%;opacity:0.5;" >
                    <div class="topic" >Who are we?</div>
                    <div class="content" class="wow fadeInLeft">Started in 2007 with the aim of inspiring technology, innovation and scientific thinking, AAVARTAN is now accepted as Central India’s Largest Science and Technological fest with a footfall of more than 10,000 yearly and a reach of over 150+ Indian Colleges.</div>
                  </section>
                  <br>
                  <section style="background:rgba(255,100,0, 0.3);padding-left:3%;padding-top:3%;padding-bottom:3%;padding-right:3%;opacity:0.5;">
                    <div class="topic">How is AAVARTAN put up? </div>
                    <div class="content" class="wow fadeInRight">
                      <p class="design">
                        Complete planning and execution of AAVARTAN is done by the students of NIT Raipur in a three- layer team structure. The core managerial team is of 16 members with 2 Overall Coordinators guiding 16 Head Coordinators. We greatly rely upon the perception of “Together everyone achieves more”. Every success and failure is shared equally by all of us. Although every facet of AAVARTAN is no dear to one coordinator than the other but for proper functioning, certain assortments are made within the team.
                        The assortments can be broadly categorised into six sections. Each domain is specialised in its own task. The various groups are Media and Marketing, Publicity, Web and App, Events, Creatives and Design. They collaboratively take care of the various happenings and initiatives of AAVARTAN. A team of over 200 Coordinators and volunteers work in synchronization to execute and implement the marvellous spectacle called AAVARTAN.
                    </div>
                  </section>
                  <br>
                  <section style="background:rgba(255,100,100, 0.3);padding-left:3%;padding-top:3%;padding-bottom:3%;padding-right:3%;opacity:0.5;">
                    <div class="topic" >Why come to AAVARTAN?</div>
                    <div class="content" class="wow fadeInLeft">
                      In its attempt to provide a national platform for the youth to showcase their talents and skills in aggressive competitions, displaying latest technology and having renowned personalities motivate the youth and providing solutions to various significant problems, AAVARTAN endeavours for one and all to get inspired and look up to.
                    </div>
                  </section>
                </div>
                <div></div>
              </div>
              <script type="text/javascript">
                $(document).ready(function() {
                    
                    //activate wow.js
                     new WOW().init();
                  
                    //activate fullpage.js
                    $('#fullpage').fullpage({
                      scrollBar: true,
                
                      loopBottom: true,
                      sectionSelector: 'section'
                    });
                  
                  //apply color to each section from array
                  int = -1;
                  color_array = ['#1abc9c','#c0392b','#9b59b6','#3498db','#f1c40f','#16a085'];
                
                  $('section').each(function(){
                    int++
                    $(this).addClass('grid-item-' + int).css('background-color', color_array[int]);
                  });
                  
                });
              </script>
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
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>