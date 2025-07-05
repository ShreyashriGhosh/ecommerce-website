<?php
include('auth_check.php');
$conn = new mysqli("localhost", "root", "", "ecommerce");
$id = $_GET['id'];
$product = $conn->query("SELECT * FROM products WHERE id = $id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $conn->query("UPDATE products SET name='$name', price='$price' WHERE id=$id");
    header("Location: products.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h2>Edit Product</h2>
    <form method="post">
        <input type="text" name="name" value="<?php echo $product['name']; ?>" required><br><br>
        <input type="number" step="0.01" name="price" value="<?php echo $product['price']; ?>" required><br><br>
        <button type="submit">Update Product</button>
    </form>
</body>
</html>
