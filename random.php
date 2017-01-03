<!DOCTYPE html>
<html>
    <head>
        <!-- link randomscript.js -->
        <script src="Assets/workoutData.js"></script>

        <style>
            h1 {
                text-align: center;
            }

            #workout-container {
                margin: auto;

            }
        </style>
    </head>

    <body>
        
        
        <div id="workout-container">

        </div>

        <script>
           var workoutData = [];
           for(var i = 0; i < workouts.length; i++) {
               workouts[i]['title'] = titles[i]['title'];
               workoutData.push(workouts[i]);
           }

           workoutData.forEach(obj => {
               console.log(obj.workout);
           });

           const container = document.createElement('div');
           const title = document.createElement('h1');
           
           document.body.appendChild(title);
           document.body.appendChild(container);
           
           title.innerText = workoutData[4].title;
           container.innerText = workoutData[4].workout;
        
        </script>


        
    </body>
</html>