<?php
session_start();
include("../pertials/db.php");
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $query = "SELECT * FROM customers WHERE username='$email' AND password = '$password'";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name']; 
    if($email==$row['username'] AND $password == $row['password'])
    {   
        echo "<script>
    
    alert('Log in Successful');
    window.location.href='../index.php';
    </script>";
    }
    else
    {
            echo "<script>
    
    alert('Invalid ! Username and Password');
    window.location.href='.../customer.php';
    </script>";
     

    }


}