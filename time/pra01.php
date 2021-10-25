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
    <h1>計算距離自己下一次生日還有幾天</h1>
    <?php
    date_default_timezone_set('Asia/Taipei');
    $gapDays=(strtotime('2022-10-25')-strtotime('2021-10-25'))/(24*60*60);
    echo "生日還有".$gapDays."天";
    //老師寫法
    $now=strtotime('now');
    $nextBirthday=strtotime('2022-10-25');
    $gap=($nextBirthday-$now)/86400;
    echo ceil($gap) . "天";
    //floor()無條件捨棄到整位;ceil()無條件進位到整位;round()四捨五入
    ?>
    <h1>利用date()函式的格式化參數，完成以下的日期格式呈現</h1>
    <ul>
        <li>2021/10/25</li>
        <li>10月25日 Monday</li>
        <li>2021-10-25 12:9:5(當下時間沒有前導0)</li>
        <li>2021-10-25 12:09:05(當下時間有前導0)</li>
        <li>今天是西元2021年10月25日 上班日(或假日)</li>
    </ul>
    <?php
    // date_default_timezone_set('Asia/Taipei');
    echo date("Y/m/d");
    echo "<br>";
    echo date('m月j日 l');
    echo "<br>";
    echo date("Y-n-j H:i:s");
    echo "<br>";
    echo date("Y-m-d H:i:s");
    echo "<br>";
    $date=date("今天是西元Y年m月d日");
    if(date("N")>=6){
        echo $date . "假日";
    }else{
        echo $date . "上班日";
    }
    ?>
    <h1>strtotime應用</h1>
    <h3>時間的平移</h3>
    <?php
    date_default_timezone_set('Asia/Taipei');
    $now=strtotime("now");
    echo $now;
    echo "<br>";
    echo date("Y-m-d H:i:s");
    echo "<br>";
    $yesterday=strtotime("-1 days");
    echo "昨天".date("Y-m-d H:i:s",$yesterday);
    echo "<br>";
    $tomorrow=strtotime("+1 days");
    echo "明天".date("Y-m-d H:i:s",$tomorrow);
    echo "<br>";
    $nextMonth=strtotime("+1 month");
    echo "下個月".date("Y-m-d H:i:s",$nextMonth);
    ?>
    <h1>利用迴圈來計算連續五個周一的日期</h1>
    <?php
 $weekstr=['星期天','星期一','星期二','星期三','星期四','星期五','星期六',];
 $base='2021-10-04';
 $basetime=strtotime($base);
 // echo date('Y-m-d',$basetime). " " .$weekstr[date("w",$basetime)];
 
 for($i=0;$i<5;$i++){
     $secs=strtotime("+".($i*7)." days",$basetime);
     echo $i+1 . "." . " ";
     echo date('Y-m-d',$secs). " " .$weekstr[date("w",$secs)];
     echo "<br>";
 }
    ?>
    <hr>
</body>

</html>