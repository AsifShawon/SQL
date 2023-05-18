<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	include 'connection.php';
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if($username != NULL and $email != NULL and $password != NULL){
	$sql = "select * from users where username = '$username'";
	
	$result = mysqli_query($con,$sql);
	if($result){
		$num = mysqli_num_rows($result);
		if($num>0){
			echo '<div id = "alert" class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Oho!</strong> Already signed up.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>';
		}
		else{
			$sql = "insert into users(username,email,password)
			values('$username','$email','$password')";

			$result = mysqli_query($con,$sql);

			if($result){
				echo '<div class="alert alert-success d-flex align-items-center" role="alert">
				<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
				<div>
				  An example success alert with an icon
				</div>';
		}
		else{
			die(mysqli_error($con));
		}
		}
	}
	else{
		die(mysqli_error($con));
	}
}
	else{
		?><div id = "alert" class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Woops!</strong> Check your inputs!!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>
		  <?php
	}
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Sign-up</title>
	<!-- <link rel="stylesheet" type="text/css" href="slide navbar style.css"> -->
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<style>
	body{
	margin: 0;
	padding: 5% 5% 10% 10%;
	/* display: flex; */
	justify-content: center;
	background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj7CMrHHLM0XmBKZwhhfl0S3nUWOWFWg73R867cGTUajShSGe_Jg_08zop7FcJaLKNE6YU1Rt6gwOprH4Dy_SFXljs1znAfiTA8d0nTLc4j48qUEeBuRdnI_NdpfT8RJIu58AhCcQTEflYZ55q0_g59XbJPp5BOUDD5iVK18QApREfULKKRsP62aJulCQ/s16000/sunset-7628294.jpg") no-repeat center/ cover;
	}

	#alert{
		width: 80%;
	}
	.main{
		width: 80%;
		height: 350px;
	}
</style>


</head>
<body>
<div class="main">
	<figure class="text-center">
  		<blockquote class="blockquote">
    		<p class="h1">Sign-up</p>
  		</blockquote>
  		<figcaption class="blockquote-footer">
   		 Sign-up with your own details
  		</figcaption>
	</figure>
	<form action="sign-up.php" method="post">
	<div class="form-group">
    <label for="exampleInputusername">Username</label>
    <input type="username" name = "username" class="form-control" id="exampleInputusername" placeholder="username">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<a href="http://localhost/cse311/"><button class="btn btn-secondary">Home</button></a>
<a href="http://localhost/cse311/login.php"><button class="btn btn-secondary">Login</button></a>
</div>
</body>
</html>