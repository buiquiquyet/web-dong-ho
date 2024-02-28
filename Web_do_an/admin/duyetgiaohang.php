<?php  
			require_once 'condb1.php';
			$maMuahang = $_GET['maMuahang'];
			$maSp = $_GET['maSp'];
			$ten = $_GET['ten'];
			$soluong = $_GET['soluong'];
			$tongTien = $_GET['tongTien'];
			$thoiGian = $_GET['thoiGian'];
			$diaChi = $_GET['diaChi'];
			$email = $_GET['email'];
			$sdt = $_GET['sdt'];
			//echo $maSp;
			$taiKhoanKh = $_GET['taiKhoanKh'];
			
			$kq2 = "delete from cholayhang where maMuahang = '$maMuahang'";
			$kq3 = mysqli_query($conn,$kq2);
			
			
			if($kq3){
				
				
			
			$kq = "insert into danggiao(taiKhoanKh,maMuahang,maSp,ten,soluong,tongTien,thoiGian,diaChi,email,sdt,trangthai) values('$taiKhoanKh','$maMuahang','$maSp','$ten','$soluong','$tongTien','$thoiGian','$diaChi','$email','$sdt','đang giao hàng')";
			$kq1 = mysqli_query($conn,$kq);
			
			
			
			
			 echo"<script>alert('Chuyển sang giao hàng!')</script>";
								 echo"<script>window.location.href ='danggiao.php';</script>";
			}
								    

			
			
			

?>