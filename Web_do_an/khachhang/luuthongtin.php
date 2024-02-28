<?php
include  "database.php";
$db = new database();

$taikhoan = $_GET['taikhoan'];
$ten = $_POST['ten'];
$ten1 = $_POST['ten1'];
$email =$_POST['email'];
$sdt = $_POST['sdt'];
$diaChi = $_POST['diaChi'];
if ($ten == "" || $email =="" || $sdt == "" || $diaChi == "" ) {
    echo"<script>alert('Thông tin không được để trống !')</script>";
    echo"<script>window.location.href ='user.php';</script>";
}else{
    $sql = "insert into thongtin1(taiKhoanKh,ten,email,sdt,diaChi) values('$taikhoan','$ten','$email','$sdt','$diaChi')";
    $xoa = "DELETE FROM `thongtin1` WHERE ten ='$ten1' and taiKhoanKh = '$taikhoan'";
    $xoa1  = $db->thucthi($xoa);
    $sql1 = $db->thucthi($sql);
    echo"<script>alert('Lưu thông tin thành công !')</script>";
    echo"<script>window.location.href ='user.php';</script>";
}
?>