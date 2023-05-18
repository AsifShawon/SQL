<?php

$id = $_POST["_id"];

$con = mysqli_connect("localhost","root","","travello") or die("Connection Failed");
$sql = "select * from selected where selected.id='{$id}'";
$result = mysqli_query($con,$sql) or die("SQL Query Failed.");

$num = mysqli_num_rows($result);
if($num>0){
    $row = mysqli_fetch_assoc($result);
    $output = array(
        'city' => $row["city"],
        'options' => $row["options"],
        'sight' => $row["sight"],
        'restaurant' => $row["restaurant"],
        'restaurantBudget' => $row["restaurantBudget"],
        'hotels' => $row["hotels"],
        'hotelBudget' => $row["hotelBudget"],
        'car' => $row["car"],
        'carBudget' => $row["carBudget"],
        'member' => $row["member"]
    );
    $jsonResponse = json_encode($output);
            echo $jsonResponse;
}
else{
    echo 0;
}

?>