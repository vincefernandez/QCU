var cta = document.querySelector(".cta");
var i = document.querySelector("i");
var check = 0;

cta.addEventListener('click', function(e){
    var text = e.target.nextElementSibling;
    var loginText = e.target.parentElement;
    text.classList.toggle('show-hide');
    loginText.classList.toggle('expand');
    if(check == 0)
    {
        cta.innerHTML = "<i class=\fa fa-chevron-down fa-2x\></i>";
        i.innerHTML = "  <i class=\fa fa-chevron-down fa-2x\></i>";
        cta.innerHTML = "Get Started!";
        cta.innerHTML.title ="Get Started!";
        check++;
    }
    else
    {
        i.innerHTML = "  <i class=\"fa fa-chevron-up fa-2x\></i>";
        cta.innerHTML = "<i class=\"fa fa-chevron-up fa-2x\></i>";
        cta.innerHTML = "LogIn Now!";
        cta.innerHTML.title ="Log In Now!";
        check = 0;
    }
})


  
