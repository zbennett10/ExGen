 <html>
    <head>
        <meta charset='utf-8'>

        <title>Profile</title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <link rel="stylesheet" href="stylesheets/shared-all.css">
        <link rel="stylesheet" href="stylesheets/home-index-profile.css">
        <link rel="stylesheet" href="stylesheets/profile.css">

        
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
    <div class="body-container">

        <img class="logo" src="assets/logo.png"/>

        <nav>
            <ul>
                <li class="list-nav" style="margin-right: .7em;"><a class="link-nav" href="home.php" style="font-size: 20px;">Home</a></li>
                <li class="list-nav" style="margin-right: .7em;"><a class="link-nav" href="profile.php" style="font-size: 20px;">Profile</a></li>
                <li class="logout list-nav" style="margin-right: .7em;"><a class="link-nav" href="logout.php" style="font-size: 20px;"> Logout </a></li>
            </ul>
        </nav>

        <button id="deleteButton">Delete Profile</button>

            <form action="" method="POST" id="deleteForm" style="display: none;">
                Enter Username: <input type="username" name="username" required="required" /> <br/>
                <input type="submit" value="Delete Profile" id="deleteSubmit" style="margin-top: .5em;"/>
                </br>
            </form>

        <div id="coming">
            <h1>More Functionality Coming Soon!</h1>
        </div>

        <footer></footer>

    </div>

        <script>
            //configures page to display username at head of page
            const user = "<?php echo $user; ?>";
            const header = document.createElement('header');
            const userElement = document.createElement('h3');
            const containerDiv = document.querySelector('.body-container');

            userElement.innerText = user;
            header.innerText = `Welcome`;
            header.appendChild(userElement);
            containerDiv.appendChild(header);
        </script>

        <!-- external scripts -->
        <script src="scripts/profile.js"></script>
        <script src="scripts/shared-all.js"></script>
    </body>


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

