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
    exit;
}

        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        echo "Username entered is: ". $username . "<br/>";
        echo "Password entered is: ". $password;
    }
?>