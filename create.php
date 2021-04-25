<?php

 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylenew.css";>
    <title>Create new account</title>
</head>
<body>
    <div class="container">
        <div class="navcreate">
            <h1>Create Your account</h1>
            <?php
              
              if(isset($_SESSION['msg']))
              {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']); 
              }
              
             
            ?>
            <div class="login">
            <form method="POST" action="registration.php">
                  <p>First Name</p>
                  <input type="text" name="First-Name" placeholder="first name" required>
                  <p>Secound Name</p>
                  <input type="text" name="Secound-Name" placeholder="Secound name" required>
                  <p>User Name</p>
                  <input type="text" name="user" placeholder="User Name" required>
                  <p>Email</p>
                  <input type="text" name="Email" placeholder="Email" required>
                  <p>Phone number</p>
                  <input type="text" name="Phone" placeholder="Phone Number" required>
                  <p>Password</p>
                  <input type="password" name="password" placeholder="Enter password" required>
                  <p>Confirm Password</p>
                  <input type="password" name="confirm-password" placeholder="confirm password" required>
                  <input type="submit" name="save" value="submit">
                </div>
        </div>
    </div>
</body>
</html>