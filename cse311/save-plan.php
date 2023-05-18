<?php

$username = $_POST["_username"];
$city = $_POST["_city"];
$option = $_POST["_option"];
$sight = $_POST["_sight"];
$restaurant = $_POST["_restaurant"];
$restaurantBudget = $_POST["_restaurantBudget"];
$hotel = $_POST["_hotel"];
$hotelBudget = $_POST["_hotelBudget"];
$car = $_POST["_car"];
$carBudget = $_POST["_carBudget"];
$member = $_POST["_member"];

$con = mysqli_connect("localhost","root","","travello") or die("Connection Failed");
$sql = "insert into selected(id, username, city, options, sight, restaurant, restaurantBudget, hotels, hotelBudget, car, carBudget, member) values(NULL,'{$username}','{$city}','{$option}','{$sight}','{$restaurant}','{$restaurantBudget}','{$hotel}','{$hotelBudget}','{$car}','{$carBudget}','{$member}')";

$result = mysqli_query($con,$sql) or die("SQL Query Failed.");
if($result){
    echo 1;
}
else {
    echo 0;
}


?>