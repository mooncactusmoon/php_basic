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
        .cell:hover{
            background-color: #FFEBCD;
        }
        .weeks{
            background-color: rgb(185, 243, 224);
            font-size: 25px;
            padding-top: 10px;
        }
        .cell0,.cell6{
            color: rgb(255, 0, 0);
        }
    </style>
</head>
<body>

<?php
    $specialDate = [
        '1-1' => '元旦',
        '2-14' => '西洋情人節',
        '2-28' => '和平紀念日',
        '10-10' => '雙十節',
        '10-31' => '萬聖節',
        '12-25' => '聖誕節',
    ];
  //紀念日每年顯示方法 date('Y-12-25')

     date_default_timezone_set('Asia/Taipei');
     
    //   $year= date("Y");
     //直接訪問本頁不帶值
     //訪問本業帶月份值

    //  $month = date('m');
    //empty(1)=>false  !empty(1)=>!false=>true
    //empty(0)=>true  !empty(0)=>!true=>false
    if(isset($_GET['month'])){
        $month=$_GET['month'];
        $year=$_GET['year'];
    }else{
        $month=date("m");
        $year=date("Y");
    }
    
    $lastmonth=$month-1;
    $lastyear=$year;

    $nextmonth=$month+1;
    $nextyear=$year;
    
    if($month==1){
        $lastmonth=12;
        $lastyear=$year-1;

        $nextmonth=$month+1;
        $nextyear=$year;

    }else if($month==12){

        $lastmonth=$month-1;
        $lastyear=$year;

        $nextmonth=1;
        $nextyear=$year+1;
    }

    $firstDay = date("$year-$month-01");
    $firstWeekfirstDay = date("w", strtotime($firstDay));
    
  //$a為非閏年，$b為閏年
     $a = [31,28,31,30,31,30,31,31,30,31,30,31];
     $b = [31,29,31,30,31,30,31,31,30,31,30,31];
     $td=['Sun.','Mon.','Tue.','Wed.','Thu.','Fri.','Sat.'];
 //31天的有:1.3.5.7.8.10.12
 //30天的有:4.6.9.11
 //閏年2月29天。非閏年2月28天
?>
<div>
        <h1>Perpetual calendar</h1>
    <h2><?=$year;?>/<?=$month;?></h3>
    <a href="index.php?year=<?=$lastyear;?>&month=<?=$lastmonth;?>">Last month</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="index.php?year=<?=$nextyear;?>&month=<?=$nextmonth;?>">Next month</a>
</div>
<?php

echo "<div class='div1'>";

for($i=0;$i<7;$i++){
    echo "<div class='cell weeks'>".$td[$i]."</div>";
}
 for ($i = 0; $i < 6; $i++) {
     for ($j = 0; $j < 7; $j++) {
         
         if (($i == 0 && $j < $firstWeekfirstDay) ) {
             //第一row且$j<第一天星期不顯示數字
             echo "<div class='cell cell$j'>";
             echo "&nbsp;";
             echo "</div>";
         } else {
             echo "<div class='cell cell$j'>";
             if((($year % 4 == 0) && ($year % 100 !=0)) || ($year % 400 ==0)){
                 $days=$i * 7 + $j + 1 - $firstWeekfirstDay;
                 //因為天數字串太長用$days代替,下面else也要在宣告一次
                 if ($days > $b[$month-1]) {
                     echo "&nbsp;";
                 } else {
                     $date=date("$month-").$days;
                    // $date=date("$year-$month-$days");
                     echo $days;
                     if(array_key_exists($date,$specialDate)){
                        echo "<br>";
                        echo "<span style='background-color: #F5F5DC;'>";
                        echo $specialDate[$date]."</span>";
                    }
                 }
             } else{
                $days=$i * 7 + $j + 1 - $firstWeekfirstDay;
                 if ($days > $a[$month-1]) {
                     echo "&nbsp;";
                 } else {
                     $date=date("$month-").$days;
                    // $date=date("$year-$month-$days");
                     echo $days;
                     if(array_key_exists($date,$specialDate)){
                        echo "<br>";
                        echo "<span style='background-color: #F5F5DC;'>";
                        echo $specialDate[$date]."</span>";
                    }
                 }
             }
             echo "</div>";
         }
     }
 }
 echo "</div>";
 ?>
</body>
</html>