const burger = document.querySelector(".burger");
const nav = document.querySelector(".nav-links");
const navLinks =document.querySelectorAll(".nav-links li");
const back=document.querySelector(".back");

burger.addEventListener("click",()=>{
  nav.classList.toggle("nav-active");



  navLinks.forEach((link,index)=>{
    if(link.style.animation) {
      link.style.animation= "";
    }
    else {
      link.style.animation=`navLinksFade .5s ease forwards ${index/7+0.4}s`;
    }
  });
  burger.classList.toggle("toggle");
 
});

const imageTotalNumber = 12,
      imageListElement =document.getElementById('imagelist');
      mainImageElement= document.getElementById('mainImage');

for (let i = 0; i < imageTotalNumber; i++) {
  const liElement = document.createElement('li');
  liElement.style.backgroundImage = `url(img/item${i+1}.jpg)`
  imageListElement.appendChild(liElement)
}
