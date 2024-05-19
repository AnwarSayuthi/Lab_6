<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($length, $width) {
            return $length * $width;
        }

        // Calling the function with sample values
        $length = 5;
        $width = 10;
        $area = calculateArea($length, $width);
    ?>

    <h1>Calculate Rectangle Area</h1>
    <p>Length: <?php echo $length; ?></p>
    <p>Width: <?php echo $width; ?></p>
    <p>Area: <?php echo $area; ?></p>
</body>
</html>
