document.addEventListener("DOMContentLoaded", function(){
    
    const checkActive = window.location.pathname;
    const navLinks = document.querySelectorAll('.navLink');
    const profPic = document.getElementById("profile");
    const dropDownList = document.querySelector(".dropDownContainer");

    navLinks.forEach(link => {
        if(link.href.includes(checkActive)) {
            link.classList.add('active');
        }
    });

    profPic.addEventListener("click", () => dropDownList.classList.toggle("pressed"));
});