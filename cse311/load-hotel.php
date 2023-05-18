<?php

$city = $_POST["city_name"];
$hotel = $_POST["hotel_name"];

$con = mysqli_connect("localhost","root","","travello") or die("Connection Failed");

$sql = "select h.hname, h.minbudget, h.maxbudget from hotels as h, destination_area as d where d.name='{$city}' and h.area_id=d.dest_id";
$result = mysqli_query($con,$sql) or die("SQL Query Failed.");


$output = "";
$budget = "";
if(mysqli_num_rows($result)>0){
    $output = "<option>Choose a hotel</option>";
    // $budget = "<option>Budget</option>";
    while($row = mysqli_fetch_assoc($result)){
        if($hotel==$row["hname"]){
            $budget .= "<option>{$row["minbudget"]}</option>";
            $budget .= "<option>{$row["maxbudget"]}</option>";
        }
        $output .= "<option>{$row["hname"]}</option>";
    }

    mysqli_close($con);

    if($hotel=="")
        echo $output;
    else echo $budget;
}
else{
    echo "<option>Choose a Sight</option>";
}

?>