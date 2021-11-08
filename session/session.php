<?php
session_start();
$_SESSION['name']='Moon';

echo $_SESSION['name'];

$_SESSION['students']=['A','B','C'];
?>