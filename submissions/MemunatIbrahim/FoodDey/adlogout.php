<?php
    session_start();
    session_unset(); //clear all session variables
	session_destroy(); //end session
	header('location:adlogin.php');
	
?>