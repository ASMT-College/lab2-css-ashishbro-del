<?php
// login.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
        <h2>Login</h2>
        <form id="loginForm" action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <div class="error" id="usernameError"></div>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <div class="error" id="passwordError"></div>

            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </div>
    
    <div class="footer">
        <p>&copy; Ashish 2025</p>
    </div>
</body>
<script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        let valid = true;

        // Clear previous errors
        document.getElementById("usernameError").innerText = "";
        document.getElementById("passwordError").innerText = "";

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
