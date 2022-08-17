<?php
$con  = mysqli_connect("localhost","root","",'project');
echo "Connected";
if($_SERVER['REQUEST_METHOD']== "POST"){
$finame = $_POST["fid"];
$content=$_POST["content"];

if(isset($finame) && isset($content)){    
    mysqli_query($con,"insert into feedback(fid,content)values('$finame','$content');");
    header("location:thanks.html");
}
}
?>