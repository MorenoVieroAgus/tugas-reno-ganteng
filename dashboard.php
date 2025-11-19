<?php
// public/dashboard.php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$user = $_SESSION['user'];
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
</head>
<body>
  <h1>Dashboard</h1>
  <p>Selamat datang, <?php echo htmlspecialchars($user); ?>!</p>

  <ul>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</body>
</html>
