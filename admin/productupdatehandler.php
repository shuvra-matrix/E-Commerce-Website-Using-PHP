<?php
include("adminpercials/session.php");
include("../pertials/db.php");
if(isset($_POST['submit']))
{

    $new_id = $_POST['from_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $catagory_id = $_POST['category'];
    $targets = "../uploads/";
    $file_path = $targets . basename($_FILES["picture"]['name']);
    $file_name = $_FILES['picture']['name'];
    $file_temp = $_FILES['picture']['tmp_name'];
    $file_store = "../uploads/" . $file_name;
    move_uploaded_file($file_temp, $file_store);

    $query = "UPDATE products SET name='$name',price='$price',description='$desc',pictures='$file_path',catagory_id='$catagory_id' WHERE id='$new_id'";
    $result = mysqli_query($connection,$query);

    if($result)
    {
        header('location: productshow.php');
    }
    else
    {
        header('location: index.php');
    }



}




?>