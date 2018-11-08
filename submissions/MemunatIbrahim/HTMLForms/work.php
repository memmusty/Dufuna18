<?php
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mail=$_POST['mail'];
    $pword=$_POST['pword'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];
    $conn = mysqli_connect('localhost', 'user', '1234', 'registration');
    if(!is_numeric($phone)){
       echo "please enter a valid phone number, go <a href='index.html'> back</a>";
    }
    else{
        // Check that connection exists
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "INSERT INTO members VALUES (null, '$fname', '$lname', '$mail', '$pword','$phone','$gender','$country',null)";
        $result = mysqli_query($conn, $sql);
        //Check for errors
        if (!$result) {
            die("Error: " . $sql . "<br>" . mysqli_error($conn));
        }
        else{        
         header('Location:success.html');
        }
        //Close the connection
        mysqli_close($conn);

    }
}
?>