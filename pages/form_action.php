<header>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
</header>
<?php
   //Function for trimming data in required format...
     function test_input($data)
     {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
      
       return $data;
     }

   //Validation Error variables...
   
   //Input field variable assignment..
   $name = $email = $phone = $message="";
   
   $success = $message_server =""; //server message variables
   
   //3..2..1..GO
   if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
     $validation=0;
   
     //name validation
     if (empty($_POST["name"]))
     {
   
       ?>
<script>swal("Name is required");</script>
<?php
exit;
   }
   else
   {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name))
     {?>
<script>swal("Only letters and white space allowed");</script>
<?php
exit;
   }
   else $validation++;
   }
   
   //email validation
   if (empty($_POST["email"]))
   {?>
<script>swal("Email is required");</script>
<?php
exit;
   }
   else
   {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL))
     {
       ?>
<script>swal("Invalid email format");</script>
<?php 
exit;
   }
   else $validation++;
   }
   if (empty($_POST["message"]))
   {
   ?>
<script>swal("Message is required");</script>
<?php
exit;
   }
   else
   {
     $message = test_input($_POST["message"]);
     $validation++;
   }
   
   #validation Ends here..value should be 4 to procees...
   echo $validation;
   if($validation==2)
   {
     $server="localhost";
     $username="root";
     $password="@123";
     $dbname="aavartan18";
   
     //Establish Connection
     $conn = mysqli_connect($server, $username, $password, $dbname);
   
    $email=mysqli_real_escape_string($conn,$email);

    $email=mysqli_real_escape_string($conn,$email);

    $message=mysqli_real_escape_string($conn,$message);
     //ensure connection...
     if (!$conn) //if connection fails Everybody Dies...
     {
         $message_server= "Connection failed: " . mysqli_connect_error();
         die();
     }
   
     //Connection Ensured.. *****Check for Duplicacy of (Email-Phone)****
     //Try inserting data into table
   
     $sql = "INSERT INTO contact (NAME,EMAIL,MESSAGE) VALUES ('$name','$email','$message')";
   
     if (mysqli_query($conn, $sql))  //Data entered successfully
     {
         $message_server="";
         $success="Thank you for reaching out!!";
    ?>
<script> swal("Thank you!", "Your message has been successfully sent. We will contact you very soon!", "success");
   location.replace("https://www.batman.aavartan.org"); 
</script>
<?php
   //clear post array and all text inputs...
   $_POST = array();
   $name = $email = $phone = $message = "";
   }
   mysqli_close($conn);
   }
   
   }
   //Web-Team-****Technocracy- Aavartan'18*****//
   ?>