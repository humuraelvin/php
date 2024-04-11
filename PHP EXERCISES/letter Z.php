<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LETTER Z</title>
</head>
<body>
            <?php

            function printZPattern($rows)
            {
                for ($i = 0; $i < $rows; $i++) {
                    for ($j = 0; $j < $rows; $j++) {
                        if ($i == 0 || $i == $rows - 1) {
                            echo "*";
                        } elseif ($i + $j == $rows - 1) {
                            echo "*";
                        } else {
                            echo "&nbsp;&nbsp;";
                        }
                    }
                    echo "<br>";
                }
            }

            
            $rows = 7;

            printZPattern($rows);

            ?>



</body>
</html>
