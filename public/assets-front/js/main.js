// Get input elements
var firstNameInput = document.getElementById('firstName');
var lastNameInput = document.getElementById('lastName');
var emailInput = document.getElementById('email');
var nationalIDInput = document.getElementById('nationId');
var passwordInput = document.getElementById('password');
var confirmPasswordInput = document.getElementById('conPassword');
var send = document.getElementById('send');

// Initialize an array to store information
var data = [];

// Local storage
if (localStorage.getItem('userData') !== null) {
    data = JSON.parse(localStorage.getItem('userData'));
   
}

// Function to add data
function addData() {
  // event.preventDefault(); // Prevent form submission

  if (validateData()) {
      var information = {
          firstName: firstNameInput.value,
          lastName: lastNameInput.value,
          email: emailInput.value,
          nationalID: nationalIDInput.value,
          password: passwordInput.value
      };

      // Log the information object

      // data.push(information);

      localStorage.setItem('userData', JSON.stringify(data));

      clearFields();

      // Redirect to the login page
      window.location.href = "index_login.html";
  } else {
      alert("Please enter valid first and last names.");
  }
}
// Function to clear fields after registration
function clearFields() {
    firstNameInput.value = '';
    lastNameInput.value = '';
    emailInput.value = '';
    nationalIDInput.value = '';
    passwordInput.value = '';
    confirmPasswordInput.value = '';
}
// Function to validate data
function validateData() {
    var regex = /^[A-Z][a-z]{2,8}$/;

    var firstNameValid = regex.test(firstNameInput.value);
    var lastNameValid = regex.test(lastNameInput.value);
    var emailValid = validateEmail(emailInput.value);
    var nationalIDValid = validateNationalID(nationalIDInput.value);

    return firstNameValid && lastNameValid && emailValid && nationalIDValid;
}

// Function to validate email format
function validateEmail(email) {
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

// Function to validate national ID format
function validateNationalID(nationalID) {
    // Add your national ID validation logic here
    return true; // Dummy return for demonstration
}

// show password & hide
pwShowHide = document.querySelectorAll(".eye-icon"),
      links = document.querySelectorAll(".link");
pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password => {
            if(password.type === "password"){
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
        })
        
    })
}) 






  