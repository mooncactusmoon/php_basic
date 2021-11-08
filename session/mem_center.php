<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>
<body>
    歡迎
    <?php
    session_start();
    if(isset($_COOKIE['user'])){
        echo $_COOKIE['user'];
    }else{
        echo $_SESSION['user'];
    }
    ?>
    登入 :)
</body>
</html>