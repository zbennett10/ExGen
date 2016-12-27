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
                width: 20em;
                height: 7em;
                position: absolute;
                top: 25px;
                right:20px;
                text-align: center;
                align-items: center;
                justify-content: center;
                border-radius: 5%;

            }

           .register-span {
               float: right;
               margin-right: 1.5em;
               margin-top: -2em;
                
            }

            a {
                text-decoration: none;
                color: white;
                font-size: 24px;
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
                top: 25px;
                margin-left: 1.5em;
                font-weight: bold;
                font-family: 'roboto';
                font-size: 70px;
            }

            #generate-button {
                display: block;
                position: absolute;
                margin:auto;
                vertical-align: middle;
                top:0;
                bottom:0;
                right:0;
                left:0;
                width: 20em;
                height: 5em;
                background: royalblue;
                border: 2px solid black;
                font-size: 24px;
                font-weight: bold;
            }

            button:hover {
                transform: scale(1.1);
            }

        </style>
    </head>

    <body>
        

        <h1>ExGen<span style="font-weight: bold; font-family: arial; font-size: 24px; margin-left: 1em;">Free Workout Generator</span></h1>
        

            <div class="container">
                <div>
                    <a style="margin-right: 1em;" href="login.php">Login</a>
                    <a href="register.php">Register</a>
                </div>
            </div>

            <span class="register-span">Login or Register to customize your workout</span>

        <button id="generate-button" class="button">Generate Workout</button>

    </body>
</html