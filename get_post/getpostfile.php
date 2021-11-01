只是讓你看可以如何顯示
get
<?php

$book=$_GET['book'];

if($book=='火來了快跑'){

    echo "<span stlyle='color:blue'>";
    echo $book;
    echo "</span>";
}else{
    echo "查無此書";
}
?>
post
<?php

$book=$_POST['book'];

if($book=='火來了快跑'){

    echo "<span stlyle='color:blue'>";
    echo $book;
    echo "</span>";
}else{
    echo "查無此書";
}
?>

file
<?php
echo $_FILES['book']['name'];
$filepath=$_FILES['book']['tmp_name'];
echo $filepath;
move_uploaded_file($filepath,"./",$_FILES['book']['name']);
?>