<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>子字串取用</title>
</head>

<body>
    <h1>子字串取用</h1>
    <h3>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</h3>
    <?php
    $str="The reason why a great man is great is that he resolves to be a great man";
    echo substr($str,0,10);
    echo "...";
    //可合併成 echo substr($str,0,10) . "...";
    //亦可以把要取的變成變數$sub=substr($str,0,10);
    //也可寫成 echo $sub . str_repeat(".",3);
    echo "<br>";
    $str="第12輪下半場10:00預約 BNT第1劑開放23歲↑、莫德納第2劑「全年齡」";
    echo mb_substr($str,0,5);

    ?>
</body>

</html>