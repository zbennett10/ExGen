<!DOCTYPE html>
<html>
    <head>
        <title>Login/Register</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        
        <style>
            body {
                background-image: url("assets/indexBackground.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }


            .container {
                display: flex;
                background-color: #1a98e6;
                width: 20em;
                height: 7em;
                position: absolute;
                top: 25px;
                right:55px;
                text-align: center;
                align-items: center;
                justify-content: center;
                border: 5px solid black;
                border-radius: 5%;
                opacity: .75;
            }

           .register-span {
               float: right;
               margin-right: 1.90em;
               margin-top: 9em;
               font-family: 'montserrat';
            
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
                margin-top: 25px;
                margin-left: 55px;
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
            }

            button:hover {
               opacity: .75;
               
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
        
          <image class="logo" src="assets/logo.png"/>
    

            <div class="container">
                <div>
                    <a style="margin-right: 1em;" href="login.php">Login</a>
                    <a href="register.php">Register</a>
                </div>
            </div>

            <span class="register-span">Login or Register to customize your workout</span>

        <button id="generate-button" class="button">Generate Workout</button>

        <footer></footer>

        <script>
             const footerElement = document.querySelector('footer');
            footerElement.innerText = `ExGen - Zachary Bennett © ${(new Date()).getFullYear()}`;
        </script>

        <script>
            const workoutButton = document.querySelector('#generate-button');
            workoutButton.onclick = function() {
                location.href = "random.php";
            }
        </script>

    </body>
</html