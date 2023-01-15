const div = document.querySelector('div');

const clickHandler = () =>{
  console.log('Clicked')
};
// div.onclick =  clickHandler
const clickHandler2 = () =>{
  console.log('Clicked2')
};

div.onclick = clickHandler;
div.onclick = clickHandler2;

div.addEventListener('click', clickHandler)
div.addEventListener('click', clickHandler2)
