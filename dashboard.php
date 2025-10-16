<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - SATUUNTAN</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo htmlspecialchars($_SESSION['nama']); ?>!</h1>
    <p>Role: <?php echo htmlspecialchars($_SESSION['role']); ?></p>
    <p>Login time: <?php echo htmlspecialchars($_SESSION['login_time']); ?></p>
</body>
</html>