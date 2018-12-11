<?php
if(isset($_POST['register'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $uname=$_POST['uname'];
    $pword=$_POST['pword'];
    require 'db.php';
   
        $sql = "INSERT INTO user VALUES (null, '$uname', '$fname', '$lname', '$email', '$pword')";
        $result = mysqli_query($conn, $sql);
        //Check for errors
        if (!$result) {
            die("Error: " . $sql . "<br>" . mysqli_error($conn));
        }
        else{        
         header('Location:index.php?success');
        }
        //Close the connection
        mysqli_close($conn);

    
}
if(isset($_POST['login'])){
    $uname=$_POST['uname'];
    $pword=$_POST['pword'];
    require 'db.php';
   
        $sql = "select * from user where username='$uname' and password= '$pword'";
        $result = mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($result,MYSQLI_NUM);
        //Check for errors
        if($row[1]== $uname and $row[5]== $pword)
		{
            header("location:menu.php");
        }
        else{        
            echo "An error occured while logging you in";
        }
        //Close the connection
        mysqli_close($conn);

    
}
?>