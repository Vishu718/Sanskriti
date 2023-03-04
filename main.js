//responsive navbar
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if(bar){
    bar.addEventListener('click', () =>{
        nav.classList.add('active');
    })
}

if(close){
   close.addEventListener('click', () =>{
        nav.classList.remove('active');
    })
}
//animation on scroll
AOS.init({
        
    once: true
  });


  //for button active in navbar

 // Add active class to the current button (highlight it)
var header = document.getElementById("navbar");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}

