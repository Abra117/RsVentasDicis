const contenedor= document.querySelector(".contenedor"),
      signup=document.querySelector(".signup-text"),
      login=document.querySelector(".login-link");



  signup.addEventListener("click",( )=>{
      contenedor.classList.add("active")
  });   
  
  login.addEventListener("click",( )=>{
    contenedor.classList.remove("active");
});    