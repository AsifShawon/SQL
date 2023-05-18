<?php

$id = $_POST["_id"];

$con = mysqli_connect("localhost","root","","travello") or die("Connection Failed");

$sql = "delete from selected where selected.id = '{$id}'";
$result = mysqli_query($con,$sql);

if($result){
    echo 1;
}else{
    echo 0;
}


?>