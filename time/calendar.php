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
    $firstDay = date("Y-m-01");
    $month = date('m');
    $firstWeekfirstDay = date("w", strtotime($firstDay));
    echo "firstday" . $firstDay;
    echo "<br>";
    echo "month" . $month;
    echo "<br>";
    echo "firstweekfirstday" . $firstWeekfirstDay;
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";    echo "<td>一</td>";
    echo "<td>二</td>";    echo "<td>三</td>";
    echo "<td>四</td>";    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";
    for ($i = 0; $i < 6; $i++) {
        echo "<tr>";
        // $whitdDay= ;
        for ($j = 0; $j < 7; $j++) {
            if (($i == 0 && $j < $firstWeekfirstDay) || ($i==$firstWeekfirstDay && $j > 0)) {
                echo "<td>";
                echo "&nbsp;";
                echo "</td>";
            } else {
                echo "<td>";
                echo $i*7+$j+1-$firstWeekfirstDay;
                echo "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>

</html>