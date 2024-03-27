<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $position = $_POST['position'];
    $name = $_POST['name'];
    $nationality = $_POST['nationality'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    
    // Compose email message
    $to = "kironjirichmond@gmail.com"; // Admin's email address
    $subject = "New E-commerce Package Application";
    $message = "E Commerce Package Applied For: $position\n";
    $message .= "Name: $name\n";
    $message .= "Nationality: $nationality\n";
    $message .= "Date of Birth: $dob\n";
    $message .= "Address: $address\n";
    $message .= "Telephone Number: $telephone\n";
    $message .= "Email: $email\n";
    
    // Send email
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Your application has been submitted successfully. We will get back to you soon.</p>";
    } else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
} else {
    // Redirect back to the form page if accessed directly
    header("Location: index.html");
    exit();
}
?>
