<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
<?php include '../meta.php' ;
error_reporting(E_ERROR | E_PARSE);
?>
      <link rel="shortcut icon" href="../favicon.ico">
      <link rel="stylesheet" type="text/css" href="css/loader.css">
      <!-- loader begins -->
      <div id = "loaderbody">
         <div class="stars"></div>
<div class="twinkling"></div><!-- 
<div class="clouds"></div> -->
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
         <br/>
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
         </style>
   </head>
   <body style="background: #291B2C;" class="particletext confetti">
      <?php
         include('connection.php');
         session_start();
         if(isset($_SESSION['id'])){
         $id = $_SESSION['id'];
         $sql = "SELECT * FROM registered_events WHERE id='$id'";
             $result = mysqli_query($link, $sql);
             if($result){
                 $data = "";
                 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                 for($i=1;$i<sizeOf($row);$i++)
                 {
                 $data.=$row[$i];
                 $data.=' ';
                 }
                 echo '<div data-value="'.$data.'" id="eventdata"></div>';
             }
             else{
                 echo '<div class="alert alert-danger">Error running the query!</div>';
                 exit;
             }
         }
         else{
             echo '<div data-value="" id="eventdata"></div>';
         }
         ?>
      <div class="w3-row">
         <div id="perspective" class="perspective effect-laydown">
            <div class="container" style="background:black;">
               <div class="wrapper"   >
                  <!-- wrapper needed for scroll -->
                  <div id="menunavbar" style="margin-bottom:1vw;position:sticky;top:0px;width:100%;" >
              <button id="showMenu" class="buttonxyz buttonxyz-1" style="display: inline-block;float:right;background:black;color:white">Menu</button>
              <img src="images/Aavartan.png" height="50px" width="160px" style="display: inline-block;">
             
              <br>
              <br>
                     <h2 style="color: white; text-shadow: 0 0 10px rgba(255,255,255,0) , 0 0 20px rgba(255,255,255,0) , 0 0 30px rgba(255,255,255,0) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;">
                     <span></span>Events</h1>
                   
                  </div>
                    <br>
                     <br>

                  <div class="container" style="background:black;">

                                 <div class="stars"></div>
<div class="twinkling"></div>
                     <section id="main" class="main" style="z-index:9;" >

                        <div class="pb-wrapper pb-wrapper-1">
                           <h3 class="pb-title">Technical</h3>
                           <div class="pb-scroll">
                              <ul class="pb-strip">
                                 <li><a href="images/large/17.jpg" rel="lightbox[album1]" title="October Sky"><img  height="150px" width="160px" src="images/small/17.png" /></a></li>
                                 <li><a href="images/large/16.jpg" rel="lightbox[album1]" title="CAD-alyst"><img  height="150px" width="160px" src="images/small/16.png" /></a></li>
                                 <li><a href="images/large/6.jpg" rel="lightbox[album1]" title="Lan Gaming"><img height="150px" width="160px"  src="images/small/6.png" /></a></li>
                                 <li><a href="images/large/7.jpg" rel="lightbox[album1]" title="Sherlock Holmes"><img height="150px" width="160px"  src="images/small/7.png" /></a></li>
                                 <li><a href="images/large/5.jpg" rel="lightbox[album1]" title="Khet"><img  height="150px" width="160px"  height="150px" width="120px" src="images/small/5.png" /></a></li>
                                 <li><a href="images/large/12.jpg" rel="lightbox[album1]" title="MARVEL HUNT"><img height="150px" width="120px"  src="images/small/12.png" /></a></li>
                                 <li><a href="images/large/40.jpg" rel="lightbox[album1]" title="FOOT-TRONICA"><img height="150px" width="140px"  src="images/small/40.png" /></a></li>
                                 <li><a href="images/large/41.jpg" rel="lightbox[album1]" title="Crazy Codes"><img  height="150px" width="160px"  src="images/small/41.png" /></a></li>
                                 <li><a href="images/large/42.jpg" rel="lightbox[album1]" title="Gwiggle"><img  height="150px" width="160px" src="images/small/42.png" /></a></li>
                                 <li><a href="images/large/43.jpg" rel="lightbox[album1]" title="CAPTURE THE MOMENT"><img  height="150px" width="160px" src="images/small/43.png" /></a></li>
                                 <li><a href="images/large/44.jpg" rel="lightbox[album1]" title="CODENESIA"><img  height="150px" width="160px" src="images/small/44.png" /></a></li>
                                 <li><a href="images/large/45.jpeg" rel="lightbox[album1]" title="Kya aap 5vi pass se tezz h??"><img  height="150px" width="160px" src="images/small/45.png" /></a></li>
                                 <li><a href="images/large/18.jpg" rel="lightbox[album1]" title="GRAVITY CONTROL"><img height="150px" width="160px"  src="images/small/46.png" /></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="pb-wrapper pb-wrapper-2">
                           <h3 class="pb-title">Managerial.</h3>
                           <div class="pb-scroll">
                              <ul class="pb-strip">
                                 <li><a href="images/large/47.jpg" rel="lightbox[album2]" title="Sale your stock"><img height="150px" width="160px"  src="images/small/47.png" /></a></li>
                                 <li><a href="#" rel="lightbox[album2]" title="Coming Soon"><img height="150px" width="160px" src="images/giphy.gif" /></a></li>
                                 <li><a href="#" rel="lightbox[album2]" title="Coming Soon"><img height="150px" width="160px" src="images/giphy.gif" /></a></li>
                                 <li><a href="#" rel="lightbox[album2]" title="Coming Soon"><img height="150px" width="160px" src="images/giphy.gif" /></a></li>
                                 <!--
                                    <li><a href="images/large/15.jpg" rel="lightbox[album2]" title="Love"><img src="images/small/15.jpg" /></a></li>
                                    <li><a href="images/large/16.jpg" rel="lightbox[album2]" title="Friendship"><img src="images/small/16.jpg" /></a></li>
                                    <li><a href="images/large/17.jpg" rel="lightbox[album2]" title="Spring"><img src="images/small/17.jpg" /></a></li>
                                    <li><a href="images/large/18.jpg" rel="lightbox[album2]" title="Future"><img src="images/small/18.jpg" /></a></li>
                                    <li><a href="images/large/19.jpg" rel="lightbox[album2]" title="Summer"><img src="images/small/19.jpg" /></a></li>
                                    <li><a href="images/large/20.jpg" rel="lightbox[album2]" title="Lightness"><img src="images/small/20.jpg" /></a></li>
                                    -->
                              </ul>
                           </div>
                        </div>
                        <div class="pb-wrapper pb-wrapper-3">
                           <h3 class="pb-title">Robotics</h3>
                           <div class="pb-scroll">
                              <ul class="pb-strip">
                                 <li><a href="#" rel="lightbox[album3]" title="Coming Soon"><img height="150px" width="160px" src="images/giphy.gif" /></a></li>
                                 <li><a href="#" rel="lightbox[album3]" title="Coming Soon"><img height="150px" width="160px" src="images/giphy.gif" /></a></li>
                                 <li><a href="#" rel="lightbox[album3]" title="Coming Soon"><img height="150px" width="160px" src="images/giphy.gif" /></a></li>
                                 <li><a href="#" rel="lightbox[album3]" title="Coming Soon"><img height="150px" width="160px" src="images/giphy.gif" /></a></li>
                                 <li><a href="#" rel="lightbox[album3]" title="Coming Soon"><img height="150px" width="160px" src="images/giphy.gif" /></a></li>

                                 <!--
                                    <li><a href="images/large/8.jpg" rel="lightbox[album3]" title="Softness"><img src="images/small/8.jpg" /></a></li>
                                    <li><a href="images/large/18.jpg" rel="lightbox[album3]" title="Bliss"><img src="images/small/18.jpg" /></a></li>
                                    <li><a href="images/large/4.jpg" rel="lightbox[album3]" title="Adorable"><img src="images/small/4.jpg" /></a></li>
                                    <li><a href="images/large/6.jpg" rel="lightbox[album3]" title="Forever"><img src="images/small/6.jpg" /></a></li>
                                    <li><a href="images/large/7.jpg" rel="lightbox[album3]" title="Silence"><img src="images/small/7.jpg" /></a></li>
                                    <li><a href="images/large/11.jpg" rel="lightbox[album3]" title="Love"><img src="images/small/11.jpg" /></a></li>
                                    -->
                              </ul>
                           </div>
                        </div>
                        <div class="pb-wrapper pb-wrapper-4">
                           <h3 class="pb-title">Fun events</h3>
                           <div class="pb-scroll">
                              <ul class="pb-strip">
                                 <li><a href="images/large/13.jpg" rel="lightbox[album4]" title="Wire Bend"><img src="images/small/13.jpg" /></a></li>
                                 <li><a href="images/large/14.jpg" rel="lightbox[album4]" title="Tech cherades"><img src="images/small/14.jpg" /></a></li>
                                 <li><a href="images/large/2.jpg" rel="lightbox[album4]" title="Rush Hour"><img src="images/small/2.jpg" /></a></li>
                                 <!--				<li><a href="images/large/18.jpg" rel="lightbox[album4]" title="Delicious"><img src="images/small/18.jpg" /></a></li>-->
                                 <!--				<li><a href="images/large/19.jpg" rel="lightbox[album4]" title="Softness"><img src="images/small/19.jpg" /></a></li>-->
                                 <!--
                                    <li><a href="images/large/20.jpg" rel="lightbox[album4]" title="Bliss"><img src="images/small/20.jpg" /></a></li>
                                    <li><a href="images/large/1.jpg" rel="lightbox[album4]" title="Adorable"><img src="images/small/1.jpg" /></a></li>
                                    <li><a href="images/large/5.jpg" rel="lightbox[album4]" title="Forever"><img src="images/small/5.jpg" /></a></li>
                                    <li><a href="images/large/3.jpg" rel="lightbox[album4]" title="Silence"><img src="images/small/3.jpg" /></a></li>
                                    <li><a href="images/large/6.jpg" rel="lightbox[album4]" title="Love"><img src="images/small/6.jpg" /></a></li>
                                    -->
                              </ul>
                           </div>

                        </div>
                                          <br> <br>
         <br> <br>
         <br> <br>
         <br> <br>
         <br>
     <br>
        

                     </section>
 <br>
        
                  </div>

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
      <script src="js/data.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script src="js/lightbox.js"></script>
      <script  src="js/loader.js"></script>
      <script src="update.js"></script>
   </body>
</html>