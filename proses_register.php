<?php
session_start();

$_SESSION['user'] = $_POST['username'];
$_SESSION['pass'] = $_POST['password'];

echo "<script>
alert('Registrasi berhasil! Silakan login.');
window.location='login.php';
</script>";
?>