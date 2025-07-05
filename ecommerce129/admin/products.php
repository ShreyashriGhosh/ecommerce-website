<?php
include('auth_check.php');
$conn = new mysqli("localhost", "root", "", "ecommerce");
$result = $conn->query("SELECT * FROM products");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Products</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .container { max-width: 800px; margin: 60px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px #ccc; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
        th { background: #3498db; color: white; }
        a.button { padding: 6px 12px; text-decoration: none; border-radius: 5px; }
        a.edit { background: #27ae60; color: white; }
        a.delete { background: #c0392b; color: white; }
        .add-button { background: #2980b9; padding: 10px 20px; color: white; text-decoration: none; border-radius: 8px; display: inline-block; margin-bottom: 15px; }
    </style>
</head>
<body>
<div class="container">
    <h2>📦 Product Management</h2>
    <a href="add_product.php" class="add-button">➕ Add Product</a>
    <table>
        <tr><th>ID</th><th>Name</th><th>Price</th><th>Actions</th></tr>
        <?php while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>₹{$row['price']}</td>
                    <td>
                        <a class='button edit' href='edit_product.php?id={$row['id']}'>Edit</a>
                        <a class='button delete' href='delete_product.php?id={$row['id']}' onclick=\"return confirm('Are you sure?');\">Delete</a>
                    </td>
                </tr>";
        } ?>
    </table>
</div>
</body>
</html>
