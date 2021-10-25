<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串組合</title>
</head>

<body>
    <h1>字串組合</h1>
    <h3>將上例陣列重新組合成“this is a book”</h3>
    <?php
    $str='this,is,a,book';
    $array=explode(',',$str);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    //下面才是這次的解法
    echo implode(" ",$array);
    echo "<hr>";
    echo join(" ",$array);
    ?>
</body>

</html>