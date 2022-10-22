const swup = new Swup();


let menuBar = document.querySelector('.menuBar')
let dropDown = document.querySelector('.dropDown')



menuBar.addEventListener('click', function() {
if(dropDown.style.overflow === 'hidden') {
  
dropDown.style.height = '65px'
dropDown.style.overflow = 'visible'
}
else {
dropDown.style.height = '0%'
dropDown.style.overflow = 'hidden'
}
})





