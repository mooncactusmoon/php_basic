<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>利用程式產生陣列</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>利用程式產生陣列</h1>
<?php
$nine=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine[]="$i X $j =". ($i*$j);
    }
}
// echo "<pre>";
// print_r($nine);
// echo "</pre>";

for($i=0;$i<count($nine);$i++){
    echo $nine[$i] . "&ensp;";
    if($i%9==8){
        echo "<br>";
    }
}
echo "<br>";
for($i=0;$i<count($nine);$i++){
    echo $nine[$i] . "&ensp;";
    if(($i+1)%9==0){
        echo "<br>";
    }
}

?>
</body>
</html>