<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
        }

        td {
            padding: 5px;
            text-align: center;
            border: 1px solid black;
        }

        .dayoff {
            background-color: pink;
        }

        .special-date {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <h1>月曆紀念日寫法</h1>
    <?php
    $specialDate = [
        'Y-11-08' => '日子一',
        'Y-12-25' => '聖誕節',
    ];
    echo $specialDate['Y-12-25'];
    // if(!empty($陣列)==0) 判斷陣列是否為空陣列

    ?>
    <h3>老師的月曆寫法</h3>
    <?php
    $specialDate = ['2021-11-15' => '發薪水', '2021-12-25' => '聖誕節'];
    //echo $specialDate['2011-11-11'];
    /*     $firstDay=date("Y-m-01");
         $month=date("m"); */
    $firstDay = date("Y-m-01");
    $month = date("m");
    $firstWeekWhiteDays = date("w", strtotime($firstDay));
    $monthDays = date("t", strtotime($firstDay));
    $firstWeekDays = 7 - $firstWeekWhiteDays;
    $weeks = ceil(($firstWeekWhiteDays + $monthDays) / 7);
    $lastWeekDays = ($firstWeekWhiteDays + $monthDays) % 7;
    $lastWeekWhiteDays = 7 - $lastWeekDays;
    echo "最後一天天數" . $lastWeekDays;
    echo "<br>";
    echo "weeks" . $weeks;
    echo "<br>";
    echo "第一周的天數" . $firstWeekDays;
    echo "<br>";
    echo "monthDays" . $monthDays;
    echo "<br>";
    echo "firstday" . $firstDay;
    echo "<br>";
    echo "month" . $month;
    echo "<br>";
    echo "firstWeekWhiteDays" . $firstWeekWhiteDays;
    echo "<br>";
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";

    echo "</tr>";
    for ($i = 0; $i < $weeks; $i++) { //決定當月有幾周
        echo "<tr>";
        if ($i == 0) {
            //印空白日
            for ($k = 0; $k < $firstWeekWhiteDays; $k++) {
                echo "<td>";
                echo "&nbsp;";
                echo "</td>";
            }

            for ($l = 0; $l < $firstWeekDays; $l++) {
                $date = date("Y-m-") . ($i * 7 + $l + 1);
                $w = date('w', strtotime($date));

                if (array_key_exists($date, $specialDate)) {
                    $sp = 'special-date';
                } else {
                    $sp = '';
                }

                if ($w == 0 || $w == 6) {
                    echo "<td class='dayoff $sp'>";
                } else {
                    echo "<td class='$sp'>";
                }
                echo $i * 7 + $l + 1;
                echo "<br>";
                if (!empty($sp)) {
                    echo $specialDate[$date];
                }
                echo "</td>";
            }
        } elseif ($i == $weeks - 1) {
            for ($m = 0; $m < $lastWeekDays; $m++) {
                $date = date("Y-m-") . ($i * 7 + $m + 1 - $firstWeekWhiteDays);
                $w = date('w', strtotime($date));
                if (array_key_exists($date, $specialDate)) {
                    $sp = 'special-date';
                } else {
                    $sp = '';
                }
                if ($w == 0 || $w == 6) {

                    echo "<td class='dayoff $sp'>";
                } else {
                    echo "<td class='$sp'>";
                }
                echo $i * 7 + $m + 1 - $firstWeekWhiteDays;
                echo "<br>";
                if (!empty($sp)) {
                    echo $specialDate[$date];
                }
                echo "</td>";
            }
            for ($n = 0; $n < $lastWeekWhiteDays; $n++) {
                echo "<td>";
                echo "&nbsp;";
                echo "</td>";
            }
        } else {

            for ($j = 0; $j < 7; $j++) {
                $date = date("Y-m-") . ($i * 7 + $j + 1 - $firstWeekWhiteDays);
                $w = date('w', strtotime($date));
                if (array_key_exists($date, $specialDate)) {
                    $sp = 'special-date';
                } else {
                    $sp = '';
                }
                if ($w == 0 || $w == 6) {

                    echo "<td class='dayoff $sp'>";
                } else {
                    echo "<td class='$sp'>";
                }
                echo $i * 7 + $j + 1 - $firstWeekWhiteDays;
                echo "<br>";
                if (!empty($sp)) {
                    echo $specialDate[$date];
                }
                echo "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    

    ?>
<h3>block寫法</h3>
<style>
    *{
        box-sizing: border-box;
    }
    .calendar{
        /* width/height: 50px*7 + border 1px*2 */
        width: 352px;
        height: 352px;
        margin: auto;
        border: 1px solid black;
        display: flex;
        flex-wrap: wrap;
        align-content: start;
        justify-content: start;
        }
    .cell {
        width: 50px;
        height: 50px;
        border: 1px solid red;
        display: inline-block;     
        text-align: center; 
    }
</style>
<div class="calendar">
<?php
date_default_timezone_set('Asia/Taipei');
$firstDay = date("Y-m-01");
$month = date("m");
$firstWeekWhiteDays = date("w", strtotime($firstDay));
$monthDays = date("t", strtotime($firstDay));
$firstWeekDays = 7 - $firstWeekWhiteDays;
$weeks = ceil(($firstWeekWhiteDays + $monthDays) / 7);
$lastWeekDays = ($firstWeekWhiteDays + $monthDays) % 7;
$lastWeekWhiteDays = 7 - $lastWeekDays;
$allCells=($weeks+1)*7;

$a = [31,28,31,30,31,30,31,31,30,31,30,31];
$b = [31,29,31,30,31,30,31,31,30,31,30,31];
//陣列中加入首列
$td=['Sun.','Mon.','Tue.','Wed.','Thu.','Fri.','Sat.'];
//陣列中加入月前空白
for($i=0;$i<$firstWeekWhiteDays;$i++){
    $td[]='';
}
//決定當月有幾周
for($i=0;$i<$monthDays;$i++){
    $td[]=($i+1);
}
for($i=0;$i<$lastWeekWhiteDays;$i++){
    $td[]='';
}



    for ($i = 0; $i < $allCells; $i++) {
        $date=date("Y-m-").($i+1);
        echo "<div class='cell'>";
        echo $td[$i];
        if(array_key_exists($date,$specialDate)){
            echo "<br>";
            echo $specialDate[$date];
        }
        echo "</div>";
    }

    
?>
</div>
<br><br><br>
</body>

</html>