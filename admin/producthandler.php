<?php

include ("../pertials/db.php");

$productname = $_POST["name"];
$price= $_POST["price"];
$desc =  $_POST["desc"];
$category = $_POST["category"];


$targets = "../uploads/";
$file_path = $targets.basename($_FILES["picture"]['name']);
$file_name = $_FILES['picture']['name'];
$file_temp = $_FILES ['picture']['tmp_name'];
$file_store = "../uploads/".$file_name;
move_uploaded_file($file_temp,$file_store);


$query = "INSERT INTO products(name,price,description,catagory_id,pictures) VALUES('$productname','$price','$desc','$category','$file_path')";

$connect = mysqli_query($connection,$query);

if($connect)
{
    ?>
    <script>alert("Update Successfully")</script>
    <?php include("./products.php"); 
    
}
else
{?>
 ?>
    <script>alert("Update Successfully")</script>
    <?php include("./products.php"); 

}

?>