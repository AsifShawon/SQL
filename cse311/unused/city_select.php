<?php
if (isset($_POST['previous'])) {
  header('Location: login.php');
  exit();
} else if (isset($_POST['next'])) {
  $_SESSION['username'] = $_POST['username']; 
  $_SESSION['city_name'] = $_POST['city_name']; 
  header('Location: options.php');
  exit();
}
if($_SERVER['REQUEST_METHOD']=='POST'){
	$con = mysqli_connect("localhost","root","","travello");
    $city_name = $_POST['city_name'];
    // // Start the session
    session_start();
    // $_SESSION['username'] = $username;
    // $_SESSION['city_name'] = $city_name;
    // header('Location: options.php');
    // exit;
$username = $_GET['username'];

// Retrieve the stored session variables
$city_name = $_SESSION['city_name'];
$username = $_SESSION['username'];

// // Redirect to the options.php page
//   $_SESSION['username'] = $username;
//     $_SESSION['city_name'] = $city_name;
// header("Location: options.php");
// exit;
    $sql = "update selected set city='$city_name' where username='$username'";

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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<style>
  body{
	margin: 0;
	padding: 5% 5% 10% 10%;
	/* display: flex; */
	justify-content: center;
	/* background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj7CMrHHLM0XmBKZwhhfl0S3nUWOWFWg73R867cGTUajShSGe_Jg_08zop7FcJaLKNE6YU1Rt6gwOprH4Dy_SFXljs1znAfiTA8d0nTLc4j48qUEeBuRdnI_NdpfT8RJIu58AhCcQTEflYZ55q0_g59XbJPp5BOUDD5iVK18QApREfULKKRsP62aJulCQ/s16000/sunset-7628294.jpg") no-repeat center/ cover; */
	}
</style>
<body>

<?php
session_start();
$username = $_SESSION['username'];

echo '<h1 class="display-4">Select a city, '. $username .'!</h1>';

?>


<form class="row g-3" action="city_select.php" method="post">

<!-- City -->
  <div class="col-md-6" >
    <label for="inputtext1" class="form-label">City</label>
    <select name = "city_name" id="inputState" class="form-select">
    <?php
      $con = mysqli_connect("localhost","root","","travello");

      $city_sql = "SELECT * FROM `destination_area`";
      $result_city = mysqli_query($con,$city_sql);

      if(mysqli_num_rows($result_city)>0){

        foreach($result_city as $citylist){
          ?><option> <?php echo $citylist['name'];?></option><?php
        }
      }
      else{
        echo "not found";
      }
      ?>
    </select>

</form>
<br>
<div class="d-flex justify-content-between">
    <button type="submit" name="previous" class="btn btn-primary">Previous</button>
    <button type="submit" name="next" class="btn btn-primary">Next</button>
  </div>

</body>
</html>