document.getElementById('bookNowBtn').addEventListener('click', function() {
    document.getElementById('popupDiv').classList.add('show');
});

document.getElementById('closePopup').addEventListener('click', function() {
    document.getElementById('popupDiv').classList.remove('show');
});

