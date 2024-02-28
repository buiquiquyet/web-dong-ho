<?php

//nhap
$maSv = $_POST['maSv'];
$tenSv = $_POST['tenSv'];


//ket noi
require_once 'condb1.php';
//viet lenh
$updatesql = "UPDATE `sinhvien1` SET maSv='$maSv', tenSv='$tenSv' WHERE maSv='$maSv' ";
// echo $updatesql; exit;
 //thuc thi lenh
 if (mysqli_query($conn,$updatesql)
 ){

 //inthanhcong
 //tro ve trang liet ke
header("Location: tables1.php");
 }

?>