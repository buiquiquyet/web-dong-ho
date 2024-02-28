<?php
include 'database.php';
$db = new database();

$data = json_decode(file_get_contents('php://input'),true);
$arr = [];
$value = $data['value'];
if($value){
    $sql = "select *  from sanpham where tenSp like '%$value%'";
    $sanpham = $db->thucthi($sql);
    while($row = mysqli_fetch_array($sanpham)){

        $arr[] = $row;
    }
    echo json_encode(($arr));
}

?>