<?php
require_once '../src/config/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $phoneNumber = $_POST['phone-number'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO users (first_name, last_name, phone, email) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$firstName, $lastName, $phoneNumber, $email]);
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>
