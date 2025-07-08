document.addEventListener("DOMContentLoaded", () => {
  const hamburgerMenu = document.querySelector("._hamburger")
  const hamburgerContent = document.querySelector("._hamburger-content")
  let hamburgerOpened = false

  hamburgerMenu.addEventListener('click', () => {
    if (hamburgerOpened === false) {
      animate(hamburgerContent, { height: "300px" })
      hamburgerOpened = true
    } else {
      animate(hamburgerContent, { height: "0" })
      hamburgerOpened = false
    }
  })
})