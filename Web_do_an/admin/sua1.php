<?php
    $id = $_GET['maSv'];
//kết nối
    require_once 'condb1.php';

     $sql = "SELECT * FROM `sinhvien1` WHERE maSv = '$id'";

     $results = mysqli_query($conn,$sql) or die( mysqli_error($conn));
	 

     $row = mysqli_fetch_array($results);

	 
	 //hien thi thong tin len form
?>

<!--<!DOCTYPE html>
<html lang="en">

<head>

<title>Edit sinh viên</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device - width ,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<link rel="icon" href="images/favicon.ico" type="image/favicon.ico" />
    <title>Gentelella Alela!  </title>
</head>
<body>
<div class = "container col-sm-5">
<h1>Sửa thông tin sinh viên</h1>
				<form action="edit1.php" method = "post">
			  <div class="form-group">
				<label for="maSv">MaSv</label>
				<input type="text" class="form-control"  name = "maSv" value="<?php echo $row['maSv']?>" disabled >
			  </div>
			  <div class="form-group">
				<label for="tenSv">TenSv</label>
				<input type="text" class="form-control"  name = "tenSv" value="<?php echo $row['tenSv']?>" >
			  </div>
			   <div class="form-group">
				<label for="lop">Lớp</label>
				<input type="text" class="form-control"  name = "lop"  value="<?php echo $row['lop']?>">
			  </div>
			  <div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control"  name = "email"  value="<?php echo $row['email']?>">
			  </div>
			  <div class="form-group form-check">
				<!--<label class="form-check-label">
				  <input class="form-check-input" type="checkbox"> Remember me
				</label>
			  </div>-->
			  <!--<button type="submit" class="btn btn-primary"  onclick = "return alert('Bạn đã sửa thành công!');" >Sửa</button>
			  <input type="hidden" class="form-control"  name = "maSv" value="<?php echo $row['maSv']?>" >
			</form>
			</div><div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>
</body>
</html>-->
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
	
	<div class="limiter">
	
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
				<form action="edit1.php" method = "post">
				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Member Edit
					</span>
						
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="maSv" placeholder="Mã"value="<?php echo $row['maSv']?>" disabled>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="tenSv" placeholder="Họ Tên" value="<?php echo $row['tenSv']?>" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
						</span>
					</div>
					
					<!-- <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="lop" placeholder="Lớp" value="<?php echo $row['lop']?>" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>			
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="email" placeholder="Email" value="<?php echo $row['email']?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					 -->
					
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn"  onclick = "return alert('Bạn đã sửa thành công!');" >
							Edit
						</button>
						<input type="hidden" class="form-control"  name = "maSv" value="<?php echo $row['maSv']?>" >
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
			
 