<?php


include("connection.php");

$nam= $_POST['name'];
$mail=$_POST['email'];

$message=$_POST['message'];


$q="insert into `contact_us`(name,email,message)
       value('$nam','$mail','$message')";


mysqli_query($conn,$q);

header('location:contact-us.html');
?>
