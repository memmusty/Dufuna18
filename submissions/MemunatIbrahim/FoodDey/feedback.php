<?php
session_start();
require 'db.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=mysql_real_escape_string($_POST['message']);
    //create a new order
        $sql = "INSERT INTO feedback VALUES (null,'$name','$email', '$message')";
        $result = mysqli_query($conn, $sql);
        //Check for errors
        if (!$result) {
            die("Error: " . $sql . "<br>" . mysqli_error($conn));
        }
        else{
            header('Location:about.php?success');
        }
        //Close the connection
        mysqli_close($conn);

    
}