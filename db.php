<?php
$host = 'localhost'; // Your database host
$dbname = 'user_authentication'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password (adjust as needed)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
