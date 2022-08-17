<?php
$con  = mysqli_connect("localhost","root","",'project');

$fname = $_POST['firstname'];
  $pass = $_POST['pass'];
  $userId = random_num(20);
   if(isset($fname) && isset($pass)){
     
        mysqli_query($con,"insert into users(user_id,user_name,password)values('$userId','$fname','$pass');");
        header("location:Signup.html");
   }
        
?>

