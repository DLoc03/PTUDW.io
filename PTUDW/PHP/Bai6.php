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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get"> 
        <label for="title">Trắc nghiệm kiểm tra tính cách</label><br>
        <p>Bạn thích ở nhà hay đi chơi</p>

        <input type="radio" name="rd_1" value="choose_1_1">
        <label for="text_1_1">Đi chơi</label>
        <input type="radio" name="rd_1" value="choose_1_2">
        <label for="text_1_2">Ở nhà</label>
        
        <br>

        <p>Bạn thích ở bar hay ở coffee</p>
        <input type="radio" name="rd_2" value="choose_2_1">
        <label for="text_2_1">Bar</label>
        <input type="radio" name="rd_2" value="choose_2_2">
        <label for="text_2_2">Coffee</label><br>

        <p>Ba mẹ bạn có biết bạn thích Lộc không?</p>
        <input type="radio" name="rd_3" value="choose_3_1">
        <label for="text_3_1">Có</label>
        <input type="radio" name="rd_3" value="choose_3_2">
        <label for="text_3_2">Không</label><br>

        <div>
        <input type="submit" name="get_submit">
        </div>
    </div>
    </form>
</body>
</html>