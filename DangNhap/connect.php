<?php
$connect = mysqli_connect ('localhost', 'root', '', 'testweb') or die ('Không thể kết nối tới database');
mysqli_set_charset($connect, 'utf8');

if($connect === false){ 
die("ERROR: Could not connect. " . mysqli_connect_error()); 
}
else {
echo 'Kết nối DB thành công!';
}
?>