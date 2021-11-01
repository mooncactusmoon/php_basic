<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET POST練習</title>
</head>

<body>
<!-- <h1>GET</h1>
<form action='get.php' method='GET'>
書名:<input type='text' name='book' value=''>
<input type='submit' value='送出'>

<h1>POST</h1>
<form action='post.php' method='POST'>
    <input type='text' name='book' value=''>
    <input type='submit' value='送出'>
</form>

<h1>FILE</h1>
<form action='file.php' method='POST' enctype='multipart/form-data'>
    <input type='file' name='book' value=''>
    <input type='submit' value='送出'>
</form> -->
<h1>BMI練習(php)</h1>
<?php
if(!empty($_GET['bmi'])){
    echo "你上次計算的BMI值為".$_GET['bmi'];
}
?>
<form action="bmi.php" method="GET">
<p><label for="height">身高</label>    
<input type="text" name="height" id="height" value=''></p>
<p><label for="weight">體重</label>    
<input type="text" name="weight" id="weight" value=''></p>

<input type="submit" value="計算BMI"> 
</form>
</body>

</html>