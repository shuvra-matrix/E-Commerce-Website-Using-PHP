<?php

include ("../pertials/db.php");

$email = $_POST["email"];
$message = $_POST["msg"];
$query = "INSERT INTO contact(email,msg) VALUES ('$email','$message')";
$connection->query($query);

?>