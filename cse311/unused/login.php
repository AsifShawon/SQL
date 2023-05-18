<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	include 'connection.php';
	
    $username = $_POST['username'];
    // On login.php, store the username in the $_SESSION superglobal array and redirect to another page

session_start();
$_SESSION['username'] = $username;
header('Location: city_select.php');
exit;


	if($username != NULL and $password != NULL){
	    $sql = "select * from users where username = '$username' and password = '$password'";
	
	    $result = mysqli_query($con,$sql);
	    if($result){
			?><div id = "alert" class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Welcome, <?php echo $username ?>!</strong> Welcome to our site.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div><?php

     $con = mysqli_connect("localhost","root","","travello");
    //  $sql = "select * from selected where username='$username'";
    $sql = "insert into selected values('$username','','','')";
     $result = mysqli_query($con,$sql);

     if($result){
         ?><div id = "alert" class="alert alert-warning alert-dismissible fade show" role="alert">
             <strong>DONE!</strong>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div><?php
     }
     else{
         die(mysqli_error($con));
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
	<title>Login</title>
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
    		<p class="h1">Login</p>
  		</blockquote>
  		<figcaption class="blockquote-footer">
   		 Login with your own details
  		</figcaption>
	</figure>
	<form action="login.php" method="post">
	<div class="form-group">
    <label for="exampleInputusername">Username</label>
    <input type="username" name = "username" class="form-control" id="exampleInputusername" placeholder="username">
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div> -->
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <a href="http://localhost/cse311/city_select.php"><button type="submit" class="btn btn-primary">Submit</button></a>
</form>
<br>
<a href="http://localhost/cse311/"><button class="btn btn-secondary">Home</button></a>
<a href="http://localhost/cse311/sign-up.php"><button class="btn btn-secondary">Sign up</button></a>
</div>
</body>
</html>