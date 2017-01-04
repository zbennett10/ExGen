<?php
    session_start();

    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $db_username = $url["user"];
    $db_password = $url["pass"];
    $db_name = substr($url["path"], 1);
    
    $db = mysqli_connect($server, $db_username, $db_password,  $db_name);
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
            
            
        } else{
            Print '<script>alert("Invalid Password");</script>';
            Print '<script>window.location.assign("login.php");</script>';
        }
            
    } else{
        Print '<script>alert("Invalid Username");</script>';
        Print '<script>window.location.assign("login.php");</script>';
    }

    

?>