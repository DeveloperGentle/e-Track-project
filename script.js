const topBtn = document.querySelector('.goTop');//button for scrolling to the top of the page
scrollTrigger = () => {

 const elements = document.querySelectorAll('.second');
   const windowHeight = window.innerHeight;//height of view
 

 function checkPosition() {
   for (let element of elements) {
     
     const positionFromTop = element.getBoundingClientRect().top;/*element position from the top
     of the current view height*/

     if (positionFromTop - windowHeight <= -650)
     /*if distance of element from current view height is 650px pushed on top*/ {
      element.style.transform='scale(0.4,0.4)'//for testing
      
       
     }
   }

   if(document.body.scrollTop < 200) {
    topBtn.style.translate = '300px'//removing the goTop button if user is already in the top
   }

   else {
    topBtn.style.translate = '0px'//putting it back when user leaves the top
   }
 }

 window.addEventListener('scroll', checkPosition);//listening for scrolls to activate the checkPosition function
 
};

 scrollTrigger();

 
topBtn.addEventListener('click', () => {
  document.body.scrollTop = 0;//taking user to the top of the page
 }
 )
