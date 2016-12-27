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
                width: 25em;
                height: 10em;
                position: absolute;
                top: 25px;
                right:20px;
                text-align: center;
                align-items: center;
                justify-content: center;
                border-radius: 5%;

            }

           span {
               position: relative;
               float: right;
               z-index: 1;
               top:-10px;
               margin-right: 4em;
                
            }

            a {
                text-decoration: none;
                color: white;
                font-size: 36px;
                font-family: 'montserrat';
                vertical-align: middle;
                border: 4px solid black;
                padding: .5em;
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

            <span>Login or Register to customize your workout</span>

        

    </body>
</html