<?php
	require 'condb1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Thêm sản phẩm</title>
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
							//nhan du lieu tu form
							
							require_once 'condb1.php';
							if(isset($_POST["btn_ok"])){
								$maLoai =  isset($_POST['maLoai']) ? $_POST['maLoai'] : '';
								$tenSp =  isset($_POST['tenSp']) ? $_POST['tenSp'] : '';
								$donGia =  isset($_POST['donGia']) ? $_POST['donGia'] : 0;
								$trangThai =  isset($_POST['trangThai']) ? $_POST['trangThai'] : '';
								$anh =  basename($_FILES["anh"]["name"]);
								$anh1 =  basename($_FILES["anh1"]["name"]);
								$anh2 =  basename($_FILES["anh2"]["name"]);
								$moTa =  isset($_POST['moTa']) ? $_POST['moTa'] : '';
								$soLuong =  isset($_POST['soLuong']) ? $_POST['soLuong'] : 0;
								//ket not csdl;
								//$tenSv =  md5($tenSv);
								//upload ảnh
								
								$target_dir = "../khachhang/img/";
								$target_file = $target_dir .basename($_FILES["anh"]["name"]);
								$target_file1 = $target_dir .basename($_FILES["anh1"]["name"]);
								$target_file2 = $target_dir .basename($_FILES["anh2"]["name"]);
								$uploadOk = 1;
								$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
								$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
								$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

								$check = getimagesize($_FILES["anh"]["tmp_name"]);
								$check1 = getimagesize($_FILES["anh1"]["tmp_name"]);
								$check2 = getimagesize($_FILES["anh2"]["tmp_name"]);
								if($check !== false || $check1 !== false || $check2 !== false) {	
								$uploadOk = 1;
								} else {
							
								}
								if ($uploadOk == 0) {
								} else {
									if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["anh1"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["anh2"]["tmp_name"], $target_file2)) {
										
									} else {
									
									}
								}
											
									$themsql = "INSERT INTO `sanpham` (maLoai, tenSp,donGia,anh,anh1,anh2,moTa,soLuong,trangThai) VALUES ('$maLoai','$tenSp', '$donGia','$anh','$anh1','$anh2','$moTa','$soLuong','$trangThai') ";
									mysqli_query($conn, $themsql);
									
									header("location: sanpham.php");
												

							}
												
						?>
		
						<?php

							

							$lietke_sql = "SELECT * FROM loaisanpham ";
							//thuc thi cau lenh
							$results = mysqli_query($conn,$lietke_sql);
							//duyet qua  va in ra
							
								?>
	<div class="limiter">
	
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
						
					<form action="themSp.php"  method = "post" enctype="multipart/form-data">
				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Thêm Sản Phẩm
					</span>
					
					
					<label> Mã Loại Sản Phẩm : </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						 <select class="input100" type="text" name="maLoai"  >
						 <?php while ($r_loai = mysqli_fetch_assoc($results)){?>
								<option value = "<?php echo  $r_loai['maLoai'];?>"><?php echo  $r_loai['tenLoai'];?></option>

								 <?php	}	?>
							  </select>
							  <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</span>
					</div>
					
					<label> Tên Sản Phẩm : </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="tenSp" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
						</span>
					</div>
					
					<label> Đơn Giá : </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="number" name="donGia" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
					</div>
					
					 <label> Mô Tả :  </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						 <textarea class="input100" rows="5"  name = "moTa"  ></textarea>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
					</div>
					<label> Số Lượng : </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="number"  min ="0" name="soLuong" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
					</div>
					
				
					<label> Trạng Thái : </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<select class="input100" type="text" name="trangThai"  >
								<option value = 0 >Sẵn hàng</option>
								<option value = 1>Hết hàng</option>
								<option value = 2>Nổi bật</option>
								<option value =3>Bán chạy</option>
							  </select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
						
					</div>
					<label> Ảnh :  </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input  type="file"  class="input100" name="anh" >
					<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
					
					</div>
					<label> Ảnh mô tả :  </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input  type="file"  class="input100" name="anh1" >
					<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
					
					</div>
					<label> Ảnh mô tả :  </label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input  type="file"  class="input100" name="anh2" >
					<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
					
					</div>
					
					
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name ="btn_ok">
						
							Thêm
						</button>
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