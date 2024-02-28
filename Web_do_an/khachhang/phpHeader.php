<?php
include "database.php";
global $db;
$db = new database();
if(!isset($_SESSION)){
    session_start();
    $ma="";
    $ma1="";
   }
if(isset($_SESSION["user"])){

$ma =$_SESSION['user'];

}

$sql ="select count(maSp) from giohang where taiKhoanKh='$ma'";
$kq1 = $db->thucthi($sql);
$giohang = mysqli_fetch_array($kq1);
?>
