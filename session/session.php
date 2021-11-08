<?php
session_start();
$_SESSION['name']='Moon';

echo $_SESSUON['name'];

$_SESSION['students']=['A','B','C'];
?>