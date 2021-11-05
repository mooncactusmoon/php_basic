<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>帳號密碼確認</title>
    <style>
        * {
            text-align: center;
            font-family: fantasy;
            font-size: 30px;
        }
        a{
            background-color: #CCFFFF;
        }
    </style>
</head>

<body>
    <?php
    $acc = $_POST['acc'];
    $pw = $_POST['pw'];

    if ($acc == 'moon' && $pw == '5566') {
        echo "loading success";
        echo "<br><br>";
        echo "Hello," . $acc;
    } else {
        echo "loading false";
        echo "<br><br>";
        echo "try again ?";
    }

    ?>
    <br>
    <br>
    <a href="./loading.php">BACK</a>
</body>

</html>