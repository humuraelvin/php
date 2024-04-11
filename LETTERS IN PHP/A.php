<!DOCTYPE html>
<html>
<head>
    <title>Print Letter A</title>
    <style>
        pre {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <pre>
    <?php
        $height = 7; 
        for ($row = 1; $row <= $height; $row++) {
            for ($col = 1; $col <= ($height - $row); $col++) {
                echo "&nbsp;&nbsp;";
            }

            for ($col = 1; $col <= ($row * 2 - 1); $col++) {
                if ($col == 1 || $col == ($row * 2 - 1) || $row == ($height + 1) / 2) {
                    echo "*&nbsp;";
                } else {
                    echo "&nbsp;&nbsp;";
                }
            }

            echo "<br>";
        }
    ?>
    </pre>
</body>
</html>
