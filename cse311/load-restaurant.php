<?php

$city = $_POST["city_name"];
$restaurant = $_POST["restaurant_name"];

$con = mysqli_connect("localhost","root","","travello") or die("Connection Failed");

$sql = "select r.name, r.budget from restaurants as r, destination_area as d where d.name='{$city}' and r.area_id=d.dest_id";
$result = mysqli_query($con,$sql) or die("SQL Query Failed.");


$output = "";
$budget;
if(mysqli_num_rows($result)>0){
    $output = "<option>Choose a Restaurant</option>";
    while($row = mysqli_fetch_assoc($result)){
        if($restaurant==$row["name"]){
            $budget = $row["budget"];
        }
        $output .= "<option>{$row["name"]}</option>";
    }

    mysqli_close($con);

    if($restaurant=="")
        echo $output;
    else echo $budget;
}
else{
    echo "<option>Choose a Sight</option>";
}

?>