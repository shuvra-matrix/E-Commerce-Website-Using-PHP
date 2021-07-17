<?php
    session_start();
    $quantity=$_POST['quantity'];
    if(isset($_POST['update']))
    {
        foreach($_SESSION['cart'] as $key=>$value)
        {
        if ($value['item_name'] == $_POST['item_name']) {
            $_SESSION['cart'][$key]['quentity']=$quantity;
            echo "<script>
            alert('item update');
            window.location.href='shoping-cart.php';
            </script>";
            }
        }
    }


?>