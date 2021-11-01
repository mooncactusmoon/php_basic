<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的萬年曆</title>
    <style>
        *{
            box-sizing: border-box;
            text-align: center;
            font-family: Impact,Comic Sans MS,'monospace';
        }
        .div1{
            width: 422px;
            height: 352px;
            margin: auto;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: start;
            align-content: start;
            border: 1px solid black;
            
        }
        .cell{
            width: 60px;
            height: 50px;
            border: 1px solid black;
            display: inline-block;
            
        }
        .weeks{
            background-color: rgb(185, 243, 224);
            font-size: 25px;
            padding-top: 10px;
        }
        .cell0,.cell6{
            background-color: rgb(255, 190, 206);
        }
    </style>
</head>
<body>
<?php
$specialDate = ['2021-11-15' => '發薪水', '2021-12-25' => '聖誕節'];
     date_default_timezone_set('Asia/Taipei');
     $firstDay = date("Y-m-01");
     $month = date('m');
     $firstWeekfirstDay = date("w", strtotime($firstDay));
     $year= date("Y");
 //$a為非閏年，$b為閏年
     $a = [31,28,31,30,31,30,31,31,30,31,30,31];
     $b = [31,29,31,30,31,30,31,31,30,31,30,31];
     $td=['Sun.','Mon.','Tue.','Wed.','Thu.','Fri.','Sat.'];
 //31天的有:1.3.5.7.8.10.12
 //30天的有:4.6.9.11
 //閏年2月29天。非閏年2月28天
echo "<div class='div1'>";
for($i=0;$i<7;$i++){
    echo "<div class='cell weeks'>".$td[$i]."</div>";
}
 for ($i = 0; $i < 6; $i++) {
    //  echo "<div>";
     
     for ($j = 0; $j < 7; $j++) {
         
         if (($i == 0 && $j < $firstWeekfirstDay) ) {
             //第一row且$j<第一天星期不顯示數字
             echo "<div class='cell cell$j'>";
             echo "&nbsp;";
             echo "</div>";
         } else {
             echo "<div class='cell cell$j'>";
             if((($year % 4 == 0) && ($year % 100 !=0)) || ($year % 400 ==0)){
                 if (($i * 7 + $j + 1 - $firstWeekfirstDay) > $b[$month-1]) {
                     echo "&nbsp;";
                 } else {
                    $date=date("Y-m-").($i * 7 + $j + 1 - $firstWeekfirstDay);
                     echo $i * 7 + $j + 1 - $firstWeekfirstDay;
                     if(array_key_exists($date,$specialDate)){
                        echo "<br>";
                        echo $specialDate[$date];
                    }
                 }
             } else{
                 if (($i * 7 + $j + 1 - $firstWeekfirstDay) > $a[$month-1]) {
                     echo "&nbsp;";
                 } else {
                    $date=date("Y-m-").($i * 7 + $j + 1 - $firstWeekfirstDay);
                     echo $i * 7 + $j + 1 - $firstWeekfirstDay;
                     if(array_key_exists($date,$specialDate)){
                        echo "<br>";
                        echo $specialDate[$date];
                    }
                 }
             }
             echo "</div>";
         }
     }
    //  echo "</div>";
 }
 echo "</div>";
 ?>
</body>
</html>