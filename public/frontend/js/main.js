//Header scroll
let nav = document.querySelector(".navbar");
window.onscroll = function(){
    if(document.documentElement.scrollTop > 50){
        nav.classList.add("header-scrolled");
    }else{
        nav.classList.remove("header-scrolled");

    }
}
//nav hide
let navbar = document.querySelectorAll(".nav-link");
let navCollapse = document.querySelector(".navbar-collapse.collapse");
navBar.forEach(function(e){
    e.addEventListener("click", function(){
        navCollapse.classList.remove("show");
    })
})
//logout button//
document.getElementById('logoutButton').addEventListener('click',function()
{
    fetch('/logout',{
        method:'POST',
        headers:{
            'Content-Type':'application/json'
        }
    })
    .then(response=>{
        if(response.ok){
            window.location.href='login.html';
        }else{
            alert('Logout failed');
        }
    });
});
