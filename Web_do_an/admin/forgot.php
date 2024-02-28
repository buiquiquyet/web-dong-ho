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
										
									$user_name =  isset($_POST['user_name']) ? $_POST['user_name'] : '';
									$user_pass =  isset($_POST['user_pass']) ? $_POST['user_pass'] : '';
									
									$r=mysqli_query($conn,"SELECT maSv FROM `sinhvien1` WHERE  1");
									
									$row=mysqli_fetch_assoc($r);
									//var_dump($row);
									//die;
									 $id =  $row['maSv'];
									if ($user_name == "" ) {
										echo"<script>alert('Nhập tên đăng nhập!')</script>";
										
									}
									
									
									else if($r){
										if($user_name = $row){
											$ro = mysqli_query($conn,"update sinhvien1 set tenSv = '$user_pass' where maSv = $id");
											if($ro)
											{echo"<script>alert('Thành công!')</script>";}
										}else{
											echo"<script>alert(' không Thành công!')</script>";
										}
									   

									}
									 else if($user_name != $row){
										 
											echo "<script>alert('Tên đăng nhập không chính xác')</script>";
											
									}
									
									
								}
									?>		
        <form action="forgot.php" id="form-login"  method="post">
            <h1 class="form-heading">Nhập tên đăng nhập</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" placeholder="Tên đăng nhập" name="user_name" autocomplete="off" autofocus/>
            </div>
			            <input type="submit" value="Recover Password" class="form-submit" name = "ok">
					  
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" placeholder="Mật khẩu" name="user_pass" >
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
				
            </div>
			
             <input type="submit" value="BACK LOGIN" class="form-submit" name = "ok">
        </form>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</html>