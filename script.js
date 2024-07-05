// Get the login button from the navbar
const loginBtn = document.getElementById('loginBtn');

// Get the login container
const loginContainer = document.getElementById('loginContainer');

// Hide the login container initially
loginContainer.style.display = 'none';

// Add event listener to the login button
loginBtn.addEventListener('click', function(event) {
    // Prevent the default action of the link
    event.preventDefault();

    // Toggle the display of the login container
    if (loginContainer.style.display === 'none') {
        loginContainer.style.display = 'block';
    } else {
        loginContainer.style.display = 'none';
    }
});

