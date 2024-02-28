<?php
include "database.php";
$db = new database();
$data = json_decode(file_get_contents('php://input'), true);
$maSp = $data['productId'];
$maMuahang = $data['productmaMuahang'];
$productSl = $data['productSl'];
$productAdmin = $data['productAdmin'];
$productLoai = $data['productLoai'];

if($maMuahang =="" || $maMuahang == $productAdmin){

    echo json_encode("");
}
else {
    if($productSl < 1){
        echo json_encode("hethang");     
    }
    else{
        $sql = "select * from giohang where maSp = '$maSp' and taiKhoanKh = '$maMuahang'";
        $sql1 = $db->thucthi($sql);
        $row = mysqli_fetch_array($sql1);
        if($row){
            echo json_encode("dathem");  
        }else{

            $themvaogio = "insert into giohang(taiKhoanKh,maSp) values('$maMuahang','$maSp')";
            $kq = $db->thucthi($themvaogio);
            
            $sql ="select count(maSp) as cartCount from giohang where taiKhoanKh='$maMuahang'";
            $kq1 = $db->thucthi($sql);
            $giohang = mysqli_fetch_assoc($kq1);
            echo json_encode($giohang);
        }
    }
                    
}
?>