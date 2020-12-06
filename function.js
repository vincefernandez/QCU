var cta = document.querySelector(".cta");
var i = document.querySelector("i");
var check = 2;

cta.addEventListener('click', function(e){
    var text = e.target.nextElementSibling;
    var loginText = e.target.parentElement;
    text.classList.toggle('show-hide');
    loginText.classList.toggle('expand');
    if(check == 0)
    {
        
        cta.innerHTML = "Log In Now!";
     
        check++;
    }
    else
    {
     
        cta.innerHTML = "Get Started!";
       
        check = 0;
    }
})


  
