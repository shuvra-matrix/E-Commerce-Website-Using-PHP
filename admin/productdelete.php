<?php
include("./adminpercials/session.php");
include("../pertials/db.php");

$id = $_GET["pro_id"];

$query = "DELETE FROM products WHERE id='$id'";

$result = mysqli_query($connection,$query);

if($result)
{
    header("location: productshow.php");
}
else
{
    header("location: ./index.php");
}