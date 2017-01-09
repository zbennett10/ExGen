<!DOCTYPE html>
<html>
    <head>
        <title>Login/Register</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <link rel="stylesheet" href="stylesheets/shared-all.css">
        <link rel="stylesheet" href="stylesheets/home-index-profile.css">
        <link rel="stylesheet" href="stylesheets/index.css">
        
    </head>

    <body>
    <div class="body-container">
       
        
          <image class="logo" src="assets/logo.png"/>
    

            <nav>
                <ul>
                    <li class="list-nav"><a class="link-nav" href="login.php">Login</a></li>
                    <li class="list-nav"><a class="link-nav" href="register.php">Register</a></li>
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