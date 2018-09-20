<header>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
</header>
<?php
   //Start session
   session_start();
   //Connect to the database
   include('connection.php');
   
$email=$_POST['email'];
   $email = mysqli_real_escape_string($link, $email);
           //Run query to check if the email exists in the users table
   $sql = "SELECT * FROM users WHERE email = '$email'";
   $result = mysqli_query($link, $sql);
   if(!$result){
       echo '<div class="alert alert-danger">Error running the query!</div>'; exit;
   }
   $count = mysqli_num_rows($result);
   //If the email does not exist
               //print error message
   if($count != 1){
?>
<script type="text/javascript">swal("This email does not exist on our database!","","error");</script>
<?php
header();
exit;

       echo '<div class="alert alert-danger"></div>';  exit;
   }
           
           //else
               //get the user_id
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $id = $row['id'];
               //Create a unique  activation code
   $key = bin2hex(openssl_random_pseudo_bytes(16));
               //Insert user details and activation code in the forgotpassword table
   $time = time();
   $status = 'pending';
   $sql = "INSERT INTO forgotpassword (`id`, `rkey`, `time`, `status`) VALUES ('$id', '$key', '$time', '$status')";
   $result = mysqli_query($link, $sql);
   if(!$result){
       echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>'; 
       exit;
   }
   
               //Send email with link to resetpassword.php with user id and activation code
   
   $message = "Please click on this link to reset your password:\n\n";
   $message .= "http://batman.aavartan.org/auth/resetpassword.php?id=$id&key=$key";
   if(mail($email, 'Reset your password', $message, 'From:'.'technocracy@aavartan.org')){
           //If email sent successfully
                   //print success message
          echo "<div class='alert alert-success'>An email has been sent to $email. Please click on the link to reset your password.</div>";
   }
   
       ?>