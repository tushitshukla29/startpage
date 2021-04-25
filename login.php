<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css";>
    <script src="https://kit.fontawesome.com/1c2bffb59b.js" crossorigin="anonymous"></script>
    <meta name="google-signin-client_id" content="722682528489-53ofu5k3la8jk3j5sgpt66rnkms3ta6b.apps.googleusercontent.com">
                <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
    
    <title>Document</title>
</head>
<body>
    <div class="login">
        <img src="download.jpeg" class="avatar">
         <h1>Login Here</h1>
         <?php
             if(isset($_SESSION['msg']))
              {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']); 
              }

         ?>
         <form method="POST" action="login_check.php">
             <p>Username</p>
               <input type="text" name="username" placeholder="Enter Username" required>
               <p>Password</p>
               <input type="password" name="password" placeholder="Enter Password" required>
               <input type="submit" name="login" value="submit">
               <a href="reset.php">Forgot your Password?</a><br>
               <a href="create.php">Create an account</a>
               
         </form> 
    </div>


        
  

</body>
</html> 

   