const switchToDarkMode = () => {

const moonIcon = document.querySelector('.fa-moon')
const links = document.querySelector('a')
const submitButton = document.querySelector('input[type="submit"')
const inputFileField = document.querySelector('input[type="file"')
document.body.classList.toggle('dark-mode')
if(document.body.classList.contains('dark-mode')){
  moonIcon.style.color = "white"
  links.style.color="white"
  submitButton.classList.toggle('submit-mode_dark')
  inputFileField.classList.toggle('submit-mode_dark')
}

else {
  moonIcon.style.color = "#000000"
  links.style.color="black"
submitButton.classList.remove('submit-mode_dark')
inputFileField.classList.remove('submit-mode_dark')
}

}
