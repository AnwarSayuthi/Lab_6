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

        // Define your chosen number
        $chosenNumber = 7;

        // Calling the function with sample values
        $length = 5;
        $width = 10;
        $area = calculateArea($length, $width);
    ?>

    <h1>Calculate Rectangle Area</h1>
    <p>Length: <?php echo $length; ?></p>
    <p>Width: <?php echo $width; ?></p>
    <h4>Area: <?php echo "The area of rectangle with $chosenNumber is $area"; ?></h4>
</body>
</html>
