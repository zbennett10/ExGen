<html>
    <head>
        <title>Home</title>

        <style>
            header {
                background-color: cadetblue;
                width: 100%;
                height: 5em;
                text-align: center;
            
            }
            
            a{
                text-decoration: none;
                color: black;
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

            .logout {
                margin-left: auto;
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
                <li><a href="login.php">Login</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li class="logout"><a href="logout.php"> Logout </a></li>
            </ul>
        </div>

        <header>ExGen - Free Workout Generator</header>
            
            
        
    </body>
</html>