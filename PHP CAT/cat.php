<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number = $_POST['number'];

    for ($i=1; $i <=10 ; $i++) { 
        echo "$number x $i = ".($number * $i)."";
        echo "<br>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>

</head>
<body>

    <!-- <table width="50%" height="50%">
        <?php
        
        // for ($row=1; $row <=10 ; $row++) { 
        //     echo "<tr>";
        //      for ($col=1; $col <=10 ; $col++) { 
        //         echo "<td>".($row * $col)."</td>";
        //      }
        //     echo "</tr>";
        // }

        ?>
    </table> -->

    <form action="#" method="post">

        <h1>NUMBER : </h1>
        <input type="number" name="number" id="" >
        <input type="submit" value="Submit">
    </form>
    
    



</body>
</html>>