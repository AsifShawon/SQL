<?php

$username = $_POST["_username"];
$email = $_POST["_email"];
$password = $_POST["_password"];

$con = mysqli_connect("localhost","root","","travello") or die("Connection Failed");

$sql = "select * from users where username = '{$username}'";
	
	$result = mysqli_query($con,$sql);
	if($result){
		$num = mysqli_num_rows($result);
		if($num>0){
			echo 0; // 0 = already signed 
		}
		else{
			$sql = "INSERT into users(username,email,password) values('{$username}','{$email}','{$password}')";

			$result = mysqli_query($con,$sql);

			if($result){
				echo 1; // 1 = sign up successful
		}
		else{
			die(mysqli_error($con));
		}
    }
}

?>