<?php
include('auth_check.php');
$conn = new mysqli("localhost", "root", "", "ecommerce");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $conn->query("INSERT INTO products (name, price) VALUES ('$name', '$price')");
    header("Location: products.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h2>Add New Product</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Product Name" required><br><br>
        <input type="number" step="0.01" name="price" placeholder="Price" required><br><br>
        <button type="submit">Add Product</button>
    </form>
</body>
</html>
