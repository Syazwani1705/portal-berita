<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "Aini" && $password == "170510") {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;
    header("Location: index.php");
} else {
    echo "<script>
    alert('Username atau Password salah!');
    window.location='login.php';
    </script>";
}
?>