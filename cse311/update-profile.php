<?php

$username = $_POST["_username"];
$email = $_POST["_email"];
$password = $_POST["_password"];

$con = mysqli_connect("localhost","root","","travello") or die("Connection Failed");
$sql = "update users set email='{$email}',password='{$password}' where username='{$username}'";
$result = mysqli_query($con,$sql) or die("SQL Query Failed.");

if($result){
    echo 1;
}
else{
    echo 0;
}

?>