<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM register_db WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "คุณเข้าสู่ระบบแล้ว";
                header("location: index.php");
            } else {
                array_push($errors, "ชื่อหรือรหัสผ่านไม่ถูกต้อง");
                $_SESSION['error'] = "ชื่อหรือรหัสผ่านไม่ถูกต้อง";
                header("location: login.php");
            }
        } else {
            array_push($errors, "ชื่อผู้ใช้และรหัสผ่านเป็นสิ่งจำเป็น");
            $_SESSION['error'] = "ชื่อผู้ใช้และรหัสผ่านเป็นสิ่งจำเป็น";
            header("location: login.php");
        }
    }

?>