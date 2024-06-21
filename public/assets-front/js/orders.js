const statusSelect = document.querySelector("#status");
const formContainer = document.querySelector("#services");
const map = document.querySelector(".map");
const nots = document.querySelector(".nots_area");
const timeselection = document.querySelector(".time");
const dayselection = document.querySelector(".day");
nots.classList.remove("d-flex");
nots.classList.add("d-none");
dayselection.classList.add("d-none");
timeselection.classList.remove("d-block");
timeselection.classList.add("d-none");
statusSelect.addEventListener("change", () => {
  if (statusSelect.value === "onRoad" || statusSelect.value === null) {
    formContainer.style.display = "block";
    map.style.display = "block";
    nots.classList.remove("d-flex");
    nots.classList.add("d-none");
    timeselection.classList.remove("d-block");
    timeselection.classList.add("d-none");
    dayselection.classList.add("d-none");
  } else {
    formContainer.style.display = "none";
    map.style.display = "none";
    nots.classList.remove("d-none");
    nots.classList.add("d-flex");
    timeselection.classList.add("d-block");
    timeselection.classList.remove("d-none");
    dayselection.classList.remove("d-none");

  }
});
const servicesSelect = document.querySelector("#services option span");

