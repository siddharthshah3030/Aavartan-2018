   <?php

  error_reporting(E_ERROR | E_PARSE);
  session_start();
  if (isset( $_SESSION['name']) == FALSE){
  header("Location:login.php");
  } ?>
<!doctype html>
<html lang="en">
   <head>
     <?php include '../meta.php';?>
      <link rel="stylesheet" type="text/css" href="css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="css/demo.css" />
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      <link rel="stylesheet" type="text/css" href="css/star.css" />
      <link rel="stylesheet" type="text/css" href="css/custom.css" />
      <link rel="stylesheet" type="text/css" href="css/background.css">
      <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
      <script src="js/modernizr.custom.25376.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
         background: black;
         overflow-y: scroll;
         color:white;
         }
         table {
         width: 750px;
         border-collapse: collapse;
         margin:50px auto;
         }
         /* Zebra striping */
         tr:nth-of-type(odd) {
         background: #eee;
         color:black;
         }
         th:nth-of-type(even) {
         background: #000;
         color:white;
         }
         td, th {
         padding: 10px;
         border: 1px solid #ccc;
         text-align: left;
         font-size: 18px;
         }
         /*
         Max width before this PARTICULAR table gets nasty
         This query will take effect for any screen smaller than 760px
         and also iPads specifically.
         */
         @media
         only screen and (max-width: 760px),
         (min-device-width: 768px) and (max-device-width: 1024px)  {
         table {
         width: 100%;
         }
         /* Force table to not be like tables anymore */
         table, thead, tbody, th, td, tr {
         display: block;
         }
         /* Hide table headers (but not display: none;, for accessibility) */
         thead tr {
         position: absolute;
         top: -9999px;
         left: -9999px;
         }
         tr { border: 1px solid #ccc; }
         td {
         /* Behave  like a "row" */
         border: none;
         border-bottom: 1px solid #eee;
         position: relative;
         }
         td:before {
         /* Now like a table header */
         position: absolute;
         /* Top/left values mimic padding */
         top: 6px;
         left: 6px;
         width: 45%;
         padding-right: 10px;
         white-space: nowrap;
         /* Label the data */
         content: attr(data-column);
         color: #000;
         font-weight: bold;
         }
         #logout{
         color: aqua !important;
         }
         #logout:hover{
         color: blueviolet !important;
         }
         }
      </style>
   </head>
   <body>
      <div id="perspective" class="perspective effect-laydown">
         <div class="container" style="background:black;">
            <div class="wrapper"  >
               <!-- wrapper needed for scroll -->
               <div id="menunavbar" style="margin-bottom:1vw;position:sticky;top:0px;width:100%;background-image: url('test.gif'); height: 100%;   background-position: center;background-repeat: no-repeat;background-size: cover;" >
                  <button id="showMenu" class="button button-1" style="display: inline-block;float:right;background:black;color:white;text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #ff00de , 0 0 70px #ff00de , 0 0 80px #ff00de , 0 0 100px #ff00de ;">Menu</button>
                  <img src="images/Aavartan.png" height="70vw" width="auto" style="display: inline-block;">
                  <h2 style="color: white; text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;"><span></span>DASHBOARD</h2>
                  <br>
               </div>
               <br>
               <br>
               <br>

               <?php

                     include('connection.php');
                     if(!isset($_SESSION['id'])){
                        echo'<h1 class="heading" style="margin:70px 0px 50px 0px;">You must login first to access your dashboard!</h1>';
                     }
                     else{
                          $id = $_SESSION['id'];
                        $sql = "SELECT * FROM users WHERE id='$id'";
                         $result = mysqli_query($link, $sql);
                         if(!$result){
                             echo '<div class="alert alert-danger">Error running the query!</div>';
                             exit;
                         }
                         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                      ?>
                  <a id='logout' href='logout.php' style='position:absolute;right:4%;top:20%;color: white; text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;'><img src='images\logout.png' width='50px' height='50px'><br/>LOGOUT</a>
                  <?php  echo " <div class='row'>
                     <div class='col-lg-7'>
                          <h2>Personal Info</h2>
                     <table id='personalinfo' class='table table-hover table-bordered' style='text-align: center;'>
                     <tr>
                         <th>User id</th>
                         <td>".$row['id']."</td>
                     </tr>
                     <tr>
                         <th>Name</th>
                         <td>".$row['name']."</td>
                     </tr>
                     <tr>
                         <th>College</th>
                         <td>".$row['college']."</td>
                     </tr>
                     <tr>
                         <th>Branch</th>
                         <td>".$row['branch']."</td>
                     </tr>
                     <tr>
                         <th>Course</th>
                         <td>".$row['course']."</td>
                     </tr>
                     <tr>
                         <th>Semester</th>
                         <td>".$row['semester']."</td>
                     </tr>
                     <tr>
                         <th>Email</th>
                         <td>".$row['email']."</td>
                     </tr>
                     <tr>
                         <th>Phone No.</th>
                         <td>+91-<span id='number'>".$row['phoneno']."</span></td>
                     </tr>
                     </table>
                     </div>
                     <div class='col-lg-5''>
                          <h2>Registered Events</h2>
                     <table class='table table-condensed table-hover table-bordered' style='text-align: center;'>";


                     $sql = "SELECT * FROM registered_events WHERE id='$id'";
                     $result = mysqli_query($link, $sql);
                     if(!$result){
                     echo '<div class="alert alert-danger">Error running the query!</div>';
                     exit;
                     }


                     $sql = "SELECT event_name FROM events";
                     $result2 = mysqli_query($link, $sql);
                     if(!$result2){
                     echo '<div class="alert alert-danger">Error running the query!</div>';
                     exit;
                     }

                     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                     $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
                     $sno = 1;
                     for($i=1;$i<26;$i++)
                     {
                     if($row[$i] == 1)
                     {
                      $sql2 = "SELECT event_name FROM events WHERE event_id = $i";
                      $result3 = mysqli_query($link,$sql2);
                      $row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
                         echo "<tr>
                         <th>".$sno."</th>
                         <td>".$row3['event_name']."</td>
                         </tr>";
                         $sno++;
                     }
                     $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);

                     }

                     echo "</table>
                     </div>
                     </div>";
                     }
                     ?>
               <br>
            </div>
            <!-- wrapper -->
         </div>
         <!-- /container -->
         <a id="menuclose" href="#" ><span class="close">&times;</span></a>
          <?php include '../header.php' ?>
      </div>
      <!-- /perspective -->
      <script src="js/classie.js"></script>
      <script src="js/menu.js"></script>
      <script src="js/custom.js"></script>
      <script  src="js/index.js"></script>
      <script src="js/auth.js"></script>
   </body>
</html>
