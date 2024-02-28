<?php

$loai = $_GET['loai'];
$maSp = $_GET['maSp'];
$soLuong = $_GET['soLuong'];
    
$ma = $_GET['maMuahang'];
$admin = $_GET['admin'];
    
if($ma =="" || $ma == $admin){
    echo"<script>
    if(confirm('Bạn cần đăng nhập để mua hàng!')){
        window.location.href ='loginKh.php';
    }else{
        window.location.href ='product.php?maLoai=$maSp&loai=$loai';
    }</script>";
   

    echo"<script>window.location.href ='loginKh.php';</script>";
}else{
    if($soLuong < 1){
    echo"<script>alert('Sản phẩm đã hết hàng !')</script>";
    echo"<script>window.location.href ='product.php?maLoai=$maSp&loai=$loai';</script>";
    }
    else{                                                                  
    echo"<script>window.location.href ='buy.php?maSp=$maSp&soLuong=$soLuong';</script>";
                                    
    }
}


?>