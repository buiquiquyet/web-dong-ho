<?php
	require 'condb1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Thêm sinh viên</title>
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
	
				
	<div class="limiter">
	
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
				<!--<form action="them.php" method = "post">-->
				
						
					<form action="them11.php"  method = "post">
				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="maSv" placeholder="Tên đăng nhập">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="password" name="tenSv" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="lop" placeholder="Lớp">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<?php	
							//nhan du lieu tu form
							require_once 'condb1.php';
							if($_POST){
								$maSv = $_POST['maSv'];
								$tenSv = $_POST['tenSv'];
								$lop = $_POST['lop'];
								$email = $_POST['email'];
								//ket not csdl;
								//$tenSv =  md5($tenSv);
								
								if ($maSv == "" || $tenSv =="" || $lop == "" || $email == "") {
								 	echo '<p style="color:red">Thông tin không được để trống!</p>';
								}
								else{
										// Kiểm tra tài khoản đã tồn tại chưa
										$sql="select * from sinhvien1 where maSv='$maSv'";
										$kt=mysqli_query($conn, $sql);

										if(mysqli_num_rows($kt)  > 0){
											echo '<p style="color:red">Tài khoản đã tồn tại!</p>';
									
										}else{
												$themsql = "INSERT INTO sinhvien1 (maSv, tenSv,lop,email) VALUES ('$maSv','$tenSv', '$lop','$email') ";
												//echo $themsql; exit;
												//thuc thi cau lenh themsv;
												
												mysqli_query($conn, $themsql);
												
												header("location: tables1.php");
												}
									}
							}
												
						?>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
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