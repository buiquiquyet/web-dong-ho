<?php
include 'phpHeader.php';


$data = json_decode(file_get_contents('php://input'),true);
$ten = $data['ten'];
$email = $data['email'];
$sdt = $data['sdt'];
$tinNhan = $data['tinNhan'];
if($ten){
    $sql = "insert into thongtin values('$ma','$ten','$email','$tinNhan','$sdt')";
    $sql1 = $db->thucthi($sql);
    if($sql1){
        echo json_encode('ok');
    }else{
        echo json_encode('ko');
    }
}
?>