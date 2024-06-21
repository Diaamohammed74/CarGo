
    document.addEventListener("DOMContentLoaded", function () {
        const toggleButton = document.querySelector('.navbar-toggler');
        const navbarMenu = document.querySelector('#navbarNav');

        toggleButton.addEventListener('click', function () {
            navbarMenu.classList.toggle('show');
        });
    });


  