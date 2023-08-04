const toggleBtn = document.getElementsByClassName('toggle-button')[0];
const navbarLinks = document.getElementsByClassName('navbar-links')[0];

toggleBtn.addEventListener('click',  () => {
    navbarLinks.classList.toggle('active');
})

const categoryBtn = document.getElementById('category-btn');
const dropdownMenu = document.getElementsByClassName('dropdown-menu');

dropdownMenu[0].addEventListener('mouseover', () => {   
  
    dropdownMenu[0].style.opacity = '1';
    dropdownMenu[0].style.visibility = 'visible';
    categoryBtn.style.background = 'black';
   
})

dropdownMenu[0].addEventListener('mouseleave', () => {

    dropdownMenu[0].style.opacity = '0';
    dropdownMenu[0].style.visibility = 'hidden';
    categoryBtn.style.background = 'whitesmoke';

})
