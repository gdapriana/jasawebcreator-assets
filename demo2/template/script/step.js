document.addEventListener("DOMContentLoaded", () => {
  const allStepCards = document.querySelectorAll('#_step ._card')
  const screen1 = document.querySelector('#_step ._screen-1')
  const screen2 = document.querySelector('#_step ._screen-2')
  const screen3 = document.querySelector('#_step ._screen-3')

  allStepCards.forEach((card, i) => {
    card.addEventListener('mouseenter', () => {
      card.classList.add('_active')
      card.style.backgroundColor = "rgba(255,255,255,1)"

      if (i === 0) {
        screen1.classList.remove('_dnone')
        screen2.classList.add('_dnone')
        screen3.classList.add('_dnone')
      } else if (i === 1) {
        screen1.classList.add('_dnone')
        screen2.classList.remove('_dnone')
        screen3.classList.add('_dnone')
      } else {
        screen1.classList.add('_dnone')
        screen2.classList.add('_dnone')
        screen3.classList.remove('_dnone')
      }
    })
    card.addEventListener('mouseleave', () => {
      card.classList.remove('_active')
      card.style.backgroundColor = "rgba(255,255,255,0.5)"

      screen1.classList.remove('_dnone')
      screen2.classList.add('_dnone')
      screen3.classList.add('_dnone')
    })

  })
})
