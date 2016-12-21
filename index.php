<!DOCTYPE html>
<html>
    <head>
        <title>Login/Register</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        
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

            a {
                text-decoration: none;
                color: white;
                font-size: 36px;
                font-family: 'montserrat';
                vertical-align: middle;
                border: 4px solid black;
                padding: 2em;
            }

            a:hover {
                color: black;
                border: 4px solid white;
            }

            h1 {
                text-align: center;
                font-weight: bold;
                font-family: 'roboto';
                font-size: 48px;
            }

            h3 {
                text-align: center;
                text-decoration: underline;
                font-size: 24px;
            }

        </style>
    </head>

    <body>
        <h1>ExGen</h1>
        <h3>Free Workout Generator</h3>

        <div class="container">
            <div>
                <a style="margin-right: 1em;" href="login.php">Login</a>
                <a href="register.php">Register</a>
            </div>
        </div>
    </body>
</html