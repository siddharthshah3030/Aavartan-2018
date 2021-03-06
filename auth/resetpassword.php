<!--This file receives the user_id and key generated to create the new password-->
<!--This file displays a form to input new password-->
<?php
   session_start();
   include('connection.php');
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include '../meta.php'; ?>
      <title>Password Reset</title>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
      <style>
         h1{
         color:purple;   
         }
         .contactForm{
         border:1px solid #cca969;
         margin-top: 50px;
         border-radius: 15px;
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
      </style>
   </head>
   <body style="background:black;">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-offset-1 col-sm-10 contactForm">
               <h1 style="color:#cca969;">Reset Password:</h1>
               <div id="resultmessage" style="background:#291B2C;color:#cca969;"></div>
               <?php
                  //If user_id or key is missing
                  if(!isset($_GET['id']) || !isset($_GET['key'])){
                      echo '<div class="alert alert-danger" style="background:#291B2C;color:#cca969;border:2px solid #cca969;">There was an error. Please click on the link you received by email.</div>'; exit;
                  }
                  //else
                      //Store them in two variables
                  $id = $_GET['id'];
                  $key = $_GET['key'];
                  $time = time() - 86400;
                      //Prepare variables for the query
                  $id = mysqli_real_escape_string($link, $id);
                  $key = mysqli_real_escape_string($link, $key);
                      //Run Query: Check combination of user_id & key exists and less than 24h old
                  $sql = "SELECT id FROM forgotpassword WHERE rkey='$key' AND id='$id' AND time > '$time' AND status='pending'";
                  $result = mysqli_query($link, $sql);
                  if(!$result){
                      echo '<div class="alert alert-danger">Error running the query!</div>'; exit;
                  }
                  //If combination does not exist
                  //show an error message
                  $count = mysqli_num_rows($result);
                  if($count !== 1){
                      echo '<div class="alert alert-danger">Please try again.</div>';
                      exit;
                  }
                  //print reset password form with hidden user_id and key fields
                  echo "

                  <form method=post id='passwordreset'>
                  <input type=hidden name=key value=$key>
                  <input type=hidden name=id value=$id>
                  
                      <label for='password'>Enter your new Password:</label>
                      <input type='password' name='password' id='password' placeholder='Enter Password' class='feedback-input'>
               
                      <label for='password2'>Re-enter Password::</label>
                      <input type='password' name='password2' id='password2' placeholder='Re-enter Password' class='feedback-input'>
                  <input type='submit' name='resetpassword' class='btn btn-success btn-lg' value='Reset Password'>
                  
                  
                  </form>
                  ";
                  
                  
                  ?>
            </div>
         </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.jss"></script>
      <!--Script for Ajax Call to storeresetpassword.php which processes form data-->
      <script>
         //Once the form is submitted
         $("#passwordreset").submit(function(event){ 
            //prevent default php processing
            event.preventDefault();
            //collect user inputs
            var datatopost = $(this).serializeArray();
         //    console.log(datatopost);
            //send them to signup.php using AJAX
            $.ajax({
                url: "storeresetpassword.php",
                type: "POST",
                data: datatopost,
                success: function(data){
         
                    $('#resultmessage').html(data);
                },
                error: function(){
                    $("#resultmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
         
                }
         
            });
         
         });           
         
      </script>
   </body>
</html>