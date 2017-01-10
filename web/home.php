<html>
    <head>
        <title>Home</title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <link rel="stylesheet" href="stylesheets/shared-all.css">
        <link rel="stylesheet" href="stylesheets/home-index-profile.css">
        <link rel="stylesheet" href="stylesheets/home.css">
        
        <!-- link randomscript.js -->
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

        <button id="generate-button" class="button"><a>Generate Workout</a></button>

        
        <footer></footer>
            
    </div>

        <!-- external scripts -->
       <script src="scripts/home.js"></script>
       <script src="scripts/shared-all.js"></script>
    </body>
</html>