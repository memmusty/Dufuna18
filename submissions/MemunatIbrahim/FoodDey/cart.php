<?php
session_start();
//add new food to cart using the food id
if(isset($_GET['id'])){
    $items = $_GET['id'];
    array_push($_SESSION['cart'],$items);
    header('location: menu.php?success');
}else{
    header('location: menu.php?failed');
}
?>