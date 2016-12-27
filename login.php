<html>
    <head>
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <style>
            body {
                background-color: white;
            }

            .container {
                color: white;
                display: flex;
                background-color: #1a98e6;
                width: 35em;
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
                border: 5px solid black;
                font-family: 'montserrat';

            }

            form {
                vertical-align: middle;
            }

            h1 {
                font-family: 'montserrat';
                font-size: 48px;
                text-align: center;
                margin-top: 2.5em;
            }

            a{
                text-decoration: none;
                color: white;
                padding: .25em;
            }

            a:hover {
                color: black;
            }

            input {
                font-family: 'montserrat';
            }

        </style>
    </head>

    <body>


        <h1>Login</h1>
       

        <div class="container">
            <form action="validatelogin.php" method="POST">
                Enter Username: <input type="text" name="username" required="required" /> <br/>
                </br>
                Enter Password: <input type="password" name="password" required="required" /> <br/>
                </br>
                <input style="margin-right: 1em; background: white;" type="submit" value="Login"/> 
        
                <a href="register.php">Need to register?</a>
            </form>
        </div>

        
    </body>
</html>