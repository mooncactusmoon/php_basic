<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>建立陣列練習</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>建立陣列練習</h1>
<?php
$name['judy']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];
$name['judy1']=[95,64,70,90,84];
$name['amo']=['國文'=>88,'英文'=>78,'數學'=>54,'地理'=>81,'歷史'=>71];
$name['john']=['國文'=>45,'英文'=>60,'數學'=>68,'地理'=>70,'歷史'=>62];
$name['peter']=['國文'=>59,'英文'=>32,'數學'=>77,'地理'=>54,'歷史'=>42];
$name['hebe']=['國文'=>71,'英文'=>62,'數學'=>80,'地理'=>62,'歷史'=>64];

echo "<pre>";
print_r($name);
echo "</pre>";

$students=array_keys($name);
echo "<pre>";
print_r($students);
echo "</pre>";

$subject=array_keys($name['judy']);
echo "<pre>";
print_r($subject);
echo "</pre>";

echo $name['judy']['國文'];
echo $name['judy1'][0];
?>
<hr>
<?php
$a=[
    'subject' =>['國文','英文','數學','地理','歷史'],
    'judy' => ["95","64","70","90","84"],
    'amo' => ["88","78","54","81","71"],
    'john' => ["45","60","68","70","62"],
    'peter' => ["59","32","77","54","42"],
    'hebe' => ["71","62","80","62","64"],
];
?>
 <?php
$a=["&ensp;",'國文','英文','數學','地理','歷史'];
$b=["judy","95","64","70","90","84"];
$c=["amo","88","78","54","81","71"];
$d=["john","45","60","68","70","62"];
$e=["peter","59","32","77","54","42"];
$f=["hebe","71","62","80","62","64"];
//下面的迴圈是笨笨寫法
for($i=0;$i<6;$i++){
    echo $a[$i] . "&ensp;";
}
echo "<br>";
for($i=0;$i<6;$i++){
    echo $b[$i] . "&ensp;";
}
echo "<br>";
for($i=0;$i<6;$i++){
    echo $c[$i] . "&ensp;";
}
echo "<br>";
for($i=0;$i<6;$i++){
    echo $d[$i] . "&ensp;";
}
echo "<br>";
for($i=0;$i<6;$i++){
    echo $e[$i] . "&ensp;";
}
echo "<br>";
for($i=0;$i<6;$i++){
    echo $f[$i] . "&ensp;";
}

?>   
</body>
</html>