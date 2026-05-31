<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "coffee_rating"
);

if(!$conn){
    die("Connection Failed");
}

?>