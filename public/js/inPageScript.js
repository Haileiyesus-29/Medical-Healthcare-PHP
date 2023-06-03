const navIconButton = document.querySelector('.nav-icon')
const headerElement = document.querySelector('header')

let isClosed = false
navIconButton &&
   navIconButton.addEventListener('click', () => {
      if (isClosed) {
         navIconButton.innerHTML = '<i class="fa-solid fa-bars"></i>'
         isClosed = false
      } else {
         navIconButton.innerHTML = '<i class="fa-solid fa-xmark"></i>'
         isClosed = true
      }
      headerElement.classList.toggle('show')
   })
