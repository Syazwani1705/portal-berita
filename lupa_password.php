<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lupa Password - SKANSA NEWS</title>

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

        .password-box {
            margin: 20px 0;
            padding: 10px;
            background: #9ebbd9;
            border-radius: 5px;
        }

        a {
            display: block;
            margin-top: 15px;
            text-decoration: none;
        }
    </style>

</head>

<body>

    <div class="box">
        <h2>LUPA PASSWORD</h2>

        <div class="password-box">
            <?php
            if (isset($_SESSION['pass'])) {
                echo "Password kamu adalah:<br><b>" . $_SESSION['pass'] . "</b>";
            } else {
                echo "Belum ada akun yang terdaftar.";
            }
            ?>
        </div>
        <a href="logout.php">Kembali ke Login</a>
    </div>

</body>

</html>