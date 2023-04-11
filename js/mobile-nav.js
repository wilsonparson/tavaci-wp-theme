{
  const hamburgerMenu = document.querySelector('[data-js="open-mobile-nav"]')
  const mobileNav = document.querySelector('#mobile-nav')
  const closeMobileNavButton = document.querySelector(
    '[data-js="close-mobile-nav"]'
  )

  hamburgerMenu.addEventListener('click', openMobileNav)
  closeMobileNavButton.addEventListener('click', closeMobileNav)

  function openMobileNav() {
    mobileNav.classList.add('open')
  }

  function closeMobileNav() {
    mobileNav.classList.remove('open')
  }

  const mql = window.matchMedia('(min-width: 550px)')

  mql.addEventListener('change', event => {
    if (event.matches) {
      mobileNav.classList.remove('open')
    }
  })
}
