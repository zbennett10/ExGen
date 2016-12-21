<html>
    <head>
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <style>
            body {
                background-color: cadetblue;
            }

            .container {
                display: flex;
                background-color: goldenrod;
                width: 50em;
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

            }

            form {
                vertical-align: middle;
            }

            h1 {
                font-size: 48px;
                text-align: center;
            }

            a{
                text-decoration: none;
                color: white;
                border: 2px solid black;
                padding: .25em;
            }

            a:hover {
                color: black;
                border: 2px solid white;
            }
        </style>
    </head>

    <body>

        <h1>Login</h1>
       

        <div class="container">
            <form action="validatelogin.php" method="POST">
                Enter Username: <input type="text" name="username" required="required" /> <br/>
                </br>
                Enter password: <input type="password" name="password" required="required" /> <br/>
                </br>
                <input style="margin-right: 1em;" type="submit" value="Login"/>  <a href="index.php">Home</a><br/>
            </form>
        </div>
        
    </body>
</html>