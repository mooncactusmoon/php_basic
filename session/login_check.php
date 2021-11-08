<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>帳號密碼確認</title>
</head>
<body>
    <?php
    $acc = 'moon';
    $pw = '5566';       
    if ($acc == $_POST['acc'] && $pw == $_POST['pw']) {
        // $_SESSION['user']=$_POST['acc'];
        setcookie('user',$_POST['acc'],time()+3600);
        header("location:mem_center.php");
    }else{
        header("location:login.php?status=err");
    }
    ?>
    <br>
    <br>
</body>
</html>