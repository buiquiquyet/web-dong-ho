<?php
include "phpHeader.php";

$data = json_decode(file_get_contents('php://input'), true);

$maSp = $data['ma'];
$tongtien = intval($data['tongtien']);
$hoTen = $data['hoTen'];
$sdt = $data['sdt'];
$diaChi = $data['diaChi'];
$email = $data['email'];
$sl = intval($data['sl']);
$sl_old = intval($data['sl_old']);
if ($hoTen == "" || $email =="" || $sdt == "" || $diaChi == ""  ) {
    echo json_encode("warning");
}else{
    $themsql = "INSERT INTO muahang (taiKhoanKh,ten, email,sdt,diaChi,soLuong,maSp,tongTien) VALUES ('$ma','$hoTen','$email', '$sdt','$diaChi ','$sl','$maSp','$tongtien') ";
    $result_add = $db->thucthi($themsql);
   
    $xoa = "delete from giohang where maSp = $maSp";
    $results =$db->thucthi($xoa);
    
    $update = "update sanpham set soLuong = ($sl_old - $sl) where maSp = $maSp";
    $suasoluong = $db->thucthi($update);
    if($result_add && $results && $suasoluong){
        $sql ="select count(maSp) as cartCount from giohang where taiKhoanKh='$ma'";
        $kq1 = $db->thucthi($sql);
        $giohang = mysqli_fetch_assoc($kq1);
        echo json_encode($giohang);
        
    }
    
}


?>