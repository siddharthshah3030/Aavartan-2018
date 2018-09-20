<header>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
</header>
<?php
   //<!--Start session-->
   session_start();
   include('connection.php');
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password1=$_POST['password1'];
    $password2=$_POST['password2'];
  
   $contact = filter_var($_POST["contact"], FILTER_SANITIZE_NUMBER_INT);
   $branch = filter_var($_POST["branch"], FILTER_SANITIZE_STRING);
   $course = filter_var($_POST["course"], FILTER_SANITIZE_STRING);
   $semester = filter_var($_POST["semester"], FILTER_SANITIZE_NUMBER_INT);
   $college = filter_var($_POST["college"], FILTER_SANITIZE_STRING);
   //no errors

   //Prepare variables for the queries
   $name = mysqli_real_escape_string($link, $name);
   $email = mysqli_real_escape_string($link, $email);
   $contact = mysqli_real_escape_string($link, $contact);
   $branch = mysqli_real_escape_string($link, $branch);
   $course = mysqli_real_escape_string($link, $course);
   $semester = mysqli_real_escape_string($link, $semester);
   $college = mysqli_real_escape_string($link, $college);
   //$password = md5($password);
   $password1 = hash('sha256', $password1);
   //128 bits -> 32 characters
   //256 bits -> 64 characters
   //If username exists in the users table print error
   $sql = "SELECT * FROM users WHERE name = '$name'";
   $result = mysqli_query($link, $sql);
   if(!$result){
       echo '<div class="alert alert-danger">Error running the query!1</div>';
   //    echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';
       exit;
   }
   $results = mysqli_num_rows($result);
   if($results){
       echo '<div class="alert alert-danger">That username is already registered. Do you want to log in?</div>';  exit;
   }
   //If email exists in the users table print error
   $sql = "SELECT * FROM users WHERE email = '$email'";
   $result = mysqli_query($link, $sql);
   if(!$result){
       echo '<div class="alert alert-danger">Error running the query!2</div>'; exit;
   }
   $results = mysqli_num_rows($result);
   if($results){
    ?>
    <script type="text/javascript">swal("That email is already registered. Do you want to log in?");</script>
    <?php
    exit;     
   }
   //Create a unique  activation code
   $activationKey = bin2hex(openssl_random_pseudo_bytes(16));
       //byte: unit of data = 8 bits
       //bit: 0 or 1
       //16 bytes = 16*8 = 128 bits
       //(2*2*2*2)*2*2*2*2*...*2
       //16*16*...*16
       //32 characters

   //Insert user details and activation code in the users table

   $sql = "INSERT INTO users (`name`, `phoneno`, `branch`, `course`, `semester`, `college`, `email`, `password`, `activation`) VALUES ('$name', '$contact', '$branch', '$course', '$semester', '$college', '$email', '$password1', '$activationKey')";
   $result = mysqli_query($link, $sql);
   if(!$result){
       echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>';
       exit;
   }
   $sql = "SELECT * FROM users WHERE email = '$email'";
   $result = mysqli_query($link, $sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $id = $row['id'];
   $sql = "INSERT INTO `registered_events`(`id`) VALUES (".$id.")";
   $result = mysqli_query($link, $sql);
   if(!$result){
       echo '<div class="alert alert-danger">There was an error inserting the users details in the database!2</div>';
       exit;
   }else{
     //Send the user an email with a link to activate.php with their email and activation code
     $message = "Please click on this link to activate your account:\n\n";
     $message .= "http://test.aavartan.org/auth/activate.php?email=" . urlencode($email) . "&key=$activationKey";
     if(mail($email, 'Confirm your Registration', $message, 'From:'.'technocracy@aavartan.org')){
           ?>
           <script type="text/javascript">swal("Thank for your registring! A confirmation email has been sent to $email. Please click on the activation link to activate your account");</script>
           <?php
            header('Location: https://www.batman.aavartan.org/auth/login.php');
            exit();
   }


   }


           ?>
