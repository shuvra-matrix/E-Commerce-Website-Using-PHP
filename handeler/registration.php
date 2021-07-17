<?php

include ("../pertials/db.php");



if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['con_pass'];
if($password!=$confirm_pass)
{
    echo "<script>
    
    alert('password not match');
    window.location.href='../customer.php';
    </script>";
}
else
{
    $query = "SELECT * FROM customers WHERE username='$email'";
    $result = mysqli_query($connection,$query);
    if($row= mysqli_fetch_assoc($result)!=0)
    {
        echo "<script>
    
    alert('User alredy exist ');
    window.location.href='../customer.php';
    </script>";
    }
    else
    {
        $query = "INSERT INTO customers(name,username,password) VALUES('$name','$email','$password')";
        $result = mysqli_query($connection, $query);
        echo "<script>
    
    alert('Registration Successful');
    window.location.href='../customer.php';
    </script>";
    }



}

}

?>