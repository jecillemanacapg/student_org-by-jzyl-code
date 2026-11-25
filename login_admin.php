<?php
session_start();
include_once __DIR__ . "/config/config.php";
include_once __DIR__ . "/repositories/AdminRepository.php";

$error = "";
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $admin = AdminRepository::findByUsername($username);
    if ($admin !== null && $admin->getPassword() === $password) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "incorrect username or password!";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="login_style.css">
</head>

<body>

    <h1>ADMIN LOGIN</h1>
    <?php if ($error): ?>
        <p style="color:red"><?= htmlspecialchars($error) ?></p><?php endif; ?>
    <form method="POST" action="login_admin.php">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>