<!DOCTYPE html>
<html>
    <head>
        <title>Login/Register</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <link rel="stylesheet" href="stylesheets/shared-all.css">
        
        <style>
            html {
                height: 100%;
            }

            body {
                background-image: url("assets/indexBackground.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }

            .body-container {
                min-width: 1550px;
                min-height: 1000px;
                margin-left: auto;
                margin-right: auto;
                position: fixed;
            }


            .container {
                display: flex;
                background-color: #1a98e6;
                width: 20em;
                height: 7em;
                float: right;
                margin-top: 20px;
                margin-right: 20px;
                text-align: center;
                align-items: center;
                justify-content: center;
                border: 2px solid black;
                border-radius: 5%;
                opacity: .75;
            }

           .register-span {
               position: absolute;
               float: right;
               margin-top: 10em;
               font-family: 'montserrat';
            
            }

            aside {
                margin-right: -3.5em;
                float: right;
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

            .logo {
                margin-top: 20px;
                margin-left: 20px;
            }

            #generate-button {
                color: white;
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
                background: #1a98e6;
                border: 5px solid black;
                border-radius: 5%;
                font-size: 24px;
                font-weight: bold;
                opacity: .75;
            }

            #generate-button:hover {
                width: 20.5em;
                height: 5.5em;
            }

        </style>
    </head>

    <body>
    <div class="body-container">
       
        
          <image class="logo" src="assets/logo.png"/>
    

            <div class="container">
                <div>
                    <a style="margin-right: 1em;" href="login.php">Login</a>
                    <a href="register.php">Register</a>
                </div>
            </div>

            <aside><span class="register-span">Register to save workouts</span></aside>

        <button id="generate-button" class="button">Generate Workout</button>

        <footer></footer>

    </div>

        <script>
            const workoutButton = document.querySelector('#generate-button');
            workoutButton.onclick = function() {
                location.href = "random.php";
            }

            const container = document.querySelector('.body-container');
            container.style.minWidth = `${window.outerWidth - 15}px`;
            container.style.minHeight = `${window.outerHeight - 100}px`;
        </script>

        <script src="scripts/shared-all.js"></script>

    </body>
</html