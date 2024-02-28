<?php
//lay du lieu id can xoa

    $id = $_GET["tenSp"];

    require_once 'condb1.php';
    $xoa = "DELETE FROM sanpham WHERE tenSp = '$id' ";

    $results = mysqli_query($conn,$xoa);
	
    header('location: sanpham.php');

?>