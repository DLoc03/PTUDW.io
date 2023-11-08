<?php
    $result = "";
    if(isset($_GET['get_star'])) {
        $x=$_GET['day'];
        $y=$_GET['month'];

        if (($x >= 21 && $y >= 3) or ($x <= 19 && $y <=4)) {
            $result = "Cung Bạch Dương";
        }
        elseif (($x >= 20 && $y >= 4) or ($x <= 20 && $y <=5)) {
            $result = "Cung Kim Ngưu";
        }
        elseif (($x >= 21 && $y >= 5) or ($x <= 21 && $y <=6)) {
            $result = "Cung Song Tử";
        }
        elseif (($x >= 22 && $y >= 6) or ($x <= 22 && $y <=7)) {
            $result = "Cung Cự Giải";
        }
        elseif (($x >= 23 && $y >= 7) or ($x <= 22 && $y <=8)) {
            $result = "Cung Sư Tử";
        }
        elseif (($x >= 23 && $y >= 8) or ($x <= 22 && $y <=9)) {
            $result = "Cung Xử Nữ";
        }
        elseif (($x >= 23 && $y >= 9) or ($x <= 22 && $y <=10)) {
            $result = "Cung Thiên Bình";
        }
        elseif (($x >= 23 && $y >= 9) or ($x <= 22 && $y <=11)) {
            $result = "Cung Thiên Yết";
        }
        elseif (($x >= 23 && $y >= 11) or ($x <= 21 && $y <=12)) {
            $result = "Cung Nhân Mã";
        }
        elseif (($x >= 22 && $y >= 12) or ($x <= 18 && $y <=2)) {
            $result = "Cung Ma Kết";
        }
        elseif (($x >= 20 && $y >= 1) or ($x <= 18 && $y <=2)) {
            $result = "Cung Bảo Bình";
        }
        elseif (($x >= 19 && $y >= 2) or ($x <= 20 && $y <=3)) {
            $result = "Cung Song Ngư";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chòm sao của bạn là gì?</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">    
    <div>
        <label for="day">Nhập ngày</label>
        <input type="number" name="day" id="day">
    </div>

    <div>
        <label for="month">Nhập tháng</label>
        <input type="number" name="month" id="month">
    </div>
    
    <div>
        <label for="result">Chòm sao của bạn</label>
        <input type="text" name="result" id="result" value="<?= $result?>" disable>
    </div>

    <div>
        <input type="submit" name="get_star">
    </div>
</body>
</html>