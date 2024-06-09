function togglePopup(formType) {
    const overlay = document.getElementById('popupOverlay');
    overlay.classList.toggle('show');

    if (overlay.classList.contains('show')) {
        let formURL = '';
        if (formType === 'borrow') {
            formURL = 'borrowform.php';
        } else if (formType === 'return') {
            formURL = 'returnform.php';
        }

        // Load the form content via AJAX
        fetch(formURL)
            .then(response => response.text())
            .then(data => {
                document.getElementById('popupContent').innerHTML = data;
            });
    } else {
        document.getElementById('popupContent').innerHTML = '';
    }
}
