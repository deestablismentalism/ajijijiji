document.addEventListener("DOMContentLoaded", function() {
    const button = document.querySelectorAll('.editBtn');
 
    button.forEach(button => {
        button.addEventListener("click", function() {
            const row = this.closest('tr');
            const editedRow = row.nextElementSibling;
 
            if (editedRow && editedRow.classList.contains('edited')) {
                row.innerHTML = editedRow.innerHTML;
            }
        });
    });
 });