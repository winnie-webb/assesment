<?php
require_once '../src/config/db.php';

header('Content-Type: application/json'); // Ensure the response is JSON

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $phoneNumber = trim($_POST['phoneNumber']);
    $email = trim($_POST['email']);
    
    // Initialize an array to store error messages
    $errors = [];

    // Validate the first name (cannot be empty)
    if (empty($firstName)) {
        $errors[] = 'First name is required.';
    }

    // Validate the last name (cannot be empty)
    if (empty($lastName)) {
        $errors[] = 'Last name is required.';
    }

    // Validate the phone number (can implement further checks like format, etc.)
    if (empty($phoneNumber)) {
        $errors[] = 'Phone number is required.';
    }

    // Validate email
    if (empty($email)) {
        $errors[] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }

    // If there are any validation errors, return them
    if (!empty($errors)) {
        echo json_encode([
            'responseText' => 'error',
            'message' => implode(' ', $errors)
        ]);
        exit;
    }

    // Prepare the SQL statement to insert the data into the database
    $sql = "INSERT INTO users (first_name, last_name, phone_number, email) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    // Execute the statement and check if the data was inserted
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
    // If not a POST request, redirect to index page
    header("Location: index.php");
    exit;
}
?>