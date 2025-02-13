<?php
// signup.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <a href="#">Logo</a>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <a href="#">Pods</a>
    </div>
    
    <div class="container">
        <h2>Sign Up</h2>
        <form id="signupForm" action="register.php" method="POST">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname">
            <div class="error" id="fullnameError"></div>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <div class="error" id="emailError"></div>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <div class="error" id="usernameError"></div>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <div class="error" id="passwordError"></div>

            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="index.php">Login</a></p>
    </div>
    
    <div class="footer">
        <p>&copy; Ashish 2025</p>
    </div>
</body>
<script>
    document.getElementById("signupForm").addEventListener("submit", function(event) {
        let valid = true;

        // Clear previous errors
        document.getElementById("fullnameError").innerText = "";
        document.getElementById("emailError").innerText = "";
        document.getElementById("usernameError").innerText = "";
        document.getElementById("passwordError").innerText = "";

        // Full Name validation
        let fullname = document.getElementById("fullname").value.trim();
        if (fullname.length < 4) {
            document.getElementById("fullnameError").innerText = "Full name must be at least 4 characters.";
            valid = false;
        }

        // Email validation
        let email = document.getElementById("email").value.trim();
        if (email === "" || !email.includes("@")) {
            document.getElementById("emailError").innerText = "Valid email is required.";
            valid = false;
        }

        // Username validation
        let username = document.getElementById("username").value.trim();
        if (username.length < 4) {
            document.getElementById("usernameError").innerText = "Username must be at least 4 characters.";
            valid = false;
        }

        // Password validation
        let password = document.getElementById("password").value.trim();
        if (password.length < 6) {
            document.getElementById("passwordError").innerText = "Password must be at least 6 characters.";
            valid = false;
        }

        if (!valid) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
</script>
</html>
