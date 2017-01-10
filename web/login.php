<html>
    <head>
        <meta charset='utf-8'>
        
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


        <link rel="stylesheet" href="stylesheets/shared-all.css">
        <link rel="stylesheet" href="stylesheets/login.css">

    </head>

    <body>
    <div class="body-container">

        <div class="container">
            <h2 style="position: absolute; margin-top: -4.5em;">Login</h2>
            
            <form action="validatelogin.php" method="POST">
                Enter Username: <input type="text" name="username" required="required" /> </br>
                </br>
                Enter Password: <input type="password" name="password" required="required" /> </br>
                </br>
                <input style="margin-right: 1em; background: white;" type="submit" value="Login"/> 
        
                <a href="register.php">Need to register?</a>
            </form>

            <h3 style="position: absolute; margin-top: 6em; display: none;">Invalid Username/Password</h3>
        </div>

        <footer></footer>

    </div>

        <!-- external scripts -->
        <script src="scripts/login.js"></script>
        <script src="scripts/shared-all.js"></script>
    </body>
</html>