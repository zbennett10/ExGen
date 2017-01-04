<?php
    session_start();
    
    $db = mysqli_connect("127.0.0.1", "root", "",  "exgen_db");
    if (!$db) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            mysqli_close($db);
            exit;
        }

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $query = mysqli_query($db, "SELECT * from users WHERE username = '$username'");

    $usernameExists = mysqli_num_rows($query);
    $table_users = "";
    $table_password = "";

    if($usernameExists > 0) {
        while($row = mysqli_fetch_assoc($query)) {
            $table_users = $row['username'];
            $table_password = $row['password'];
        }
        if($username == $table_users && (password_verify($password, $table_password) == true)) {
                $_SESSION['user'] = $username;
                header("location: profile.php");
            
            
        }
        else {
            Print '<script>alert("Incorrect Password!");</script>';
            Print '<script>window.location.assign("login.php");</script>';
        }
    }
    else {
        Print '<script>alert("Incorrect Username!");</script>';
        Print '<script>window.location.assign("login.php");</script>';
    }

?>