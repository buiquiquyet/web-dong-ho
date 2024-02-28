<?php
include "phpHeader.php";

$data  = json_decode(file_get_contents('php://input'), true);
$maGio = $data['maGio'];

$xoa = "DELETE FROM giohang WHERE maGio = '$maGio' ";
$results = $db->thucthi($xoa);

$sql ="select count(maSp) as cartCount from giohang where taiKhoanKh='$ma'";
$kq1 = $db->thucthi($sql);
$giohang = mysqli_fetch_assoc($kq1);

if($results){
    echo json_encode($giohang);
}else{
    echo json_encode('loi');
}

?>