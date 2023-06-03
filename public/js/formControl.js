const genderRadios = document.querySelectorAll('.gender-labels-hidden')
const genderInputs = document.querySelectorAll('.gender-inputs')
const employeeRadio = document.querySelector('.signup-employee #employee')
const employeeLabel = document.querySelector('.employee-label')
// const employeeInput = document.querySelector('.signup_employee .employee-input')
const employeeInput = document.querySelector('#employee')
const employeeCheckbox = document.querySelector(
   '.signup-employee .checkbox-ball'
)

genderInputs.forEach(input =>
   input.addEventListener('change', () => {
      genderRadios.forEach(el => el.classList.toggle('radio-checked'))
   })
)
employeeRadio.addEventListener('change', e => {
   if (employeeInput.value === 'user') employeeInput.value = 'doctor'
   else employeeInput.value = 'user'
   employeeLabel.classList.toggle('active')
   employeeCheckbox.classList.toggle('active')
})
employeeLabel.addEventListener('click', e => {
   if (employeeInput.value === 'user') employeeInput.value = 'doctor'
   else employeeInput.value = 'user'
   employeeLabel.classList.toggle('active')
   employeeCheckbox.classList.toggle('active')
   s
})
