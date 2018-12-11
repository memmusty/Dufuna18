<?php
session_start();
if(isset($_GET['id'])){
    $items = $_GET['id'];
    array_push($_SESSION['cart'],$items);
    // for($x = 0; $x < count($_SESSION['cart']); $x++) {
    //     echo $_SESSION['cart'][$x];
    //     echo "<br>";
    // }
    header('location: menu.php?success');
}else{
    header('location: menu.php?failed');
}
?>