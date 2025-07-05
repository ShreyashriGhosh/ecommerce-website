<?php
session_start();
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: dashboard.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['admin_logged_in'] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body { background: linear-gradient(to right, #4facfe, #00f2fe); font-family: Arial; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-container { background: #fff; padding: 30px 40px; border-radius: 15px; box-shadow: 0 8px 20px rgba(0,0,0,0.2); width: 100%; max-width: 350px; }
        .login-container h2 { text-align: center; margin-bottom: 25px; color: #333; }
        input { width: 100%; padding: 12px 15px; margin: 10px 0; border: 1px solid #ccc; border-radius: 8px; font-size: 16px; }
        button { width: 100%; padding: 12px; background: #4facfe; border: none; border-radius: 8px; color: white; font-size: 16px; cursor: pointer; }
        button:hover { background: #00c6ff; }
        .error { color: red; text-align: center; margin-top: 10px; }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Admin Login</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <?php if (isset($error)) echo "<div class='error'>$error</div>"; ?>
    </form>
</div>
</body>
</html>
