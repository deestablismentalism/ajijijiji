document.addEventListener("DOMContentLoaded", function(){
    const passwordValue = document.getElementById("password");
    const revealPassword = document.getElementById("show");
    const login = document.getElementById("login");

    function changeButton(event) {
        event.target.style.backgroundColor = "#ffffff";
        event.target.style.color = "#828282";
    }
    
    login.addEventListener("click", changeButton);

    document.addEventListener("change", function(){
        if(revealPassword.checked){
            passwordValue.type = "text";
        }
        else{
            passwordValue.type = "password";
        }
    }); 
});
