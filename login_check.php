        
       <?php
                           

    if(isset($_POST['login']))
{

    session_start();

       $conn = mysqli_connect("localhost","root","","myfestival") or die ("connection failed");    

      $username = mysqli_real_escape_string($conn,$_POST['username']);
     $password = $_POST['password'];

         $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

 
               $result = mysqli_query($conn,$sql) or die("query failed");

        if(mysqli_num_rows($result) > 0)
        {
           $_SESSION['username'] = $username;
           header("location: http://localhost/myfestival-main/home.php");
        }
     else
              {
                
                $_SESSION['msg'] = "<h3 style='color:red'>username and password not matched<h3>";
                header("location: http://localhost/myfestival-main/login.php");

              }

          
}
                      ?>