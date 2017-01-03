<html>
    <head>
        <title>Home</title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- link randomscript.js -->

        <style>

            body {
                background-image: url("assets/homebackground.jpeg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            
            a{
                text-decoration: none;
                color: white;
                font-size: 20px;
            }

            a:hover {
                color: black;
            }

            .nav {
                width: 20em;
                height: 7em;
                background-color: #1a98e6;
                border: 2px solid black;
                color: white;
                font-family: 'montserrat';
                float: right;
                display: flex;
                align-items: center;
                text-align: center;
                margin-top: 20px;
                margin-right: 20px;

            }

            li {
                display: inline;
                margin-right: .7em;
            }

            img {
                margin-left: 20px;
                margin-top: 20px;
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

        <?php
            session_start();
            if($_SESSION['user']) {

            } else {
                header("location: index.php");
            }

            $user = $_SESSION['user'];
        ?>


    <body>

        <img src="assets/logo.png"/>

        <div class="nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li class="logout"><a href="logout.php"> Logout </a></li>
            </ul>
        </div>

        <button id="generate-button" class="button"><a>Generate Workout</a></button>

        
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
</html>