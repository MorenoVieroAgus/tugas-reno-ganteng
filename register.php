<?php
// public/register.php
// Untuk demo ini register hanya menampilkan pesan.
// Kalau mau, bisa ditambah menyimpan ke file/DB dan hashing password.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    // contoh sederhana: validasi minimal
    if ($username === '' || $password === '') {
        $error = "Username dan password harus diisi.";
    } else {
        $success = "Akun untuk '$username' berhasil dibuat (dummy). Silakan login.";
    }
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Register</title>
</head>
<body>
  <h1>Register</h1>

  <?php if (!empty($error)) : ?>
    <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
  <?php endif; ?>

  <?php if (!empty($success)) : ?>
    <p style="color:green;"><?php echo htmlspecialchars($success); ?></p>
  <?php endif; ?>

  <form method="post" action="register.php">
    <label>
      Username:<br>
      <input type="text" name="username" required>
    </label><br><br>
    <label>
      Password:<br>
      <input type="password" name="password" required>
    </label><br><br>
    <button type="submit">Register</button>
  </form>

  <p>Sudah punya akun? <a href="login.php">Login</a></p>
</body>
</html>
