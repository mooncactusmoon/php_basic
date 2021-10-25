<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>尋找字串與HTML、css整合應用</title>
</head>
<body>
<h1>尋找字串與HTML、css整合應用</h1>
    <h3>給定一個句子，將指定的關鍵字放大 <br>
“學會PHP網頁程式設計，薪水會加倍，工作會好找” <br>
請將上句中的 “程式設計” 放大字型或變色.</h3>
    <?php
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $sub="程式設計";
    echo "方法一<br>";
    $split=explode($sub,$str);
    print_r($split);
    echo "<br>";
    echo $split[0].
         "<span style='color:red';>" .
         $sub . 
         "</span>" . 
         $split[1];

    echo "<hr>";
    echo "方法二<br>";
    $style="<span style='color:blue';>" . $sub . "</span>";
    echo str_replace($sub,$style,$str); 


    ?>
</body>
</html>