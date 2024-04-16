<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- My CSS -->
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>School Management System</title>

</head>

<body>

    <div class="login-container">
        <div class="login-logo">
            <img src="img/logo.png" alt="Logo">
            <span class="logo-text">ACLC College of Ormoc City, Inc.<br>Lilia Ave., Cogon, Ormoc City</span>
        </div>
        <form action="#" class="login-form">
            <h1>Login</h1>
            <h5>School Management System</h5>
            <br />
            <div class="input-field">
                <span class="material-icons account-icon">account_circle</span>
                <input type="text" class="form-control" id="user" name="user" placeholder="Enter User"
                    autocomplete="off" required>
            </div>
            <div class="input-field">
                <span class="material-icons lock-icon">lock</span>
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password"
                    required>
                <span class="toggle-password material-icons" onclick="togglePasswordVisibility()">visibility</span>
            </div>
            <button type="submit">Sign In</button>
        </form>
    </div>


    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("pwd");
            var eyeIcon = document.querySelector(".toggle-password");
            if (passwordField.type === 'password') {
                passwordField.type = "text";
                eyeIcon.textContent = "visibility_off";
            } else {
                passwordField.type = "password";
                eyeIcon.textContent = "visibility";
            }
        }
    </script>
</body>

</html>
