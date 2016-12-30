 <html>
    <head>
        <title>Profile</title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <style>

            a{
                text-decoration: none;
                color: white;
                font-size: 20px;
            }

            a:hover {
                color: black;
            }

           .nav {
                width: 20em;
                height: 7em;
                background-color: #1a98e6;
                border: 2px solid black;
                color: white;
                font-family: 'montserrat';
                float: right;
                display: flex;
                align-items: center;
                text-align: center;
                margin-right: 20px;
                margin-top: 20px;

            }

            li {
                display: inline;
                margin-right: .7em;
            }

            img {
                float: left;
                margin-left: 20px;
                margin-top: 20px;
            }

            footer {
                clear: both;
                position: absolute;
                height: 1.25em;
                bottom: 0;
                left: 0;
                right: 0;
                padding: 1rem;
                text-align: center;
                background-color: #efefef;
                font-size: 18px;
            }

            header {
                text-align: center;
                font-size: 60px;
                font-family: 'montserrat';
                margin-left: auto;
                margin-right: auto;
                margin-top: 20px;
            }

            h3 {
                font-weight: bold;
                margin-top: 0;
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

        <img src="assets/logo.png"/>

        

        <div class="nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li class="logout"><a href="logout.php"> Logout </a></li>
            </ul>
        </div>

        <script>
            const user = "<?php echo $user; ?>";
            const header = document.createElement('header');
            const userElement = document.createElement('h3');
            const body = document.querySelector('body');

            userElement.innerText = user;
            header.innerText = `Welcome`;
            header.appendChild(userElement);
            body.appendChild(header);
            
        </script>

        <form action="" method="POST">
            Enter Username: <input type="username" name="username" required="required" /> <br/>
            <input style="margin-right: 1em;" type="submit" value="Delete Profile"/>
                </br>
        </form>

        <footer></footer>

        <script>
            const footerElement = document.querySelector('footer');
            footerElement.innerText = `ExGen - Zachary Bennett © ${(new Date()).getFullYear()}`;
        </script>

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

