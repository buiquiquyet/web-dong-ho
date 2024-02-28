<?php

include "phpHeader.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Shop</title>
    <link rel="stylesheet" href="icon/icon/css/all.min.css">
    
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="main.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</head>
<style>
    .notification {
       display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 45px 40px;
        background-color: rgba(0, 0, 0, 0.7);
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        z-index: 999;
        font-size: 2rem;
        color:white;
        font-weight: bold;
        flex-direction: column;
        align-items: center;
    }
    .notificationI{
        font-size: 3rem;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        border-radius: 100%;
        background-color: aquamarine;
        justify-content: center;
        margin-bottom: 30px;
    }
   .show{
    display: flex;
   }
</style>
<body>
<div class="notification" > </div>
    <div class="header_are">
        <div class="header_social">
            <a href="">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
        <header class="header_section">
            <div class="header_nav">
                <a href="index.php" class="header_brand">
                    <span>SHOPDONGHO.com</span>
                </a>
                <div class="header_option">


                    <form action="" class="header_searchForm">
                        <!-- <input type="text" class="searchForm_input" placeholder="Nhập từ khóa tìm kiếm"> -->
                        <a href="phanLoaiProduct.php" class="header_btnSearch2">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                    </form>
                    <div class="header_selection">
                        <div class="header_selection--a">

                            <a href="cart.php" class="header_a">
                                <i class="fa-solid fa-cart-plus"></i>
                                <div class="header_selection--info"><span>Giỏ hàng </span> <span class="selection_info--span" id=""><?php echo $giohang['count(maSp)'] ?> sản phẩm</span>  </div>
                            </a>
                        </div>
                        <div class="header_selection--a">

                            <a href=""  class="header_a">
                                <i class="fa-solid fa-phone"></i>
                                <div class="header_selection--info"><span>Hotline </span> <span class="selection_info--span">0379952714</span></div>
                            </a>
                        </div>
                        <div class="header_selection--a header_user">

                            <!-- <button href="checkthongtin.php?taikhoan=<?php echo $ma?>"   class="header_a"> -->
                            <button id="btn_dangnhap"   class="header_a">
    
                                <i class="fa-solid fa-user"></i>
                                <div class="header_selection--info "><span>Tài khoản </span> <span class="selection_info--span"><?php echo( $ma ?  $ma : "</br>" )  ?></span>   </div>
                                </button> 
                                <div class="user_menu">
                                    <a href="logoutKh.php" class="user_login">
                                        Log Out
                                    </a>
                                    <a href="dangkiKh.php" class="user_login">
                                        Sign In
                                    </a>
    
    
                                </div>
                            
                        </div>
                       
                        
                           
                        

                    </div>
                </div>
            </div>
            <?php 
            $sql1 = "SELECT * FROM loaisanpham";
            $results = $db->thucthi($sql1);


            ?>
            <div class="header_nav">
                <div class="header_menu">
                    <div class="header_menu--chosse">
                        <i class="fa-solid fa-caret-down"></i> TẤT CẢ THƯƠNG HIỆU

                        <ul class="header_menu--down">
                        <?php while($rows = mysqli_fetch_assoc($results)){ ?>
                            <a href="sanPhamTheoMa.php?maLoai=<?php echo $rows ['maLoai']; ?>&tenLoai=<?php echo $rows['tenLoai']; ?> ">
                                <li class="header_down-item"><?php echo $rows['tenLoai']; ?></li>
                            </a>
                            <?php  } ?>
                        
                        </ul>
                    </div>
                    <ul class="header_list">
                        <li class="header_list-items">
                            <a href="#home1" id="home" class="items_link">HOME</a>
                        </li>
                        <li class="header_list-items">
                            <a href="#watch1" id="watch" class="items_link">WATCHES</a>
                        </li>
                        <li class="header_list-items">
                            <a href="#about1" id="about" class="items_link">ABOUT</a>
                        </li>
                        <li class="header_list-items">
                            <a href="#contact1" id="contact" class="items_link">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>