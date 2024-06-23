// Get input elements
var firstNameInput = document.getElementById("firstName");
var lastNameInput = document.getElementById("lastName");
var emailInput = document.getElementById("email");
var nationalIDInput = document.getElementById("nationId");
var passwordInput = document.getElementById("password");
var confirmPasswordInput = document.getElementById("conPassword");
var send = document.getElementById("send");

// Initialize an array to store information
var data = [];

// Local storage
if (localStorage.getItem("userData") !== null) {
  data = JSON.parse(localStorage.getItem("userData"));
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
      password: passwordInput.value,
    };

    // Log the information object

    // data.push(information);

    localStorage.setItem("userData", JSON.stringify(data));

    clearFields();

    // Redirect to the login page
    window.location.href = "index_login.html";
  } else {
    alert("Please enter valid first and last names.");
  }
}
// Function to clear fields after registration
function clearFields() {
  firstNameInput.value = "";
  lastNameInput.value = "";
  emailInput.value = "";
  nationalIDInput.value = "";
  passwordInput.value = "";
  confirmPasswordInput.value = "";
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
(pwShowHide = document.querySelectorAll(".eye-icon")),
  (links = document.querySelectorAll(".link"));
pwShowHide.forEach((eyeIcon) => {
  eyeIcon.addEventListener("click", () => {
    let pwFields =
      eyeIcon.parentElement.parentElement.querySelectorAll(".password");

    pwFields.forEach((password) => {
      if (password.type === "password") {
        password.type = "text";
        eyeIcon.classList.replace("bx-hide", "bx-show");
        return;
      }
      password.type = "password";
      eyeIcon.classList.replace("bx-show", "bx-hide");
    });
  });
});
// function loader(){
//     document.querySelector('.loader-container').classList.add('rotateOut');
//   }

//   function rotateOut() {
//     setInterval(loader, 3000);
// }

// window.onload = rotateOut;

document.addEventListener("DOMContentLoaded", function () {
  // Simulate a loading process
  setTimeout(function () {
    // After loading is complete, hide the loader
    let loader = document.getElementById("loader");
    if (loader) {
      loader.style.display = "none";
    }
  }, 5000); // 5 seconds delay for demonstration, adjust as needed
});

function swiperProducts() {
  const swiper = new Swiper(".swiper_products", {
    // Optional parameters
    loop: true,
    slidesPerView: 4,
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      1140: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
  });
}

function bestMachine() {
  const swiper = new Swiper(".swiper_machiens", {
    // Optional parameters
    loop: true,
    slidesPerView: 4,
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 2,
        spaceBetween: 24,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 24,
      },
      1140: {
        slidesPerView: 4,
        spaceBetween: 24,
      },
    },
  });
}
function problems() {
  const swiper = new Swiper(".swiper_problems", {
    // Optional parameters
    loop: true,
    slidesPerView: 5,
    
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 15,
        navigation: false,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: false,
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      1140: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
    },
    on: {
      init: function() {
        centerSlides();
      },
      resize: function() {
        centerSlides();
      }
    }
  });

  function centerSlides() {
    var slides = document.querySelectorAll('.swiper_problems .swiper-slide');
    var totalSlideWidth = 0;
    
    slides.forEach(function(slide) {
      totalSlideWidth += slide.offsetWidth;
    });
    
    var swiperWidth = document.querySelector('.swiper_problems').offsetWidth;
    
    if (totalSlideWidth < swiperWidth) {
      var extraSpace = (swiperWidth - totalSlideWidth) / 2;
      slides.forEach(function(slide) {
        slide.style.marginLeft = `${extraSpace / slides.length}px`;
        slide.style.marginRight = `${extraSpace / slides.length}px`;
      });
    } else {
      // slides.forEach(function(slide) {
      //   slide.style.marginLeft = '';
      //   slide.style.marginRight = '';
      // });
    }
  }
}

swiperProducts();
bestMachine();
problems();
