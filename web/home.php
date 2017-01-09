<html>
    <head>
        <title>Home</title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <link rel="stylesheet" href="stylesheets/shared-all.css">
        <link rel="stylesheet" href="stylesheets/home-index-profile.css">
        
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

        <img class="logo" src="assets/logo.png"/>

        <nav>
            <ul>
                <li class="list-nav" style="margin-right: .7em; font-size: 20px;"><a class="link-nav" href="home.php">Home</a></li>
                <li class="list-nav" style="margin-right: .7em; font-size: 20px;"><a class="link-nav" href="profile.php">Profile</a></li>
                <li class="logout list-nav" style="margin-right: .7em; font-size: 20px;"><a class="link-nav" href="logout.php"> Logout </a></li>
            </ul>
        </nav>

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