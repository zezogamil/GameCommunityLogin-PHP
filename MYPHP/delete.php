<?php
// Get the index to delete from the URL query parameter
$indexToDelete = isset($_GET['index']) ? intval($_GET['index']) : 0;

// Load data from file or create an empty array
$data = file_exists('data/databasefile.json') ? json_decode(file_get_contents('data/databasefile.json'), true) : array();

// Remove the entry at the specified index
unset($data[$indexToDelete]);

// Reindex the array
$data = array_values($data);

// Save data back to file
file_put_contents('data/databasefile.json', json_encode($data));

// Redirect back to the administration page
header('Location: Admin.php');
?>
