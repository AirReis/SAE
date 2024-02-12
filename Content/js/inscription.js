
    function toggleForms() {
        var loginForm = document.getElementById('login-form');
        var signupForm = document.getElementById('signup-form');
        var loginToggle = document.getElementById('login-toggle');
        var signupToggle = document.getElementById('signup-toggle');

        if (loginForm.style.display === 'none') {
            loginForm.style.display = 'block';
            signupForm.style.display = 'none';
            loginToggle.style.fontWeight = 'bold';
            signupToggle.style.fontWeight = 'normal';
        } else {
            loginForm.style.display = 'none';
            signupForm.style.display = 'block';
            loginToggle.style.fontWeight = 'normal';
            signupToggle.style.fontWeight = 'bold';
        }
    }