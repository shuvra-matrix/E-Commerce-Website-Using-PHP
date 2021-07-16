<?php
include("adminpercials/session.php");
include ("../pertials/db.php");

$catogory = $_POST["category"];
$query = "INSERT INTO catagories(name) VALUES ('$catogory')";
$connection->query($query);

include ("./categories.php")


?>