<?php
include('connection.php');
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Login</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style>
    body{
        background: url("https://media.giphy.com/media/322Gg7gspi2HlkuqD8/giphy.gif");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;

    }
</style>
</head>
<body>
    
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    
    <center>
        
        
        <h1 class="heading" style="margin:70px 0px 50px 0px;">Aavartan 2018 Login Portal</h1>
        
        
        <form method="post"  class="col-lg-offset-3 col-lg-6">
        <div class="form-group">
            <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password1">Enter Password</label>
        <input type="password" class="form-control" id="password1" name="password1" required>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-lg btn-success">Login</button>
        </div>
    </form>
    </center>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>