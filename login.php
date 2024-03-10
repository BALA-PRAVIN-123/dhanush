<?php
ob_start();
if(!isset($_POST['submit']));
{
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","dhanushsfs");
$sql="SELECT * from signin WHERE usern='$username' AND psswd='$password' ";
$result=mysqli_query($con,$sql);
$rc=mysqli_num_rows($result);
if($rc>0){
    header("location:home.html");
    exit();
}
else{ 
    echo "wrong user...";
}
}
?>