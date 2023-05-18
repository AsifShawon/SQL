<?php

$username = $_POST["_username"];
$password = $_POST["_password"];

$con = mysqli_connect("localhost","root","","travello") or die("Connection Failed");

$sql = "select * from users where username = '{$username}' and password='{$password}'";
	
	$result = mysqli_query($con,$sql);
	if($result){
		$num = mysqli_num_rows($result);
		if($num>0){
			echo 1; 
		}
		else{
			echo 0;
    }
}

?>