<?php

    include 'db_connection.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
    }

    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";

    $result = $conn->query($query);
    if($result->num_rows == 1){
        header("Location: success.html");
        exit();
    }
    else{
        header("Location: error.html");
        exit();
    }
    $conn->close();
?>  