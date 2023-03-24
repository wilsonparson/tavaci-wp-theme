const hamburgerMenu = document.querySelector('#hamburger-menu')
const mobileNav = document.querySelector('#mobile-nav')
const closeMobileNavButton = document.querySelector('#close-mobile-nav')

hamburgerMenu.addEventListener('click', openMobileNav)
closeMobileNavButton.addEventListener('click', closeMobileNav)

function openMobileNav() {
  mobileNav.classList.add('open')
}

function closeMobileNav() {
  mobileNav.classList.remove('open')
}
