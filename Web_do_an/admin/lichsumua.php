<?php  
			require_once 'condb1.php';
			$maMuahang = $_GET['maMuahang'];
			$maSp = $_GET['maSp'];
			
			$soluong = $_GET['soluong'];
			$tongTien = $_GET['tongTien'];
			$thoiGian = $_GET['thoiGian'];
			
			$sdt = $_GET['sdt'];
			//echo $maSp;
			$taiKhoanKh = $_GET['taiKhoanKh'];
			
			
			$kq2 = "delete from danggiao where maMuahang = '$maMuahang'";
			$kq3 = mysqli_query($conn,$kq2);
			
			
			
				
				
			
			$kq = "insert into lichsudonhang(taiKhoanKh,maMuahang,maSp,soluong,tongTien,thoiGian,sdt) values('$taiKhoanKh','$maMuahang','$maSp','$soluong','$tongTien','$thoiGian','$sdt')";
			$kq1 = mysqli_query($conn,$kq);
			
			
			
			
				
			
			
			 echo"<script>alert('Giao  hàng thành công!')</script>";
								 echo"<script>window.location.href ='danggiaohang.php';</script>";
			

			
			
			

?>