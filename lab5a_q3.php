<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>

<?php
    function calculateArea($length, $width) {
        $area = $length * $width;
        return $area;
    }
	$width = 10;
	$length = 5;
    $result = calculateArea($width, $length);

    echo "The area of the rectangle with width of $width and length of $length is $result."
?>

</body>
</html>
