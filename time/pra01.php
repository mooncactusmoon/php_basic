<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>時間練習</title>
</head>

<body>
    <h1>給兩個日期計算中間間隔</h1>
    <span>開始:2021-10-1</span>
    <span>結束:2021-11-3</span>
    <br>
    <?php
    date_default_timezone_set('Asia/Taipei');
    echo "開始的秒數".strtotime('2021-10-1')."<br>";
    echo "結束的秒數".strtotime('2021-11-3')."<br>";
    $gapDays=(strtotime('2021-11-3')-strtotime('2021-10-1'))/(24*60*60);
    echo "<br>間隔".$gapDays."天";
    ?>
    <hr>
    <h1></h1>
    <h1></h1>
    <h1></h1>
    <h1></h1>
</body>

</html>