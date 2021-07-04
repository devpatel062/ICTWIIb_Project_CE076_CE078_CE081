<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'config (1).php';
    $email = $_POST["mail"];
    $pass = $_POST["pass"];

    $sql = "Select * from user_detail where email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $sql1 = "Select password from user_detail where email='$email'";
        $result1 = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_array($result1, MYSQLI_ASSOC);
        // $hash = $row['password'];
        if ($row['password'] == $pass) {
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            
            $_SESSION['username'] = $email;
            header("location: homepage.html");
        } else {
            echo "invalid password";
        }
    } else {
        echo "invalid details are given";
    }
}
