<?php
    session_start();
    //check if the user is logged in before checking out
    if(!isset($_SESSION['user_id'])){
        header('location:login.php?order');
    }
    else{
        header('location:checkout.php');
    }
	
?>