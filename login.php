<?php 
session_start();
    include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="style32.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form action="login_db.php" method="post">
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
            <label for="password">Password (รหัสผ่าน)</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn1">Login</button>
        </div>
        <p>คุณยังไม่มีบัญชี ?  <a href="register.php">Sign Up</a></p>
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