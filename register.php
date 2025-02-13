<?php
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="style32.css">
</head>
<body>
    
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username">Username (ชื่อผู้ใช้)</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">Email (อีเมล)</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="password_1">Password (รหัสผ่าน)</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="password_2">Confirm Password (ยืนยันรหัสผ่าน)</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn1">Register</button>
        </div>
        <p>เข้าสู้ระบบ><a href="login.php">Sign in</a></p>
    </form>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
    let toggle = document.querySelector(".toggle");
    let menu = document.querySelector("header nav ul");

    toggle.addEventListener("click", function () {
        menu.classList.toggle("active");
    })
})
</script>
</body>
</html>