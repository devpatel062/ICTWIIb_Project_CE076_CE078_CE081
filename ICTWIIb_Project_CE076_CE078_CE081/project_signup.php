<?php

require_once "config (1).php";
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
// Variables to be inserted into the table
    $name = $_POST['name'];
if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['mail'])) {
    //regular expression for email validation
    $email = $_POST['mail'];
    
    if($_POST['pass'] == $_POST['confpass']){
        $pass = $_POST['pass'];
        $address = $_POST['address'];
        if( preg_match("/^[0-9]{10}/", $_POST['number']) ){
            $phoneno = $_POST['number'];

        // Sql query to be executed
        $sql = "INSERT INTO `user_detail` (`name`,`email`,`password`,`address`,`phone no.`) VALUES('$name' , '$email' , '$pass', '$address' , '$phoneno')";
        $result = mysqli_query($conn, $sql);
        

    // Add a new trip to the Trip table in the database
            if($result){
                //echo "The record has been inserted successfully successfully!<br>";
                header('Location: login.html');
            }
            else{
                echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            }
        }
        else {
            echo "Your Mobile No is invalid";
        }
    }
    else{
        echo "Password are not matched";
    }
}
else {
    echo "Your Email Address is invalid"  ;
}
?>