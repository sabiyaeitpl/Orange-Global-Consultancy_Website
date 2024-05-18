<?php 

if(isset($_GET['file'])) {
    $filename = basename($_GET['file']); // Sanitize the filename
    $filepath = 'media/allSearvices/' . $filename; // Path to the file
    if(file_exists($filepath)) {
        // Set headers
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Content-Length: ' . filesize($filepath));
        // Read and output the file
        readfile($filepath);
        exit;
    } else {
        // File doesn't exist, handle error
        die('File not found.');
    }
} else {
    // Filename not provided, handle error
    die('Filename not provided.');
}
?>

