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

    <title>Đăng nhập</title>
</head>

<body>
    <div id="wrapper">
	<?php
								if(!isset($_SESSION)){
									session_start();
								   }

								   if(isset($_SESSION["user1"])){
									header("location:tables1.php");
								   }
								  
								if($_POST){
	
									$user_name=$_POST['user_name'];
									$user_pass= ($_POST['user_pass']);
									$result=mysqli_query($conn,"SELECT * from sinhvien1 where maSv='$user_name' and tenSv='$user_pass'");
									$row=mysqli_fetch_array($result);
									//var_dump($row);
									//die;
									if ($user_name == "" || $user_pass =="") {
										echo "<script>alert('Tên đăng nhập hoặc password bạn không được để trống!')</script>";
									}
									else if(is_array($row)){
									 
									   echo"<script>alert('Đăng nhập thàng công!')</script>";
									 //header("Location: tables1.php");
									 $_SESSION["user1"] = $row["maSv"];
									 echo"<script>window.location.href ='tables1.php';</script>";

									 
									}else{
										
									 	echo "<script>alert('Tài khoản hoặc mật khẩu chưa đúng!')</script>";
										//echo $user_name;
										//echo $user_pass;
										
									}
									}
									?>		
        <form action="login1.php" id="form-login"  method="post">
            <h1 class="form-heading">Đăng nhập</h1>
		
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" placeholder="Tên đăng nhập" name="user_name" autocomplete="off" autofocus/>
            </div>
			
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" placeholder="Mật khẩu" name="user_pass" autocomplete="off" autofocus/>
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
				
            </div>
			
            <input type="submit" value="Đăng nhập" class="form-submit">
			 <a class="dropdown-item"  href="dangki.php" ><i class="fa fa-sign-out pull-right"></i> Sign Up</a>
			 
			 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			 <!-- <a class="dropdown-item"  href="forgot.php" ><i class="fa fa-sign-out pull-right"></i> Forgot password</a>-->
			
        </form>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</html>