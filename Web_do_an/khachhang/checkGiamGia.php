<?php

include "phpHeader.php";

$data = json_decode(file_get_contents('php://input'), true);


if (isset($data['giamGia'])) {
  $giamgia = $data['giamGia'];
  if(empty($giamgia)){
    echo json_encode("hong");
  }
  else{

    $uudai = "select * from magiamgia where ma = '$giamgia' and taiKhoanKh='$ma'";
    $uudai1 = $db->thucthi($uudai);
    $uudai2 = mysqli_fetch_array($uudai1);
    if ($uudai2) {
        echo json_encode("thanhcong");
    } else {
        echo json_encode("kothanhcong");
    }
  }
} else {
  echo json_encode("rong");
}
  


?>