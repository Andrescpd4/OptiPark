//Mostrar el modal
document.addEventListener('DOMContentLoaded', function() {
var loginBtn = document.getElementById('loginBtn');
var loginModal = document.getElementById('loginModal');
var closeLoginModal = document.getElementById('closeLoginModal');
if(loginBtn && loginModal && closeLoginModal) {
    loginBtn.onclick = function() {
    loginModal.style.display = 'block';
    };
    closeLoginModal.onclick = function() {
    loginModal.style.display = 'none';
    };
    window.onclick = function(event) {
    if (event.target == loginModal) {
        loginModal.style.display = 'none';
    }
    };
}
});

document.addEventListener('DOMContentLoaded', function() {
var SignBtn = document.getElementById('SignBtn');
var SignModal = document.getElementById('SignModal');
var closeSignModal = document.getElementById('closeSignModal');
if(SignBtn && SignModal && closeSignModal) {
    SignBtn.onclick = function() {   
    SignModal.style.display = 'block';
    };
    closeSignModal.onclick = function() {
    SignModal.style.display = 'none';
    };
    window.onclick = function(event) {
    if (event.target == SignModal) {
        SignModal.style.display = 'none';
    }
    };
}
});   
