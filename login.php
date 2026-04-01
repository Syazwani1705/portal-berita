<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login - SKANSA NEWS</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #dbdddf, #75d0e9);
        }

        .box {
            width: 350px;
            margin: 80px auto;
            padding: 30px;
            background: white;
            border-radius: 16px;
            text-align: center;
        }

        input {
            width: 80%;       
            margin: 10px auto;
            display: block;
            border-radius: 10px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        button {
            width: 88%;
            padding: 10px;
            background: #54708e;
            color: white;
            border: none;
            margin-top: 10px;
            border-radius: 23px;
        }

        button:hover {
            background: #063e56;
        }

        a {
            display: block;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="box">
        <h2>LOGIN SKANSA NEWS</h2>

        <form action="proses_login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <a href="register.php">Daftar Akun</a>
        <a href="lupa_password.php">Lupa Password?</a>
    </div>

</body>

</html>