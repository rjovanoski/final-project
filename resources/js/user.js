let toggle = document.querySelector('.menu');
let dropdown = document.querySelector('.dropdown-menu');
let main = document.querySelector('.profile');

toggle.addEventListener("click", () =>{
dropdown.classList.toggle("open");
main.classList.toggle("down"); 
});