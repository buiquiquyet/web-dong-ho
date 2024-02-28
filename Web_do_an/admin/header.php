
<?php
if(!isset($_SESSION)){
    session_start();
	
   }

  if(!isset($_SESSION["user1"])){
    header("location:login1.php");
	
   }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/favicon.ico" />

    <title>Admin  </title>

  
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
   
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="tables1.php" class="site_title"><i class="fa fa-home"></i> <span>Trang chủ</span></a>
            </div>

            <div class="clearfix"></div>

        
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img1.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION["user1"] ?></h2>
              </div>
            </div>

            <br />

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Quản Trị</h3>
                <ul class="nav side-menu">
               
                  <li><a href="tables1.php"><i class="fa fa-table"></i> Admin </a>
                   
                  </li>
				          <li><a href="user.php"><i class="fa fa-table"></i> User </a>
                   
                  </li>
                  <li><a href="../khachhang/index.php"><i class="fa fa-bar-chart-o"></i> Loại sản phẩm</a>
                 
                  </li>
                  <li><a  href="sanpham.php"><i class="fa fa-clone"></i>Sản phẩm </a>
                   
                  </li>
                  <li><a  href="dathang.php"><i class="fa fa-cart-plus"></i>Chờ xác nhận </a>
                  </li>
                  <li><a  href="danggiao.php"><i class="fa fa-cart-plus"></i> Đã duyệt </a>
                  <li><a  href="danggiaohang.php"><i class="fa fa-cart-plus"></i> Đang giao </a>
                   
                  </li>

                </ul>
              </div>
       

            </div>

            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>

        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img1.jpg" alt="">Bùi Qúi Quyết
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="logout.php" ><i class="fa fa-sign-out pull-right"></i> Log Out</a>

                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img1.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Bùi Qúi Quyết</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img1.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Bùi Qúi Quyết</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img1.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Bùi Qúi Quyết</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img1.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Bùi Qúi Quyết</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>