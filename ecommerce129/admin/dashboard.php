<?php include('auth_check.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial; background: linear-gradient(to right, #6a11cb, #2575fc); margin: 0; padding: 0; color: #333; }
        .dashboard { background: #fff; margin: 60px auto; padding: 40px; border-radius: 15px; width: 90%; max-width: 500px; box-shadow: 0 10px 25px rgba(0,0,0,0.15); text-align: center; }
        .dashboard h1 { color: #444; margin-bottom: 30px; }
        .dashboard ul { list-style: none; padding: 0; }
        .dashboard li { margin: 15px 0; }
        .dashboard a { text-decoration: none; color: white; background: #2575fc; padding: 12px 20px; border-radius: 8px; display: inline-block; transition: background 0.3s ease; }
        .dashboard a:hover { background: #1a5cd8; }
    </style>
</head>
<body>
<div class="dashboard">
    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="products.php">📦 Manage Products</a></li>
        <li><a href="users.php">👥 View Users</a></li>
        <li><a href="logout.php">🚪 Logout</a></li>
    </ul>
</div>
</body>
</html>
