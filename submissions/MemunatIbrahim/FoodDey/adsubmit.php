<?php
    session_start();
    //log admin in
    if(isset($_POST['adlogin'])){
        $uname=trim(strtoupper($_POST['uname']));
        $pword=trim(strtoupper($_POST['pword']));
        require 'db.php';
       
            $sql = "select * from admin where username='$uname' and password= '$pword'";
            $result = mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($result,MYSQLI_NUM);
            //Check for correct user information
            if($row[1]== $uname and $row[2]== $pword)
            {
                $_SESSION['admin']=$row[0];
                header("location:home.php");
            }
            else{        
                header('Location:adlogin.php?error');
            }
            //Close the connection
            mysqli_close($conn);
    
        
    }
?>