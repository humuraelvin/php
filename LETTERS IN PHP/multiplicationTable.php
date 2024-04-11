<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MULTIPLICATION TABLE</title>
    <link rel="stylesheet" href="style.css">
    <style>
       
    </style>
</head>
<body>

    <!-- <table border="2px solid black">
        <thead>
            <tr>
                <th colspan="3">MULTIPLICATON TABLE</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table> -->

    <div class="multiplication-table">
    
    <table border="1">
        <tr>
            <th colspan = "12">Multiplication TABLE</th>
           
        </tr>

        <?php
        
        while ($a <= 6) {

            $result = $a * 1;
            $result2 = $a * 2;
            $result3 = $a * 3;
            $result4 = $a * 4;
            $result5 = $a * 5;
            $result6 = $a * 6;
            // $result7 = $a * 7;
            // $result8 = $a * 8;
            // $result9 = $a * 9;
            // $result10 = $a * 10;
            // $result11 = $a * 11;
            // $result12 = $a * 12;


            echo "
            <tr>

              <td>$a * 1 = $result</td>
              <td>$a * 2 = $result2</td>
              <td>$a * 3 = $result3</td>
              <td>$a * 4 = $result4</td>
              <td>$a * 5 = $result5</td>
              <td>$a * 6 = $result6</td>
              
              
            </tr>
            ";

            $a++;
        }

        ?>
      
       
    </table>
    

    </div>

    

</body>
</html>