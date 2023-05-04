{
  function setColorScheme(isDark) {
    if (isDark) {
      document.documentElement.classList.add('dark-theme')
    } else {
      document.documentElement.classList.remove('dark-theme')
    }
  }

  const colorSchemeQuery = window.matchMedia('(prefers-color-scheme: dark)')

  setColorScheme(colorSchemeQuery.matches)

  colorSchemeQuery.addEventListener('change', event => {
    const prefersDarkMode = event.matches
    setColorScheme(prefersDarkMode)
  })
}
