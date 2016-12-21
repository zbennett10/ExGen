<html>
    <head>
        <title>Home</title>

        <style>
            header {
                background-color: cadetblue;
                width: 100%;
                height: 25em;
                text-align: center;
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
        <header>ExGen - Free Workout Generator</header>
            <a href="logout.php"> Logout </a>
            
        
    </body>
</html>