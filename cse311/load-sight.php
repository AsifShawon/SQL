<?php

$option = $_POST["option_name"];
$city = $_POST["city_name"];
$con = mysqli_connect("localhost","root","","travello") or die("Connection Failed");

$sql = "select  s.name from popular_sights as s, destination_area as d, availability as a, options as o where d.name='{$city}' and a.a_id=d.dest_id and a.o_id=o.id and o.Option_type='{$option}' and o.id=s.o_id and d.dest_id=s.a_id";
$result = mysqli_query($con,$sql) or die("SQL Query Failed.");


$output = "";
if(mysqli_num_rows($result)>0){
    $output = "<option>Choose a Sight</option>";
    while($row = mysqli_fetch_assoc($result)){
        $output .= "<option>{$row["name"]}</option>";
    }

    mysqli_close($con);

    echo $output;
}
else{
    echo "<option>Choose a Sight</option>";
}

?>