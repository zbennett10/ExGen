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

    document.body.style.backgroundImage = `url(assets/workoutImages/${String(Math.floor(Math.random() * (10-1) + 1))}.jpg)`;