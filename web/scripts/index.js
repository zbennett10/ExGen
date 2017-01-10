//container that fixes content during window resize
const container = document.querySelector('.body-container');
container.style.minWidth = `${window.outerWidth - 15}px`;
container.style.minHeight = `${window.outerHeight - 100}px`;

//event handlers
const workoutButton = document.querySelector('#generate-button');
workoutButton.onclick = function() {
    location.href = "random.php";
}

