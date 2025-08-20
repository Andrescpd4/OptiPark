// js/register.js

document.addEventListener('DOMContentLoaded', function() {
var form = document.getElementById('formRegistro');
if (form) {
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(form);
        fetch('controllers/register.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
        var msg = document.getElementById('registroMsg');
        if (data.success) {
            msg.style.color = 'green';
            msg.textContent = data.message;
        form.reset();
        } else {
            msg.style.color = 'green';
            msg.textContent = data.message;
        }
    })
    });
}
});
