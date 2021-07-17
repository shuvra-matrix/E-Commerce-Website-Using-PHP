<?php
include("./adminpercials/head.php");
include("../pertials/db.php");
if (isset($_POST['login'])) 
{
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * from admins WHERE username='$email' AND password='$password'";
    $result = mysqli_query($connection, $query);
    $data = $result->fetch_assoc();

    $_SESSION['email']=$data['username'];
    $_SESSION['password']=$data['password'];
    if ($email = $data['username'] and $password = $data['password']) 
    {
        header('location: index.php');         
    } 
    else 
    {
        header('location: adminlogin.php');             
    }
}

?>
<div class="row">
    <div class="col-sm-4">

        <h1></h1>
    </div>
    <div class="col-sm-4">
        <div class="box box-info">
            <div class="box-title">
                <h3>Admin Login</h3>
            </div>
            <form class="form-horizontal" action="adminlogin.php" method="POST">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right" name="login">Sign in</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <div class="col-sm-4">



        </div>


    </div>