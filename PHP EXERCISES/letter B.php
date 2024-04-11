<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LETTER B</title>
</head>
<body>

<?php


            function printLetterB()
            {
                for ($row = 0; $row < 7; $row++) {
                    for ($col = 0; $col < 7; $col++) {
                        if ($col == 0 || ($row == 0 || $row == 3 || $row == 6) && $col < 5 || ($col == 5 && ($row == 1 || $row == 2 || $row == 4 || $row == 5))) {
                            echo "*";
                        } else {
                            echo "&nbsp;  ";
                        }
                    }
                    echo "<br>";
                }
            }

            
            printLetterB();

            ?>

</body>
</html>
