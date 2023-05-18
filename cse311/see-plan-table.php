<?php

$username = $_POST["_username"];

$con = mysqli_connect("localhost","root","","travello") or die("Connection Failed");
$sql = "select * from selected where username='{$username}'";
$result = mysqli_query($con,$sql) or die("SQL Query Failed.");


$output = "";
if(mysqli_num_rows($result)){
    $output = '<table class="table table-bordered border-primary">
    <thead><tr>
        <th>#</th>
        <th>City</th>
        <th>Sight</th>
        <th>Restaurant</th>
        <th>Hotel</th>
        <th>See Details</th>
        <th>Delete</th>
        </tr></thead>';
    while($row = mysqli_fetch_assoc($result)){
        $output .= 
        "<tr><td>{$row["id"]}</td>
        <td>{$row["city"]}</td>
        <td>{$row["sight"]}</td>
        <td>{$row["restaurant"]}</td>
        <td>{$row["hotels"]}</td>
        <td><button class='btn btn-success edit-btn' type='button' data-eid='{$row["id"]}'>See Details</button></td>
        <td><button class='btn btn-danger delete-btn' type='button' data-id='{$row["id"]}'>Delete</button></td>
        </tr>";
    }
    $output .= "</table>";
    echo $output;

}else{
    echo "No record Found";
}

?>