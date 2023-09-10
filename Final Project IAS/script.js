// Function to validate the login form
function validateLoginForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "" || password === "") {
        alert("Both username and password are required!");
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}

// Function to validate the sign-up form
function validateSignupForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (username === "" || email === "" || password === "") {
        alert("All fields are required!");
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}

// Attach the validation functions to the form submit events
document.getElementById("login-form").onsubmit = validateLoginForm;
document.getElementById("signup-form").onsubmit = validateSignupForm;