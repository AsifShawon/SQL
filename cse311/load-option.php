<?php

$name = $_POST["city_name"];
$con = mysqli_connect("localhost","root","","travello") or die("Connection Failed");

$sql = "select o.Option_type from destination_area as d, availability as a, options as o where d.name='{$name}' and a.a_id=d.dest_id and a.o_id=o.id";
$result = mysqli_query($con,$sql) or die("SQL Query Failed.");


$output = "";
if(mysqli_num_rows($result)>0){
    $output = "<option>Choose a Type</option>";
    while($row = mysqli_fetch_assoc($result)){
        $output .= "<option>{$row["Option_type"]}</option>";
    }

    mysqli_close($con);

    echo $output;
}
else{
    echo "<option>Choose a Type</option>";
}

?>