<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $username = isset($_POST['Username']) ? htmlspecialchars($_POST['Username']) : null;
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : null;
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : null;

    // Validate null values
    if ($username === null || $email === null || $password === null) {
        die("Error: All fields must be filled");
    }

    // Create the data directory if it doesn't exist
    if (!is_dir('data')) {
        mkdir('data');
    }

    // Load existing data from file or create an empty array
    $existingData = file_exists('data/databasefile.json') ? json_decode(file_get_contents('data/databasefile.json'), true) : array();

    // Add new data to the existing data
    $data = array(
        'name'    => $username,
        'email'   => $email,
        'password' => $password
    );

    $existingData[] = $data;

    // Save data back to file
    file_put_contents('data/databasefile.json', json_encode($existingData));

    // Redirect to thank you page or any other page
    header('Location: Main.php');
} 
?>
