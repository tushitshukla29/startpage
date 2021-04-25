
<?php
  

 $conn = mysqli_connect("localhost","root","","myfestival") or die ("connection failed");
  

 session_start();

 if(isset($_POST['save']))
 {

	 $fname = mysqli_real_escape_string($conn,$_POST['First-Name']);
	 $lname = mysqli_real_escape_string($conn,$_POST['Secound-Name']);
	 $user = mysqli_real_escape_string($conn,$_POST['user']);
	 $Email = mysqli_real_escape_string($conn,$_POST['Email']);
	 $phone = mysqli_real_escape_string($conn,$_POST['Phone']);
	 $password = mysqli_real_escape_string($conn,$_POST['password']);
	 $confirm_password = mysqli_real_escape_string($conn,$_POST['confirm-password']);


   $sql = "SELECT username, email, phone FROM user WHERE username ='$user' or email = '$Email' or phone = '$phone'";

     

        $result = mysqli_query($conn,$sql) or die("query failed");

        if(mysqli_num_rows($result) > 0)
        {
           $_SESSION['msg'] = "username email and phone already exist";
           header("location: create.php");
        }
     else
     {
	if($password == $confirm_password)
	{
		$sql = "INSERT INTO user(`fname`,`lname`,`username`,`email`,`phone`,`password`) VALUES ('$fname','$lname','$user','$Email','$phone','$password')";

		$result = mysqli_query($conn,$sql);

		header("location: http://localhost/myfestival-main/login.php");

	}
	else
	{
		echo  "password not match";
		// header("location: create.php");
	}

}
}
mysqli_close($conn);

?>