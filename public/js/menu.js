function displayMenu() {
  let nav = document.querySelector('nav');
    if (nav.style.display === "none") {
      nav.style.display = "block";
    } else {
      nav.style.display = "none";
    }
}

window.addEventListener("DOMContentLoaded", (event) => {
    let menu = document.getElementById('menu');
    let nav = document.querySelector('nav');
    console.log(window.innerWidth);
    if(window.innerWidth < 980){
      nav.style.display = 'none';
    }
    
    menu.addEventListener('click', displayMenu)
  });