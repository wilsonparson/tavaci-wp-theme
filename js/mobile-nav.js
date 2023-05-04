{
  const hamburgerMenu = document.querySelector('[data-js="open-mobile-nav"]')
  const closeMobileNavButton = document.querySelector(
    '[data-js="close-mobile-nav"]'
  )

  hamburgerMenu.addEventListener('click', openMobileNav)
  closeMobileNavButton.addEventListener('click', closeMobileNav)

  function openMobileNav() {
    document.querySelector('#mobile-nav').classList.add('open')
  }

  function closeMobileNav() {
    document.querySelector('#mobile-nav').classList.remove('open')
  }

  const mql = window.matchMedia('(min-width: 550px)')

  mql.addEventListener('change', event => {
    if (event.matches) {
      document.querySelector('#mobile-nav').classList.remove('open')
    }
  })
}
