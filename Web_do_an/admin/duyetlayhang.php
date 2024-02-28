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
			
			$kq2 = "delete from muahang where maMuahang = '$maMuahang'";
			$kq3 = mysqli_query($conn,$kq2);
			
			
			if($kq3){
				
				
			
			$kq = "insert into cholayhang(taiKhoanKh,maMuahang,maSp,ten,soluong,tongTien,thoiGian,diaChi,email,sdt) values('$taiKhoanKh','$maMuahang','$maSp','$ten','$soluong','$tongTien','$thoiGian','$diaChi','$email','$sdt')";
			$kq1 = mysqli_query($conn,$kq);
			
			
			
			
			 echo"<script>alert('Đã duyệt hàng thành công!')</script>";
								 echo"<script>window.location.href ='dathang.php';</script>";
			}
								    

			
			
			

?>