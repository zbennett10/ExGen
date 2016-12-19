<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <h2>Register</h2>
        <a href="ExGenView.php">Home</a><br/>
        <form action="register.php" method="POST">
           Enter Username: <input type="text" name="username" required="required" /> <br/>
           Enter Password: <input type="password" name="password" required="required" /> <br/>
           <input type="submit" value="Register"/>
        </form>
    </body>
</html>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
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
        $bool = true;

        $result = mysqli_query($db, "SELECT * from users");
        while($row = mysqli_fetch_array($result)) { //checks each row in the user table for an existing username of same value
            $user_table = $row['username'];
            if($username == $user_table) {
                $bool = false;
                mysqli_close($db);
                Print '<script>alert("Username has been taken!");</script>';
                Print '<script>window.location.assign("register.php");</script>';
   
            }
        }

        if($bool) {//if existing username of same value of input doesn't exist
            $result = mysqli_query($db, "INSERT INTO users (username, password) VALUES ('$username', '$password')");

            if($result) {
                Print '<script>alert("Registration Successful!");</script>';
                echo "Your username is $username";
                mysqli_close($db);
            } else {
                Print mysqli_error($db);
                }
       
        }
}


?>