<?php
$name = $_POST['name'];
$position = $_POST['position'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$errors = [];

if (empty($name)) {
    $errors[] = "Input Nama belum di isi!";
}

if (empty($password)) {
    $errors[] = "Input Password belum di isi!";
}

if ($password !== $confirm_password) {
    $errors[] = "Input Confirm Password dan Confirm Password belum sama!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Process Result</title>
</head>
<body>
<?php if (!empty($errors)): ?>
    <div style="color: red;">
        <?php foreach ($errors as $error): ?>
            <p><?= $error ?></p>
        <?php endforeach; ?>
    </div>
    <br>
    <a href="form.php">Back</a>
<?php else: ?>
    <h2>Data yang Anda Masukkan!</h2>
    <p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
    <p><strong>Position:</strong> <?= htmlspecialchars($position) ?></p>
    <br>
    <a href="form.php">Back akan kembali ke halaman awal!!!</a>
<?php endif; ?>
</body>
</html>
