//configures page elements to a fixed position when window is resized
const container = document.querySelector('.body-container');
container.style.minWidth = `${window.outerWidth - 15}px`;
container.style.minHeight = `${window.outerHeight - 100}px`;