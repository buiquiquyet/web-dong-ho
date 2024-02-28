<?php
    $id = $_GET['maSp'];
	
	
//kết nối
    require_once 'condb1.php';

     $sql = "SELECT * FROM `sanpham` WHERE maSp = '$id'";

      $results = mysqli_query($conn,$sql);
	
      $row = mysqli_fetch_array($results);
	
	
	 //hien thi thong tin len form
	 
	
?>


<?php
	require 'condb1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sửa thông tin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	
	<link rel="icon" href="images/favicon.ico" type="image/favicon.ico" />
</head>
<body>
	
	
							<?php

							

							$lietke_sql = "SELECT * FROM loaisanpham ";
							//thuc thi cau lenh
							$result= mysqli_query($conn,$lietke_sql);
							//duyet qua  va in ra
							
						
							
								?>
								
	<div class="limiter">
	
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
				<form action="suaSp.php" method = "post" enctype="multipart/form-data">
				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Edit Sản Phẩm
					</span>

					
					<label> Mã Loại Sản Phẩm : </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						 <select class="input100"  name="maLoai"  value="<?php echo $row['maLoai']?>" >
						 <?php while ($r_loai = mysqli_fetch_array($result)){?>
								<option value = "<?php echo  $row['maLoai']?>" ><?php echo  $r_loai['tenLoai']?></option>
								
								 <?php	}	?>
							  </select>
							  <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</span>
					</div>
					<label> Mã sản phẩm : </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="maSp"  value="<?php echo $row['maSp'];?>" readonly >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
						</span>
					</div>
					<label> Tên Sản Phẩm : </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="tenSp"  value="<?php echo $row['tenSp'];?>" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
						</span>
					</div>
					
					<label> Đơn Giá : </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="number" name="donGia" value="<?php echo $row['donGia']?>"  >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
					</div>
					
					 <label> Mô Tả :  </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						 <textarea class="input100" rows="5"  name = "moTa"    ><?php echo $row['moTa']?></textarea>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
					</div>
					 <label> Số Lượng : </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="number" name="soLuong" min ="0" value="<?php echo $row['soLuong']?>"  >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
					</div>
					
				
					<label> Trạng Thái : </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<select class="input100" type="text" name="trangThai" value="<?php echo $row['trangThai']?>"   >
								<option value= 0 >Sẵn hàng</option>
								<option value= 1 >Hết hàng</option>
								<option value= 2 >Nổi bật</option>
								<option value= 3 >Bán chạy</option>
							  </select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
						
					</div>
					<label> Ảnh :  </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input  type="file"  class="input100" name="anh" value="<?php echo $row['anh']?>" >
					<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
						
					
					</div>
					<label> Ảnh MÔ TẢ :  </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input  type="file"  class="input100" name="anh1" value="<?php echo $row['anh1']?>" >
					<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
						
					
					</div>
					<label> Ảnh MÔ TẢ :  </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input  type="file"  class="input100" name="anh2" value="<?php echo $row['anh2']?>" >
					<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
						
					
					</div>
					
					
					
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit"  onclick = "return alert('Bạn đã sửa thành công!');"  name="add">
							Edit
						</button>
						<input type="hidden" class="form-control"  name = "maLoai" value="<?php echo $row['maLoai']?>" >
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
			
 