<?php
// Load the original image (e.g., from an uploaded file)
$original = imagecreatefrompng("login.png");

// Define the new width and height (adjust as needed)
$newWidth = 300;
$newHeight = 200;

// Scale the image
$resized = imagescale($original, $newWidth, $newHeight);

// Set the content type header to display the image
header("Content-Type: image/png");

// Output the resized image
imagepng($resized);

// Clean up resources
imagedestroy($original);
imagedestroy($resized);
?>
