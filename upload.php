<?php
$uploadDir = 'projectsFolder/';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $file = $_FILES['image'];
    $filename = basename($file['name']);
    $targetFile = $uploadDir . $filename;

    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
        echo "Success: File uploaded to <a href=\"$targetFile\" target=\"_blank\">$targetFile</a>.";
    } else {
        echo "Error: Failed to upload file.";
    }
} else {
    echo "No file received.";
}
?>
