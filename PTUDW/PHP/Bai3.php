<?php
$result = "";
if (isset($_GET['get_star'])) {
    $x = $_GET['month'];
    $y = $_GET['day'];

    if (($x == 1 && $y >= 20) || ($x == 2 && $y <= 18)) {
        $result = 'Bảo Bình';
    } elseif (($x == 2 && $y >= 19) || ($x == 3 && $y <= 20)) {
        $result = 'Song Ngư';
    } elseif (($x == 3 && $y >= 21) || ($x == 4 && $y <= 19)) {
        $result = 'Bạch Dương';
    } elseif (($x == 4 && $y >= 20) || ($x == 5 && $y <= 20)) {
        $result = 'Kim Ngưu';
    } elseif (($x == 5 && $y >= 21) || ($x == 6 && $y <= 21)) {
        $result = 'Song Tử';
    } elseif (($x == 6 && $y >= 22) || ($x == 7 && $y <= 22)) {
        $result = 'Cự Giải';
    } elseif (($x == 7 && $y >= 23) || ($x == 8 && $y <= 22)) {
        $result = 'Sư Tử';
    } elseif (($x == 8 && $y >= 23) || ($x == 9 && $y <= 22)) {
        $result = 'Xử Nữ';
    } elseif (($x == 9 && $y >= 23) || ($x == 10 && $y <= 22)) {
        $result = 'Thiên Bình';
    } elseif (($x == 10 && $y >= 23) || ($x == 11 && $y <= 21)) {
        $result = 'Bọ Cạp';
    } elseif (($x == 11 && $y >= 22) || ($x == 12 && $y <= 21)) {
        $result = 'Nhân Mã';
    } elseif (($x == 12 && $y >= 22) || ($x == 1 && $y <= 19)) {
        $result = 'Ma Kết';
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
            <input type="text" name="result" id="result" value="<?= $result ?>" disable>
        </div>

        <div>
            <input type="submit" name="get_star">
        </div>
</body>

</html>
