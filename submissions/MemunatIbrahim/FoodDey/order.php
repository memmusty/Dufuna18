<?php
session_start();
require 'db.php';
if(isset($_POST['checkout'])){
    $cus_id=$_SESSION['user_id'];
    $number=$_POST['number'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $total=$_POST['total'];
    $resolved=0;
    //create a new order
        $sql = "INSERT INTO orders VALUES (null,null,'$cus_id','$number', '$street', '$city', '$country', '$total','$resolved')";
        $result = mysqli_query($conn, $sql);
        //Check for errors
        if (!$result) {
            die("Error: " . $sql . "<br>" . mysqli_error($conn));
        }
        else{  
            $last_id = mysqli_insert_id($conn); //gets the order id
            $sqql = "select * from food";
            $rresult = mysqli_query($conn, $sqql);
            $count=array_count_values( $_SESSION['cart']);
            while($rrow=mysqli_fetch_array($rresult,MYSQLI_NUM)){ //create an order detail for each food in the cart
                if (in_array($rrow[0], $_SESSION['cart'])) {
                    $id=$rrow[0];
                    $price=$rrow[5]*$count[$id];
                    $insert="INSERT INTO order_details VALUES (null,'$last_id','$id', '$count[$id]','$price')"; 
                    $resultt = mysqli_query($conn, $insert);
                    //Check for errors
                    if (!$resultt) {
                        die("Error: " . $sql . "<br>" . mysqli_error($conn));
                    }
                }
            }
            $_SESSION['cart']= array(); //clear cart array
            header('Location:menu.php?order_success');
        }
        //Close the connection
        mysqli_close($conn);

    
}