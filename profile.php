 <html>
    <head>
        <title>Profile</title>
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
        <p>Profile Page</p>
    </body>

</html>