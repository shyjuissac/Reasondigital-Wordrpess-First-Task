


const icon =  document.querySelector(".icon")

 


icon.addEventListener('click', function(){
    let myMenu = document.querySelector('.nav-sub');
    
    if(myMenu.style.display === 'block'){
        
        myMenu.style.display = "none";
        icon.classList.add('fa-bars');
        icon.classList.remove('fa-times');
    } else {
        myMenu.style.display = "block";
        icon.classList.add('fa-times');
        icon.classList.remove('fa-bars');
    }
})
