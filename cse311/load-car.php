<?php

$city = $_POST["city_name"];
$car = $_POST["car_name"];

$con = mysqli_connect("localhost","root","","travello") or die("Connection Failed");

$sql = "select c.rental_type,c.1daybudget from rent_a_car as c, destination_area as d where d.name='{$city}' and c.area_id=d.dest_id";
$result = mysqli_query($con,$sql) or die("SQL Query Failed.");


$output = "";
$budget = "";
if(mysqli_num_rows($result)>0){
    $output = "<option>Choose a Car</option>";
    // $budget = "<option>Budget</option>";
    while($row = mysqli_fetch_assoc($result)){
        if($car==$row["rental_type"]){
            $budget = $row["1daybudget"];
        }
        $output .= "<option>{$row["rental_type"]}</option>";
    }

    mysqli_close($con);

    if($car=="")
        echo $output;
    else echo $budget;
}
else{
    echo "<option>Choose a Sight</option>";
}

?>