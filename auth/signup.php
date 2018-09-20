<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <?php include '../meta.php';
      error_reporting(E_ERROR | E_PARSE);
      ?>
      <link rel="stylesheet" type="text/css" href="css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="css/demo.css" />
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      <link rel="stylesheet" type="text/css" href="css/star.css" />
      <link rel="stylesheet" type="text/css" href="css/custom.css" />
      <link rel="stylesheet" type="text/css" href="css/background.css">
      <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
      <script src="js/modernizr.custom.25376.js"></script>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

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
    form { max-width:420px; margin:50px auto 0px; }

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
[type="submit"]:hover { background:#CC4949; }
p>a{
  color: cyan;
  font-size: 22px;
}
      </style>
      <script>
      window.onload = function(){
    document.forms["mihir"].onsubmit = check;
};
</script>
      <script>

function check() {

    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var password = document.getElementById('password1');
    var password3 = document.getElementById('password2');
   var passw=  /^[A-Za-z]\w{7,14}$/;
    if (!filter.test(email.value)) {
    swal('Please provide a valid email address','',"warning");
    email.focus;
    return false;
 }
 
 else if (!passw.test(password.value)) {
    swal(' password between 7 to 16 characters should only characters, numeric digits, underscore and first character must be a letter','',"warning");
    password.focus;
    return false;
 } else if (password.value != password3.value) {
    swal('password must be same','',"warning");
    password3.focus;
    return false;
 }
 else{
   return true;
 }


}
      </script>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   <body style="background:#291B2C;
   overflow-y:scroll;" class="particletext confetti">

         <div id="perspective" class="perspective effect-laydown" style="background:#black;">
            <div class="container" style="background:#black;">
               <div class="wrapper"  >
                  <!-- wrapper needed for scroll -->
                  <div id="menunavbar" style="margin-bottom:1vw;position:sticky;top:0px;width:100%;background-image: url('test.gif'); height: 100%;   background-position: center;background-repeat: no-repeat;background-size: cover;" >
                     <button id="showMenu" class="button button-1" style="display: inline-block;float:right;background:black;color:white;text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #ff00de , 0 0 70px #ff00de , 0 0 80px #ff00de , 0 0 100px #ff00de ;">Menu</button>
                     <img src="images/Aavartan.png" height="50vw" width="auto" style="display: inline-block;">
                    
                  </div>
                  <br>
                  <center>
                      <h2 style="color: white; text-shadow: 0 0 10px rgba(255,255,255,0) , 0 0 20px rgba(255,255,255,0) , 0 0 30px rgba(255,255,255,0) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;">
                     <span></span>Registration Portal</h1>
                     <form  name="mihir" action="signupsubmit.php" method="POST" onsubmit="return check()">      
  <input  type="text" class="feedback-input" placeholder="Name" id="name" name="name" autofocus required /> 
   <input type="number" class="feedback-input" id="contact" placeholder="Contact number" name="contact" minlength="10" maxlength="10"autofocus autofocus  required>
    <input type="text" class="feedback-input" id="branch"  placeholder="Branch" name="branch" autofocus  required>
    <input type="text" class="feedback-input" id="course"  placeholder="Course" name="course" autofocus required>
     <select class="feedback-input" id="semester" name="semester"  placeholder="Semester" autofocus required>
                              <option value="1st" style="color:black;">1st</option>
                              <option value="2nd" style="color:black;">2nd</option>
                              <option value="2nd"style="color:black;" >2nd</option>
                              <option value="3rd" style="color:black;">3rd</option>
                              <option value="4th" style="color:black;">4th</option>
                              <option value="5th" style="color:black;">5th</option>
                              <option value="6th" style="color:black;">6th</option>
                              <option value="7th" style="color:black;">7th</option>
                              <option value="8th" style="color:black;">8th</option>
                              <option value="9th" style="color:black;">9th</option>
                              <option value="10th" style="color:black;">10th</option>
                           </select>
   <input type="text" class="feedback-input" Placeholder="college/University" id="college" name="college" autofocus required>
  <input name="email" type="text" class="feedback-input" placeholder="Email" id="email" required />
   <input type="password" class="feedback-input" id="password1" name="password1" placeholder="Enter Password" autofocus required>
   <input type="password" class="feedback-input" id="password2" name="password2" placeholder="Re Enter Password" autofocus required>

  <input type="submit" value="SUBMIT" />
  <p style="float:right;margin-right:4%;color:white;">Already Registered?<a href="login.php"> login</a></p>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</form>
                    
                  </center>
               </div>
               <!-- wrapper -->
            </div>
            <!-- /container -->
            <a id="menuclose" href="#" ><span class="close">&times;</span></a>
         <?php include '../header.php'; ?>
         </div>
         <!-- /perspective -->
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="js/classie.js"></script>
      <script src="js/menu.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
