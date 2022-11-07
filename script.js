

const topBtn = document.querySelector('.goTop');//button for scrolling to the top of the page
const nav = document.querySelector('nav');
const sectionClicks = document.querySelectorAll('ul li');
const menuBar = document.querySelector('.menuBar');
const mobileMenu = document.querySelector('.mobile-ul');
const mobileLinks = document.querySelectorAll('.mobileLink');
const feature = document.querySelector('.first');
let desc1 = document.querySelector('.one');
let desc2 = document.querySelector('.two');
let desc3 = document.querySelector('.three');
const featureHead = document.querySelector('.head');
let second= document.querySelectorAll('.second')
let footerP = document.querySelector('.footer-p');
const contactFlex = document.querySelector('.contact-icons-flex');
menuBar.addEventListener('click',() => {
 if(mobileLinks[0].style.height != 'initial') {
  mobileLinks.forEach(link => {
   link.style.height = 'initial'
  link.style.overflow = 'visible'
  link.style.marginBottom = '12px'
  })
  
 }

 else {
  mobileLinks.forEach(link => {
   link.style.height = '0px'
  link.style.overflow = 'hidden'
  link.style.marginBottom = 'initial'
  })
 }
})

scrollTrigger = () => {

 const elements = document.querySelectorAll('.moveRight');
 const elements2 = document.querySelectorAll('.moveLeft');
   const windowHeight = window.innerHeight;//height of view
 
   

 function checkPosition() {
   for (let i=0;i<elements.length;i+=1) {
     
    
     const positionFromTop = elements[i].getBoundingClientRect().top;/*element position from the top
     of the current view height*/

     if (positionFromTop - windowHeight <= -200)
     /*if distance of element from current view height is 650px pushed on top*/ {
      elements[i].style.animation = 'moveTopSmooth 0.8s ease-out'
      elements[i].style.transform = 'translateY(0px)'
       elements[i].style.opacity = 1
      elements2[i].style.animation = 'moveTopSmooth 0.8s ease-out'//for testing
      elements2[i].style.transform = 'translateY(0px)'
      elements2[i].style.opacity = 1
      
       
     }
   }

   if(footerP.getBoundingClientRect().top - windowHeight <= -10) {
   footerP.style.animation = 'moveToRight 0.8s ease-out'
   footerP.style.transform = 'translateX(0vw)'
    footerP.style.opacity = 1
   }

   if(contactFlex.getBoundingClientRect().top - windowHeight <= -20) {
    contactFlex.style.animation = 'moveTopSmooth 0.8s ease-out'
    contactFlex.style.transform = 'translateY(0px)'
     contactFlex.style.opacity = 1
    }

   if(feature.getBoundingClientRect().top - windowHeight <= -400) {
    feature.style.opacity = 1;
    feature.style.animation = 'showElement 0.7s ease-out';
    desc1.style.transform = 'translateY(0px)'
    desc2.style.transform = 'translateY(0px)'
    desc3.style.transform = 'translateY(0px)'
   
    desc1.style.animation = 'flyDown 1s linear'
 desc2.style.animation = 'flyDown 1s linear'
    desc3.style.animation = 'flyDown 1s linear'
    featureHead.style.transform = 'translateY(0px)'
    featureHead.style.animation = 'flyDown 1s linear'
   }

   

   if(document.body.scrollTop < 200) {
    topBtn.style.translate = '300px'//removing the goTop button if user is already in the top
   }

   else {
    topBtn.style.translate = '0px'//putting it back when user leaves the top
   }


   if(document.body.scrollTop > 185) {
nav.style.position = 'sticky';
nav.style.animation = 'navbarScrollEffect 1s  ease-out'
   }

   else {
    nav.style.position = 'relative';
    nav.style.animation = 'none'
    
    
   }
 }

 window.addEventListener('scroll', checkPosition);//listening for scrolls to activate the checkPosition function
 
};

 scrollTrigger();

 
topBtn.addEventListener('click', () => {
  document.body.scrollTop = 0;//taking user to the top of the page
 }
 )

 sectionClicks[0].addEventListener('click', () => {
  document.body.scrollTop = 0;

 })

 sectionClicks[1].addEventListener('click', () => {
  document.body.scrollTop = 750;
 })

 sectionClicks[2].addEventListener('click', () => {
  document.body.scrollTop = 2640;
 })

 sectionClicks[3].addEventListener('click', () => {
  document.body.scrollTop = 3000;
 })