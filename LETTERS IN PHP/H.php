<!DOCTYPE html>
<html>
<head>
    <title>Print Letter H</title>
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
            for ($col = 1; $col <= 7; $col++) {
                if ($col == 1 || $col == 7 || $row == ($height + 1) / 2) {
                    echo "*";
                } else {
                    echo "&nbsp;";
                }
            }
            echo "<br>";
        }
    ?>
    </pre>
</body>
</html>
