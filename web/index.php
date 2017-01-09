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


            li {
                display: inline;
                margin-right: 2em;
            }

            li:nth-child(1) {
                margin-left: 1.3em;
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
            }

            a:hover {
                color: black;
            }

            
        </style>
    </head>

    <body>
    <div class="body-container">
       
        
          <image class="logo" src="assets/logo.png"/>
    

            <nav>
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </nav>

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