//configures page to be fixed when window is resized
const container = document.querySelector('.body-container');
container.style.minHeight = `${window.outerHeight - 100}px`;
container.style.minWidth = `${window.outerWidth - 15}px`;   
  
//event listeners
const workoutButton = document.querySelector('#generate-button');
    workoutButton.onclick = function() {
    location.href = "random.php";
}
             
