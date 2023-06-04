const genderRadios = document.querySelectorAll('.gender-labels-hidden')
const genderInputs = document.querySelectorAll('.gender-inputs')

genderInputs.forEach(input =>
   input.addEventListener('change', () => {
      genderRadios.forEach(el => el.classList.toggle('radio-checked'))
   })
)
