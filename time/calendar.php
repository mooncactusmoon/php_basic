<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table {
            width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid blue;
        }

        td {
            padding: 5px;
            text-align: center;
            border: 1px solid red;
        }
    </style>
</head>

<body>
    <h1>線上月曆製作</h1>
    <?php
    date_default_timezone_set('Asia/Taipei');
    //寫死的方法
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
    for ($i = 0; $i < 6; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            if (($i == 0 && $j < 5) || ($i == 5 && $j > 0)) {
                echo "<td>";
                echo "&nbsp;";
                echo "</td>";
            } else {
                echo "<td>";
                echo $i * 7 + $j - 4;
                echo "</td>";
            }
        }
        echo "</tr>";
    }

    echo "</table>";
    echo "<hr>";
    ?>
    <?php
    date_default_timezone_set('Asia/Taipei');
    $firstDay = date("Y-m-01");
    $month = date('m');
    $firstWeekfirstDay = date("w", strtotime($firstDay));
    // $day=[31,28,31,30,31,30,31,31,30,31,30,31];

//31天的有:1.3.5.7.8.10.12
//30天的有:4.6.9.11
//閏年2月29天。非閏年2月28天
    echo "firstday" . $firstDay;
    echo "<br>";
    echo "month" . $month;
    echo "<br>";
    echo "firstweekfirstday" . $firstWeekfirstDay;
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
    for ($i = 0; $i < 6; $i++) {
        echo "<tr>";
        
        for ($j = 0; $j < 7; $j++) {
            if (($i == 0 && $j < $firstWeekfirstDay) ) {
                //第一row且$j<第一天星期不顯示數字
                echo "<td>";
                echo "&nbsp;";
                echo "</td>";
            } else {
                echo "<td>";
                if (($i * 7 + $j + 1 - $firstWeekfirstDay) > 31) {
                    echo "&nbsp;";
                } else {
                    echo $i * 7 + $j + 1 - $firstWeekfirstDay;
                }
                echo "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
    echo date('w', strtotime("2021-10-1"));
    ?>

</body>

</html>