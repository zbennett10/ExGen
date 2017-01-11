<!DOCTYPE html>
<html>
    <head>
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- stylesheets -->
        <link rel="stylesheet" href="stylesheets/shared-all.css">
        <link rel="stylesheet" href="stylesheets/random.css">

        <!-- workout data reference -->
        <script src="scripts/workoutData.js"></script>
    </head>

    <body>
    <div class="body-container">

        <a href="home.php" id="backLink">
            <img id="backArrow" src="assets/backArrow.png"/>
        </a>

        <h1 id="title"></h1>
        
        <button id="generateButton" onclick="generateWorkout()" mousedown="changeOpacity('.50')">New</button>

        <div id="workout-container">
            <div class="background"></div>
            <h2 id="condition"></h2>
            <p id="workoutPara"></p>
        </div>

        <footer></footer>
    </div>

        <!-- external scripts -->
        <script src="scripts/randomscript.js"></script>
        <script src="scripts/shared-all.js"></script>
    </body>
</html>