<?php

$con=mysqli_connect('localhost:3306','root','','travel');


$firstname=$_POST['Username'];
$Student_ID=$_POST['Student ID'];
$email=$_POST['email'];
$password=$_POST['password'];
$User_Type=$_POST['User Type'];

				

$sql="INSERT INTO `uiu_sports_hub`(`Name`,`ID`,`Email`,`Password`,`Type`) VALUES ('$firstname','$Student_ID','$email','$password','$User_Type')";
$result = mysqli_query($con,$sql);

?>
