<?php
if(isset($_COOKIE['user'])){
    header('location:mem_center.php');
    //header特性: 執行之前不能有任何的輸出!!!
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
        *{
            text-align: center;
            font-family: fantasy;
            font-size: 18px;
        }
        table {
            width: 200px;
            margin: auto;
            border-collapse: collapse;
            background-color: #CCFFFF;
        }
        div{
            margin: auto;
            width: 300px;
            height: 400px;
            background-color: #99CCFF;
            box-shadow:3px 3px 5px 6px #cccccc;   
        }
        input{
            width: 150px;
        }
        .btn{
            width: 70px;
            background-color: #CCFFFF;
        }
    </style>
</head>

<body>
    <h1>使用cookie登入並紀錄登入狀態</h1>
    <div>
        <?php
        if(isset($_GET['status']) && $_GET['status']=='err'){
            echo "<span style='color:red'>帳號或密碼錯誤</span>";
        }
        ?>
        <br>
        <form action="./login_check.php" method="POST">
            <table border="1px">
                <tr>
                    <td><label for=account>Account</label></td>
                    <td><input type="text" name="acc" id="account" placeholder="請輸入帳號"></td>
                </tr>
                <tr>
                    <td><label for=password>Password</label></td>
                    <td><input type="password" name="pw" id="password" placeholder="請輸入密碼"></td>
                </tr>
            </table>
            <br>
            <img src="../img/greeting-5480092_960_720.png" alt="歡迎圖示" width="100px" height="90px">
            <br>
            <input type="submit" value="Sumbit" class="btn">
            <input type="reset" value="Cancel" class="btn">
        </form>
        </div>
</body>
</html>