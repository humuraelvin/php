<?php
$firstNum = isset($_POST['firstNum']) ? $_POST['firstNum'] : '';
$secondNum = isset($_POST['secondNum']) ? $_POST['secondNum'] : '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'add':
            $result = $firstNum + $secondNum;
            break;

        case 'subtract':
            $result = $firstNum - $secondNum;
            break;

        case 'multiply':
            $result = $firstNum * $secondNum;
            break;

        case 'divide':
            if ($secondNum != 0) {
                $result = $firstNum / $secondNum;
            } else {
                $result = "Cannot divide by zero";
            }
            break;

        default:
            $result = "Invalid operation";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CALCULATOR</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <center>
        <form action="#" class="form" method="post">
            <div>
                <h1><strong>SIMPLE CALCULATOR PROGRAM</strong></h1>
            </div>
            <br><br>
            <div>
                <label for="firstNum">Enter the first Number: </label>
                <input type="number" name="firstNum" id="firstNum" value="<?php echo $firstNum; ?>">
            </div>
            <br><br>
            <div>
                <label for="secondNum">Enter the second Number: </label>
                <input type="number" name="secondNum" id="secondNum" value="<?php echo $secondNum; ?>">
            </div>
            <br><br>
            <div>
                <label for="result">Result: </label>
                <input type="number" name="result" id="result" value="<?php echo $result; ?>" readonly>
            </div>
            <br><br>
            <h3>Choose an operation:</h3>
            <br>
            <div>
                <button class="btn btn-success" name="operation" value="add">ADD</button>&nbsp;&nbsp;&nbsp;
                <button class="btn btn-success" name="operation" value="subtract">SUBTRACT</button>&nbsp;&nbsp;&nbsp;
                <button class="btn btn-success" name="operation" value="multiply">MULTIPLY</button>&nbsp;&nbsp;&nbsp;
                <button class="btn btn-success" name="operation" value="divide">DIVIDE</button>
            </div>
        </form>
    </center>
</body>
</html>