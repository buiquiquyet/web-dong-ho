<?php
include 'database.php';
$db = new database();
$data = json_decode(file_get_contents('php://input'), true);
$ma = $data['maMuahang'];
$sql = "update danggiao set trangthai = 'đã nhận hàng' where maMuahang = '$ma'";
$sql1 = $db->thucthi($sql);
if($sql1){
    echo json_encode('ok');
}else{
    echo json_encode('loi');
}

?>