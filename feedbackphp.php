<?php
include_once 'config.php';
$ref=@$_GET['q'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$feedback = $_POST['feedback'];
$q=mysqli_query($con,"INSERT INTO `feedback`(`name`, `email`, `subject`, `feedback`)VALUES  ( '".$name."', '".$email."' , '".$subject."', '".$feedback."')")or die ("Error");
header("location:$ref?q=Thank you for your valuable feedback");
?>