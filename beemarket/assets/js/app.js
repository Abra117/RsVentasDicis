
console.log('conectado')
const Info= document.querySelectorAll(".info");
const cardInfo=document.querySelector(".cardinfo")
const close=document.querySelector(".close")



Info.forEach(function(element){
   element.addEventListener("click",()=>{
    cardInfo.style.display="flex"
   })
})

close.addEventListener("click",()=>{
    cardInfo.style.display="none"
})

