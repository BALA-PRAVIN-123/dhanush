<?php
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$rn = $_POST['rn'];
$con=mysqli_connect("localhost","root","","dhanushfb");
$sql="INSERT INTO fb(n,r,e,f) VALUES('$name','$rn','$email','$feedback')";
$r=mysqli_query($con,$sql);
if($r){
    header("location:feedbackthanks.html");
    exit();
}
else{
    echo "some error in this php codes";
}
?>