<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input fields
    $name = htmlspecialchars(strip_tags($_POST['user_name']));
    $email = htmlspecialchars(strip_tags($_POST['user_email']));
    $phone = htmlspecialchars(strip_tags($_POST['user_phone']));
    $subject = htmlspecialchars(strip_tags($_POST['subject']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    // Here you could do additional checks (e.g., if email is valid)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid email format']);
        exit;
    }

    // Return success response to JavaScript to continue with EmailJS
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}
?>
