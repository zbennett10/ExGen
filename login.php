<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h2>Login</h2>
        <a href="ExGenView.php">Home<br/><br/>
        <form action="checklogin.php" method="POST">
           Enter Username: <input type="text" name="username" required="required" /> <br/>
           Enter password: <input type="password" name="password" required="required" /> <br/>
           <input type="submit" value="Login"/>
        </form>
    </body>
</html>