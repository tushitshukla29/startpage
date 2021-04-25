
<?php

 $conn = mysqli_connect("localhost","root","","myfestival") or die ("connection failed");



 if(isset($_POST['submit']))
 {

     $email = mysqli_real_escape_string($conn,$_POST['email']);

     $sql = "SELECT email FROM user WHERE email = '$email'";

     $result = mysqli_query($conn,$sql);


     if(mysqli_num_rows($result) > 0)
     {
     	$subject = "Reset Password";

     	$body = "hi click here to resrt your password  http://localhost/myfestival/forgot.html";

     	$sender_email = "From: student123kasim@gmail.com";

      if(mail($email,$subject,$body,$sender_email))
      {
      	 $_SESSION['msg'] = "check your email to reset password $email";

      	 header("location: http://localhost/myfestival-main/index.php");
      }
      else
      {
      	echo "email sending failed";
      }

     }
     else
     {
     	echo "email not exist";
     }


 }



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



 <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
 	 <div class="main">\
 	 	<div class="headding">
 	 		<h1>Recover Your Account</h1>
 	 		<h3>Please Fill Email Id properly</h3>
 	 	</div>
 	 	<input type="email" name="email" id="email" placeholder="Send email">
 	 	<input type="submit" name="submit" value="Send Mail">
 	 </div>
 </form>



</body>
</html>