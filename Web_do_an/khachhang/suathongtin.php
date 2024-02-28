<?php
include  "database.php";
$db = new database();

$ma = $_GET['taikhoan'];
$ten = $_POST['ten'];
$email = $_POST['email'];
$sdt = $_POST['sdt'];
$diaChi = $_POST['diaChi'];

$sql = "UPDATE `thongtin1` SET `ten`='$ten',`email`='$email',`sdt`='$sdt',`diaChi`='$diaChi' WHERE taiKhoanKh = '$ma' ";
$sql1 = $db->thucthi($sql);

echo"<script>alert('Sửa thông tin thành công !')</script>";
echo"<script>window.location.href ='user.php';</script>";
?>