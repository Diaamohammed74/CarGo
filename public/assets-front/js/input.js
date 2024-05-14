document.addEventListener('DOMContentLoaded', function() {
    var inputs = document.querySelectorAll('.form-control');
    inputs.forEach(function(input) {
        input.addEventListener('focus', function() {
            input.parentNode.classList.add('focused');
        });
        input.addEventListener('blur', function() {
            input.parentNode.classList.remove('focused');
        });
    });
});
