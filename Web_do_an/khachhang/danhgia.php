<?php
include "phpHeader.php";

$data = json_decode(file_get_contents('php://input'), true);

$ten = $data['ten'];
$nhanxet = $data['nhanxet'];
$maLoai = $data['maLoai'];
if ($ten == "" || $nhanxet ==""  ) {
    echo json_encode("warning");
}else{
$kq = "INSERT INTO nhanxet(ten,nhanxet,maLoai) VALUES('$ten','$nhanxet','$maLoai')";
$kq_insert = $db->thucthi($kq);
echo json_encode("ok");
}

?>