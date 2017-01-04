<html>
    <head>
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <style>
            body {
                background-image: url("assets/loginBackground.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }

            .container {
                opacity: .85;
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

            footer {
                opacity: .5;
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

        </style>
    </head>

    <body>

        <div class="container">
            <h2 style="position: absolute; margin-top: -4.5em;">Login</h2> </br>
            </br>
            <form action="validatelogin.php" method="POST">
                Enter Username: <input type="text" name="username" required="required" /> </br>
                </br>
                Enter Password: <input type="password" name="password" required="required" /> </br>
                </br>
                <input style="margin-right: 1em; background: white;" type="submit" value="Login"/> 
        
                <a href="register.php">Need to register?</a>
            </form>
        </div>

        <footer></footer>

        <script>
            const footerElement = document.querySelector('footer');
            footerElement.innerText = `ExGen - Zachary Bennett © ${(new Date()).getFullYear()}`;
        </script>

    </body>
</html>