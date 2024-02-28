<?php
//lay du lieu id can xoa

    $id = $_GET["maSv"];

    require_once 'condb1.php';
    $xoa = "DELETE FROM sinhvien1 WHERE maSv = '$id' ";

    $results = mysqli_query($conn,$xoa);
	
    header('location: tables1.php');

?>