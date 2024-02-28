<?php
//lay du lieu id can xoa

 	$maMuahang = $_GET['maMuahang'];
    $id = $_GET["tenSp"];
	$soluong = $_GET['soluong'];
	$sl = $_GET['sl'];
    require_once 'condb1.php';
	 $update = "update sanpham set soLuong = ($sl + $soluong) where maSp = '$id'";
												  $suasoluong = mysqli_query($conn,$update);
    $xoa = "DELETE FROM cholayhang WHERE maMuahang = '$maMuahang' ";

    $results = mysqli_query($conn,$xoa);
	
    header('location:danggiao.php');

?>