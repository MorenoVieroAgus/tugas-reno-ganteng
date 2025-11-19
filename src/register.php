<?php
// Dummy register — hanya menampilkan pesan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    if ($user === "" || $pass === "") {
        $error = "Semua field wajib diisi.";
    } else {
        $success = "Akun '$user' berhasil dibuat (dummy). Silakan login.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h1>Register</h1>

<?php if (!empty($error)): ?>
<p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>

<?php if (!empty($success)): ?>
<p style="color:green;"><?php echo $success; ?></p>
<?php endif; ?>

<form method="post">
    Username:<br>
    <input type="text" name="username"><br><br>

    Password:<br>
    <input type="password" name="password"><br><br>

    <button type="submit">Register</button>
</form>

<p>Sudah punya akun? <a href="login.php">Login</a></p>

</body>
</html>
