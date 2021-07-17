<?php
include("adminpercials/session.php");
include ("../pertials/db.php");

$catogory = $_POST["name"];
$targets = "../uploads/";
$file_path = $targets . basename($_FILES["picture"]['name']);
$file_name = $_FILES['picture']['name'];
$file_temp = $_FILES['picture']['tmp_name'];
$file_store = "../uploads/" . $file_name;
move_uploaded_file($file_temp, $file_store);




$query = "INSERT INTO catagories(name,pictures) VALUES ('$catogory','$file_path')";
$connection->query($query);

include ("./categories.php")


?>