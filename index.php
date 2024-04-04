<?php
    include './PHP/conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="contain">
        <div class="background-overlay"></div>

        <div class="content">
            <div class="box">
                <h2>Login</h2>
                <form action="./PHP/login.php" method="POST">
                    <input type="text" name="id" id="id" placeholder="id">
                    <input type="password" name="pass" id="pass" placeholder="password">
                    <input type="submit" name="submit" id="submit">
                </form>

                <div class="account-support">
                    <a href="">Forget password</a>

                </div>
                
            </div>
            
        </div>
    </div>
</body>
</html>