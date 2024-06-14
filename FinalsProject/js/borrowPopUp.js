document.addEventListener("DOMContentLoaded", function(){
    const items = document.getElementById("labelDrop");
    const dropItems = document.querySelector(".dropDownItems");
    const checkbox = document.querySelectorAll(".item");

    items.addEventListener("click", ()=> dropItems.classList.toggle("clicked"));

});