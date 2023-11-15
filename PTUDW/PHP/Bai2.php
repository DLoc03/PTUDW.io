<?php
    if(isset($_GET['operation'])) {
        $x=$_GET['num1'];
        $y=$_GET['num2'];
        $op=$_GET['operation'];
        $result = 0;
        switch($op) {
            case 'add':
                $result = $x + $y;
                break;

            case 'sub':
                $result = $x - $y;
                break;
            
            case 'mul':
                $result = $x * $y;
                break;

            case 'div':
                if ($y == 0) {
                    echo("Không thể chia cho 0");
                }
                else {
                    $result = $x / $y;
                }
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Calculator</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

    <div>
        <label for="num1">Number 1</label>
        <input type="number" name="num1" id="num1">
    <div>

    <div>
        <label for="num2">Number 2</label>
        <input type="number" name="num2" id="num2">
    </div>

    <div>
        <label for="result">Result</label>
        <input type="number" name="result" id="result" value="<?= $result?>" disable>
    </div>

    <div>
        <input type="submit" value="add" name="operation">
        <input type="submit" value="sub" name="operation">
        <input type="submit" value="mul" name="operation">
        <input type="submit" value="div" name="operation">
    </div>
</body>
</html>

