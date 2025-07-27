<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize inputs
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $opinion = htmlspecialchars(trim($_POST['Be honest'] ?? ''));
    $fan = htmlspecialchars(trim($_POST['fan'] ?? ''));
    $psycho = htmlspecialchars(trim($_POST['psycopath'] ?? ''));
    $reason = htmlspecialchars(trim($_POST['gay'] ?? ''));

    // Basic validation
    if (!$name || !$email || !$opinion || !$fan || !$psycho || !$reason) {
        echo "All fields are required.";
        exit;
    }

    // Save to a file (or switch to a database later)
    $data = "Name: $name\nEmail: $email\nOpinion: $opinion\nFan: $fan\nPsychopath: $psycho\nReason: $reason\n\n";
    file_put_contents('submissions.txt', $data, FILE_APPEND);

    // Confirmation message
    echo "Thank you for submitting your opinion!";
} else {
    echo "Invalid request.";
}
?>
