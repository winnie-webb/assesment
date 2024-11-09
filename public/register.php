<?php
require_once '../src/config/db.php';

header('Content-Type: application/json'); // Ensure the response is JSON

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

    // Prepare the SQL statement
    $sql = "INSERT INTO users (first_name, last_name, phone_number, email) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    // Execute the statement
    if ($stmt->execute([$firstName, $lastName, $phoneNumber, $email])) {
        // Send success response
        echo json_encode([
            'responseText' => 'success',
            'message' => 'Registration successful!'
        ]);
    } else {
        // Send failure response
        echo json_encode([
            'responseText' => 'error',
            'message' => 'There was an issue saving your information. Please try again.'
        ]);
    }
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>