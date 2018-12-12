<?php
session_start();
//only allow users that are logged out to register or login
if(isset($_SESSION['user_id'])){		
    header('Location:login.php?logout');	
}
else{
    //Register user
    if(isset($_POST['register'])){
        require 'db.php';
        $fname=trim(strtoupper($_POST['fname']));
        $lname=trim(strtoupper($_POST['lname']));
        $email=trim(strtolower($_POST['email']));
        $uname=trim(strtolower($_POST['uname']));
        $pword=trim(strtoupper($_POST['pword']));
        $querry=mysqli_query($conn,"select * from user where username='$uname'");
        $query=mysqli_query($conn,"select * from user where email='$email'");
        $count=mysqli_num_rows($query);
        $countt=mysqli_num_rows($querry);
        //check if email exists
        if($count!=0)
        {
                header('location:login.php?email_exists');
        }
        //check if username exists
        else if($countt!=0)
        {
                header('location:login.php?user_exists');
        }
        //creates new user account
        else
        {
            $sql = "INSERT INTO user VALUES (null, '$uname', '$fname', '$lname', '$email', '$pword')";
            $result = mysqli_query($conn, $sql);
            //Check if account was created
            if (!$result) {
                die("Error: " . $sql . "<br>" . mysqli_error($conn));
            }
            else{        
             header('Location:login.php?success');
            }
            //Close the connection
            mysqli_close($conn);
        }
        
    }
    //log user in
    if(isset($_POST['login'])){
        $uname=trim(strtolower($_POST['uname']));
        $pword=trim(strtoupper($_POST['pword']));
        require 'db.php';
       
            $sql = "select * from user where username='$uname' and password= '$pword'";
            $result = mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($result,MYSQLI_NUM);
            //Check for correct user information
            if($row[1]== $uname and $row[5]== $pword)
            {
                $_SESSION['user_id']=$row[0];
                $_SESSION['username']=$row[1];
                //check if user was shopping before logging in
                if(empty($_SESSION['cart'])){
                    header("location:menu.php");
                }
                else{
                    header('location:checkout.php');
                }
            }
            else{        
                header('Location:login.php?error');
            }
            //Close the connection
            mysqli_close($conn);
    
        
    }
}
?>