<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("INSERT INTO users 
        (user_ID, first_name, last_name, gr_no, enrollment_no, semester, stream, phone_no, email, password)
        VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try {
        $stmt->execute([
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['gr_no'],
            $_POST['enrollment_no'],
            $_POST['semester'],
            $_POST['stream'],
            $_POST['phone_no'],
            $_POST['email'],
            $hashed_password
        ]);
        echo "Registration successful!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
