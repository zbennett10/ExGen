 <html>
    <head>
        <title>Profile</title>

        <style>

            a{
                text-decoration: none;
                color: white;
                padding: .25em;
            }

            a:hover {
                color: black;
            }

            .nav {
                width: 100%;
                height: 3em;
                background-color: silver;
                border: 2px solid black;
            }

            li {
                display: inline;
                margin-right: 1em;
            }

        </style>
    </head>
 
 
        <?php
            session_start();
            if($_SESSION['user']) {

            } else {
                header("location: index.php");
            }

            $user = $_SESSION['user'];
            
        ?>

    <body>

        <div class="nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>

        <p>Profile Page</p>

        <form action="" method="POST">
            Enter Username: <input type="username" name="username" required="required" /> <br/>
            <input style="margin-right: 1em;" type="submit" value="Delete Profile"/>
                </br>
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
        $bool = true;

        $result = mysqli_query($db, "SELECT * from users");
        while($row = mysqli_fetch_array($result)) { //checks each row in the user table for an existing username of same value
            $user_table = $row['username'];
            if($username == $user_table) {
                

               $id_query = mysqli_query($db, "SELECT id FROM users WHERE username='$username' LIMIT 1");
            $id = mysqli_fetch_array($id_query)[0];

            $result = mysqli_query($db, "DELETE FROM users WHERE id='$id'");

            if($result) {
                Print '<script>alert("Profile Deleted");</script>';
                mysqli_close($db);
                Print '<script>window.location.assign("logout.php");</script>';              
            } else {
                Print mysqli_error($db);
                }
       
            }
        }

        if(!$bool) {//if existing username of same value of input doesn't exist
            
        mysqli_close($db);
                Print '<script>alert("Wrong Username");</script>';
        }
    }

?>

