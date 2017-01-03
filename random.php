<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <script src="Assets/workoutData.js"></script>

        <style>
            h1 {
                text-align: center;
                font-family: 'montserrat';
                font-size: 48px;
            }

            #workout-container {
                max-width: 500px;
                margin-left: auto;
                margin-right: auto;
                background-color: cadetblue;
                font-size: 18px;
                font-family: 'montserrat';
            }
        </style>
    </head>

    <body>
        <h1 id="title"></h1>
        
        <div id="workout-container">
            <h2 id="condition"></h2>
            <p id="workoutPara"></p>
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
        
        </script>


        
    </body>
</html>