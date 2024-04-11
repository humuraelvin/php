<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LETTER C</title>
</head>
<body>
<?php

// Function to print the pattern
function printCPattern($rows)
{
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $rows; $j++) {
            if ($i == 0 && $j != 0 || $i == $rows - 1 && $j != 0 || $j == 0 && $i != 0 && $i != $rows - 1) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }
}

// Number of rows for the pattern
$rows = 7;

// Function call to print the pattern
printCPattern($rows);

?>


</body>
</html>
