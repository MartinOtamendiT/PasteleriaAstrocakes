const loaderContainer = document.querySelector('.loader-container');

window.addEventListener('load', () => {
    // ...
});

window.addEventListener('load', () => {
    loaderContainer.style.display = 'none';
});

window.addEventListener('load', () => {
    loaderContainer.classList.add('loader-container-hidden');
});


window.addEventListener('load', () => {
    loaderContainer.parentElement.removeChild(loaderContainer);
});