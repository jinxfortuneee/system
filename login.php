<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- My CSS -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="fontawesome/css/all.css" media="screen">
  

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
            <br/>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placehoder="Username" required>
</div>
<div class="input-field">
    <i class="fas fa-lock"></i>
    <input type="password" id="password" placeholder="Password" required>
    <span class="toggle-password" onclick="togglePasswordVisibility()" class="fas fa-eye"></i></span>
</div>
<button type="submit">Sign In</button>
</form>
</div>


<script>
    function togglePasswordVisibility(){
        var passwordField = document.getElementById("password");
        var eyeIcon = document.querySelector(".toggle-password i");
        if(passwordField.type=='password');{
            passwordField.type="text";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
    }elese{
        passwordField.type="password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    }
    }
    </script>
</body>