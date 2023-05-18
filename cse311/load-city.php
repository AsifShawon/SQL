<?php

$con = mysqli_connect("localhost","root","","travello") or die("Connection Failed");

$sql = "select * from destination_area";
$result = mysqli_query($con,$sql) or die("SQL Query Failed.");

$output = "";
if(mysqli_num_rows($result)>0){
    $output = "<option>Choose a city</option>";
    while($row = mysqli_fetch_assoc($result)){
        $output .= "<option >{$row["name"]}</option>";
    }

    mysqli_close($con);

    echo $output;
}
else{
    echo "<option>Choose a city</option>";
}

?>