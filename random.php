<!DOCTYPE html>
<html>
    <head>
        <!-- link randomscript.js -->
        <script src="Assets/workoutData.js"></script>
    </head>

    <body>
        <h1>Random Workout</h1>
        


        <script>
           var workoutData = [];
           for(var i = 0; i < workouts.length; i++) {
               workouts[i]['title'] = titles[i]['title'];
               workoutData.push(workouts[i]);
           }
            console.log(workoutData);
        </script>
    </body>
</html>