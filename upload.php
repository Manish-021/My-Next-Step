<?php

if (isset($_POST['submit'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$service = $_POST['Service'];
$number = $_POST['number'];
$message = $_POST['message'];



$connection = mysqli_connect('localhost','root','','mini');
if(!$connection){
	echo "you are not connected to server";
}

$query_insert = "INSERT INTO newproblem(name,number,email,servicesoption,text) VALUES('$name','$number','$email','$service','$message')";

if (mysqli_query($connection,$query_insert)) {
        header('location:counselor.html');
}

}

?>