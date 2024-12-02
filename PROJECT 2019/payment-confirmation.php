<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $amount = htmlspecialchars($_POST['amount']);
    $reference = htmlspecialchars($_POST['reference']);
    $proof = $_FILES['proof'];

    // Save the uploaded proof
    $upload_dir = 'uploads/';
    $upload_file = $upload_dir . basename($proof['name']);
    move_uploaded_file($proof['tmp_name'], $upload_file);

    // Confirmation message
    echo "<h1>Payment Received</h1>";
    echo "<p>Thank you, $name. We have received your payment of $$amount.</p>";
    echo "<p>We will verify your transaction reference: <strong>$reference</strong>.</p>";
    echo "<p>If we have questions, we will contact you at $email.</p>";
    echo "<p><a href='index.html'>Back to Home</a></p>";
}
?>
