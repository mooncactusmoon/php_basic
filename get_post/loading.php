<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入檢查練習</title>
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
            height: 250px;
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
    <h1>登入檢查</h1>
    <p>建立輸入帳號密碼的表單，
        輸入後按下登入可以在另外一個畫面顯示帳密是否正確</p>
    <div>
        <br>
        <form action="./loading_check.php" method="POST">
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