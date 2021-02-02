var button = document.querySelector(".menu");
var navList = document.querySelector(".nav-list");
var dropdownRecipes = document.querySelector(".dropdown-recipes");
var dropdownContent = document.querySelector(".dropdown-content");
var dropdownUser = document.querySelector(".dropdown-user");
var userLinks = document.querySelector(".user-links");
button.addEventListener("click", function () {
  navList.classList.toggle("open");
});
dropdownRecipes.addEventListener("click", function () {
  dropdownContent.classList.toggle("show");
});
dropdownUser.addEventListener("click", function () {
  userLinks.classList.toggle("show");
});