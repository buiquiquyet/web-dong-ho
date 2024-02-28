<?php
include "class.database.php";
global $conn;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="icon" href="images/favicon.ico" type="image/favicon.ico" />

    <title>Đăng kí</title>
</head>

<body>
    <div id="wrapper">
	<?php
								/*if(!isset($_SESSION)){
									session_start();
								   }

								   if(isset($_SESSION["user"])){
									//header("location:tables1.php");
								   }*/
								  
								if(isset($_POST['ok'])){
	
									$user_name=$_POST['user_name'];
									$user_pass=($_POST['user_pass']);
									$user_pass1=($_POST['user_pass1']);
									
									
									$r=mysqli_query($conn,"SELECT * FROM `sinhvien1` WHERE maSv = '$user_name'");

									$row=mysqli_fetch_array($r);
									//var_dump($row);
									//die;
									if($user_name =="" || $user_pass =="" || $user_pass1 == ""){
										echo "<script>alert('Thông tin không được để trống!')</script>";
									}
									else if($user_pass != $user_pass1){
										echo "<script>alert('Mật khẩu không trùng nhau!')</script>";
									}else{
									 
									 
									 if($row == null){
									 
									   echo"<script>alert('Đăng kí thàng công!')</script>";
									$result=mysqli_query($conn,"insert into  sinhvien1 values('$user_name','$user_pass')");
									
									 echo"<script>window.location.href ='login1.php';</script>";

									 
									}
									
									else {
											echo "<script>alert('Tài khoản đã tồn tại!')</script>";
									
									}
									}
									
								}
									?>		
        <form action="dangki.php" id="form-login"  method="post">
            <h1 class="form-heading">Đăng kí</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" placeholder="Tên đăng kí" name="user_name" autocomplete="off" autofocus/>
            </div>
			
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" placeholder="Mật khẩu" name="user_pass" autocomplete="off" autofocus/>
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
				
            </div>
			 <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" placeholder="Nhập Lại Mật Khẩu" name="user_pass1" autocomplete="off" autofocus/>
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
				
            </div>
			
            <input type="submit" value="Đăng kí" class="form-submit" name = "ok">
			<a href="login1.php">Back</a>
        </form>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</html>