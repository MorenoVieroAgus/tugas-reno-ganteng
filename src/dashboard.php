<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Dashboard</h1>
<p>Selamat datang, <?php echo htmlspecialchars($user); ?>!</p>

<a href="logout.php">Logout</a>

</body>
</html>
