<?php
    $conn = mysqli_connect('localhost', 'user', '1234', 'FoodDey');

        // Check that connection exists
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
?>