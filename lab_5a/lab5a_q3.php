<?php
// Function to calculate the area of a rectangle
function calculateArea($width, $height) {
    return $width * $height;
}

// Call the function with example values
$width = 4;
$height = 2;
$area = calculateArea($width, $height);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Area</title>
</head>
<body>
    <p>
        <?php
        echo "The area of a rectangle with a width of $width and $height is $area";
        ?>
    </p>
</body>
</html>
