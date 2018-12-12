<?php
    $id=$_GET['id'];
        require 'db.php';
       
            $sql = "update orders set resolved=1 where id='$id'";
            $result = mysqli_query($conn, $sql);
            //Check if account was created
            if (!$result) {
                die("Error: " . $sql . "<br>" . mysqli_error($conn));
            }
            else{        
             header('Location:home.php?success');
            }
            //Close the connection
            mysqli_close($conn);
?>