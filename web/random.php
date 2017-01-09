<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <link rel="stylesheet" href="stylesheets/shared-all.css">

        <script src="scripts/workoutData.js"></script>

        <style>

            body {
                background-size: cover;
                background-repeat: no-repeat;
            }

            #back {
                float: left;
                margin-left: 20px;
                margin-top: 20px;
            }

            img {
                position: absolute;
                opacity: .75;
                height: 50px;
                width: 50px;
            }

            img:hover {
                margin-top: -5px;
                margin-left: -5px;
                height: 60px;
                width: 60px;
            }


            h1 {
                text-align: center;
                font-family: 'montserrat';
                font-size: 48px;
                color: white;
                opacity: 1;
                font-weight: bold;
            }

            #workout-container {
                text-align: center;
                color: black;
                max-width: 500px;
                margin-left: auto;
                margin-right: auto;
                font-size: 18px;
                font-family: 'montserrat';
                position: relative;
                z-index: 1;
                border-radius: 5%;
                font-weight: bold;
            }

            .background {
                position: absolute;
                background-color: azure;
                z-index: -1;
                opacity: .35;
                width: 100%;
                height: 100%;
                border-radius: 5%;
            }

            #condition {
                padding-top: 1em;
            }

            #workoutPara {
                padding-bottom: 1em;
            }

        </style>
    </head>

    <body>
    <div class="body-container">

        <a href="home.php" id="back"><img src="assets/backArrow.png"/></a>

        <h1 id="title"></h1>
        
        <div id="workout-container">
            <div class="background"></div>
            <h2 id="condition"></h2>
            <p id="workoutPara"></p>
        </div>

        <footer></footer>
    </div>

        <script>
           var workoutData = [];
           for(var i = 0; i < workouts.length; i++) {
               workouts[i]['title'] = titles[i]['title'];
               workoutData.push(workouts[i]);
           }

           const container = document.querySelector('#workout-container');
           const title = document.querySelector('#title');
           const condition = document.querySelector('#condition');
           const workoutPara = document.querySelector('#workoutPara');
         

           let index = Math.floor(Math.random() * workoutData.length);
           
           title.innerText = workoutData[index].title;
           workoutText = workoutData[index].workout.split('\n');
           workoutText.shift();

           condition.innerText = workoutText.shift() + ':';
           workoutPara.innerText = workoutText.join('\n');

           //set random background image  
           document.body.style.backgroundImage = `url(assets/workoutImages/${String(Math.floor(Math.random() * (10-1) + 1))}.jpg)`;

           
        
        </script>


        <script src="scripts/shared-all.js"></script>
    </body>
</html>