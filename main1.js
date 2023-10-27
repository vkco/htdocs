const display = document.querySelector('.display')
const buttons = document.querySelectorAll('.display')

const hadleButtonsIntraction = (event) => {
  console.log(event)
}
//button.forEachListener('click', hadleButtonsIntraction ); {
//}); возмжно ошибка
buttons.forEach(button => button.addEventListener('click', handleButtonsInteraction)); // иссправленый вариант
