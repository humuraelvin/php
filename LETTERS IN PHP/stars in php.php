<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STARS IN PHP</title>
</head>
<body>
        <?php
        $rows = 5;


        for ($i = 1; $i <= $rows; $i++) {
            echo str_repeat("*", $i) . "<br>";
        }

        for ($i = $rows - 1; $i >= 1; $i--) {
            echo str_repeat("*", $i) . "<br>";
        }
        ?>

</body>
</html>

