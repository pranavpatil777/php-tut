<?php
// Create a new image with dimensions 500x300 pixels
$image = imagecreate(500, 300);

// Set background color (RGB: 0, 153, 0 - green)
$background_color = imagecolorallocate($image, 0, 153, 0);

// Set text color (RGB: 255, 255, 255 - white)
$text_color = imagecolorallocate($image, 255, 255, 255);

// Add text to the image
imagestring($image, 5, 180, 100, "Pranav patil", $text_color);
imagestring($image, 3, 160, 120, "A computer science Student", $text_color);

// Set the content type header to display the image as PNG
header("Content-Type: image/png");

// Output the image
imagepng($image);

// Clean up resources
imagedestroy($image);
?>
