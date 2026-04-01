<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register - SKANSA NEWS</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #dbdddf, #75d0e9);
        }

        .box {
            width: 350px;
            margin: 80px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
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
            margin-top: 13px;
            text-decoration: none;
        }
    </style>

</head>

<body>

    <div class="box">
        <h2>DAFTAR AKUN</h2>

        <form action="proses_register.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Daftar</button>
        </form>

        <a href="logout.php">Kembali ke Login</a>
    </div>

</body>

</html>