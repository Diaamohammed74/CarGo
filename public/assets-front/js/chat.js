document.getElementById('sendIcon').addEventListener('click', function() {
    // Handle the icon click event
    const textAreaValue = document.getElementById('textAreaExample').value;
    alert('Message sent: ' + textAreaValue);
});
