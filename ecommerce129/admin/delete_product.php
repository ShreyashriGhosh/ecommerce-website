<?php
include('auth_check.php');
$conn = new mysqli("localhost", "root", "", "ecommerce");
$id = $_GET['id'];
$conn->query("DELETE FROM products WHERE id = $id");
header("Location: products.php");
exit();
