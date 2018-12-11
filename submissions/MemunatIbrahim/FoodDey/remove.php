<?php
session_start();
if(isset($_GET['id'])){
    $items = $_GET['id'];
    $_SESSION['cart']=array_diff($_SESSION['cart'],array($items));
    header('location: cartList.php?success');
}else{
    header('location: menu.php?failed');
}
?>