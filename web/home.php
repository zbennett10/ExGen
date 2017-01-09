<html>
    <head>
        <title>Home</title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <link rel="stylesheet" href="stylesheets/shared-all.css">
        
        <!-- link randomscript.js -->

        <style>
            html {
                height: 100%;
            }

            body {
                background-image: url("assets/homeBackground.jpeg");
                background-repeat: no-repeat;
                background-size: cover;
            }

             .body-container {
                min-width: 1500px;
                min-height: 710px;
                margin-left: auto;
                margin-right: auto;
                position: fixed;
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
                opacity: .75;
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
    <div class="body-container">

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
            
        </div>
        
        

        <script>
            const workoutButton = document.querySelector('#generate-button');
            workoutButton.onclick = function() {
                location.href = "random.php";
            }
             
            //  const containerDiv = document.querySelector('.body-container');
            //  console.log(containerDiv.style.minWidth);

             const container = document.querySelector('.body-container');
            container.style.minHeight = `${window.outerHeight - 100}px`;
            container.style.minWidth = `${window.outerWidth - 15}px`;

            console.log(container.style.minHeight)
            
        </script>
        
       <script src="scripts/shared-all.js"></script>
    </body>
</html>