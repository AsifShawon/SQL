<?php

$username = $_POST["_username"];
$con = mysqli_connect("localhost","root","","travello") or die("Connection Failed");

$sql = "select * from users where username='{$username}'";
$result = mysqli_query($con,$sql) or die("SQL Query Failed.");

$num = mysqli_num_rows($result);
		if($num>0){
			$row = mysqli_fetch_assoc($result);
            $output = array(
                'username' => $row["username"],
                'email' => $row["email"],
                'password' => $row["password"]
            );
            $jsonResponse = json_encode($output);
            echo $jsonResponse;
		}
		else{
			echo 0;
        }

?>