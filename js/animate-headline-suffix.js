animateHeadlineSuffix()

function animateHeadlineSuffix() {
  const headlineSuffix = document.querySelector('[data-js="headline-suffix"]')
  const wordCycler = headlineSuffix.querySelector('[data-js="word-cycler"]')
  const words = wordCycler.dataset.words.split(/,\s*/)

  function updateWord() {
    function getNextWord(words, currentWord) {
      const currentIndex = words.indexOf(currentWord)
      return currentIndex === words.length - 1
        ? words[0]
        : words[currentIndex + 1]
    }

    const stripTrailingPeriod = word => word.split('.')[0]
    const withTrailingPeriod = word => word + '.'

    const nextWord = getNextWord(
      words,
      stripTrailingPeriod(wordCycler.textContent)
    )
    wordCycler.textContent = withTrailingPeriod(nextWord)
  }

  const keyframes = [{ opacity: 1 }, { opacity: 0 }]

  const baseOptions = {
    duration: 3000,
    easing: 'ease-out',
  }

  const initialOptions = {
    delay: 5000,
  }

  const forwardsOptions = {
    direction: 'normal',
    delay: 3000,
  }

  const backwardsOptions = {
    direction: 'reverse',
  }

  const STATUSES = {
    INITIAL: 'initial',
    FORWARDS: 'forwards',
    BACKWARDS: 'backwards',
  }

  function animate(status) {
    const options = {
      ...baseOptions,
      ...(status === STATUSES.INITIAL ? initialOptions : {}),
      ...(status === STATUSES.FORWARDS ? forwardsOptions : {}),
      ...(status === STATUSES.BACKWARDS ? backwardsOptions : {}),
    }

    headlineSuffix.animate(keyframes, options)

    const animation = headlineSuffix.getAnimations()[0]

    animation.finished.then(() => {
      const wordIsInvisible = status !== STATUSES.BACKWARDS

      if (wordIsInvisible) {
        updateWord()
      }

      const nextStatus = [STATUSES.INITIAL, STATUSES.FORWARDS].includes(status)
        ? STATUSES.BACKWARDS
        : STATUSES.FORWARDS

      animate(nextStatus)
    })
  }

  animate(STATUSES.INITIAL)
}
