<?php
$host = 'localhost';
$dbname = 'quiz_db';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected succesfully!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
