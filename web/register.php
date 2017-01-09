<html>

    <head>
        <meta charset='utf-8'>
        <title>Register</title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <link rel="stylesheet" href="stylesheets/shared-all.css">

        <style>

            body {
                background-image: url("assets/registerBackground.jpeg");
                background-repeat: no-repeat;
                background-size: cover;
            }

            .body-container {
                min-width: 1550px;
                min-height: 1000px;
                margin-left: auto;
                margin-right: auto;
                position: fixed;
            }

            .container {
                opacity: .75;
                display: flex;
                background-color: #1a98e6;
                width: 35em;
                height: 20em;
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                margin: auto;
                text-align: center;
                align-items: center;
                justify-content: center;
                border-radius: 5%;
                border: 5px solid black;
                color: white;
                font-family: 'montserrat';

            }

            form {
                vertical-align: middle;
            }

            h1 {
                font-size: 48px;
                text-align: center;
                margin-top: 2.5em;
                font-family: 'montserrat', 'verdana';
            }

            a{
                text-decoration: none;
                color: white;
                border: 2px solid black;
                padding: .25em;
                font-size: 12px;
            }

            a:hover {
                border: 2px solid white;
            }

        </style>
    </head>

    <body>
    <div class="body-container">

        <div class="container">
            <h2 style="position: absolute; margin-top: -4.5em;">Register</h2>

            <form action="register.php" method="POST">
                Enter Username: <input type="text" name="username" required="required" /> <br/>
                </br>
                Enter Password: <input type="password" name="password" required="required" /> <br/>
                </br>
                <input style="margin-right: 1em; font-family: 'montserrat'; background: white;" type="submit" value="Register"/> <a href="index.php">Home</a>
            </form>
        </div>

        <footer></footer>

    </div>

        <script>

            const container = document.querySelector('.body-container');
            container.style.minWidth = `${window.outerWidth - 15}px`;
            container.style.minHeight = `${window.outerHeight - 100}px`;
        </script>

        <script src="scripts/shared-all.js"></script>

    </body>
</html>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
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
        
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);
        
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
            $result = mysqli_query($db, "INSERT INTO users (username, password) VALUES ('$username', '$hashedPass')");

            if($result) {
                Print '<script>alert("Registration Successful!");</script>';
                Print '<script>window.location.assign("login.php");</script>';              
                mysqli_close($db);
            } else {
                Print mysqli_error($db);
                }
       
        }
}


?>