<?php
// public/login.php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    // contoh very simple auth (hanya demo)
    if ($user === 'admin' && $pass === 'admin') {
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
        exit;
    }

    $error = "Login salah. Username/password tidak cocok.";
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
  <?php if (!empty($error)) : ?>
    <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
  <?php endif; ?>
  <form method="post" action="login.php">
    <label>
      Username:<br>
      <input type="text" name="username" required>
    </label><br><br>
    <label>
      Password:<br>
      <input type="password" name="password" required>
    </label><br><br>
    <button type="submit">Login</button>
  </form>

  <p>Belum punya akun? <a href="register.php">Register</a></p>
</body>
</html>
