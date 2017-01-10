//configures page to display username at head of page
const user = "<?php echo $user; ?>";
const header = document.createElement('header');
const userElement = document.createElement('h3');
const containerDiv = document.querySelector('.body-container');

userElement.innerText = user;
header.innerText = `Welcome`;
header.appendChild(userElement);
containerDiv.appendChild(header);
            
//body container configuration
const container = document.querySelector('.body-container');
container.style.minWidth = `${window.outerWidth - 15}px`;
container.style.minHeight = `${window.outerHeight - 100}px`;


//shows and hides delete profile form on user click
const deleteButton = document.querySelector('#deleteButton');
const deleteForm = document.querySelector('#deleteForm');

deleteButton.onclick = function() {
    return deleteForm.style.display === 'none' ? deleteForm.style.display = 'block' : deleteForm.style.display = 'none';
} 