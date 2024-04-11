<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Define the number of rows
$rows = 7;


for ($i = 1; $i <= $rows; $i++) {
    
    for ($j = 1; $j <= $rows; $j++) {
        
        if ($i == 1 || $i == $rows || ($i == $rows / 2 + 1 && $j <= $rows - 2) || ($j == 1 && $i != 1 && $i != $rows)) {
            echo '*';
        } else {
            echo " ";
        }
    }
   
    echo "<br>";
}
?>
</body>
</html>
