<?php
include "headerProduct.php"
?>
 </div>
 <div class="user" style="background-color:#f5f5f5;padding-bottom:50px">

     <div class="grid_product" style=" padding-top: 30px;display:flex; ">

    <div class="grid_userLeft">
        <div class="user_lable">TÀI KHOẢN</div>
        <div class="user_img">
            <img src="img/anh.jpg"  alt="">
        </div>
        <div class="user_name"> <span>Tên:</span>  <?php echo $ma ?></div>
        <div class="user_rank"><span>Rank:</span>  
        <?php
            $dem30 = "select count(maMuahang) from lichsudonhang where taiKhoanKh = '$ma'";
            $dem40 = $db->thucthi($dem30);
            $dem50 = mysqli_fetch_array($dem40);
            if($dem50['count(maMuahang)'] <3 )
                {	echo "Không";
            }
            else if($dem50['count(maMuahang)'] >= 3 && $dem50['count(maMuahang)'] < 5)
            {       echo " "."Bạc";
                    $xoa=$db->thucthi("delete from magiamgia where stt = '1'");		
                    $them1 = $db->thucthi("insert into magiamgia value('0OpaH','$ma','1')");
            }
            else if($dem50['count(maMuahang)'] >=5 && $dem50['count(maMuahang)'] < 7)
            {       echo " "."Vàng";
                    $xoa=$db->thucthi("delete from magiamgia where stt = '1'");
                    $xoa1=$db->thucthi("delete from magiamgia where stt = '2'");
                    $them1 = $db->thucthi("insert into magiamgia value('0OpaH','$ma','1')");
                    $them2 = $db->thucthi("insert into magiamgia value('KHp03','$ma','2')");
            }
            else if($dem50['count(maMuahang)'] >=7 && $dem50['count(maMuahang)'] < 10)
            {       echo " "."Bạch kim";
                    $xoa=$db->thucthi("delete from magiamgia where stt = '1'");
                    $xoa1=$db->thucthi("delete from magiamgia where stt = '2'");
                    $xoa2=$db->thucthi("delete from magiamgia where stt = '3'");
                    $them1 = $db->thucthi("insert into magiamgia value('0OpaH','$ma','1')");
                    $them2 = $db->thucthi("insert into magiamgia value('KHp03','$ma','2')");
                    $them3 = $db->thucthi("insert into magiamgia value('NMVU5','$ma','3')");
            
            }
            else{ echo " "." Kim Cương";
                    $xoa=$db->thucthi("delete from magiamgia where stt = '1'");
                    $xoa1=$db->thucthi("delete from magiamgia where stt = '2'");
                    $xoa2=$db->thucthi("delete from magiamgia where stt = '3'");
                    $xoa3=$db->thucthi("delete from magiamgia where stt = '4'");
                    $them1 = $db->thucthi("insert into magiamgia value('0OpaH','$ma','1')");
                    $them2 = $db->thucthi("insert into magiamgia value('KHp03','$ma','2')");
                    $them3 = $db->thucthi("insert into magiamgia value('NMVU5','$ma','3')");
                    $them4 = $db->thucthi("insert into magiamgia value('84Tbc','$ma','4')");
        
            }
            ?></div>
        <div class="user_code"><span>Mã ưu đãi:</span> 
        <?php
            if($dem50['count(maMuahang)'] <3 )
                {	echo " "."Không";}
            if($dem50['count(maMuahang)'] >= 3 && $dem50['count(maMuahang)'] < 5)
                { echo " "."0OpaH -- 5%"; }
            if($dem50['count(maMuahang)'] >=5 && $dem50['count(maMuahang)'] < 7)
                { echo " "."0OpaH -- 5% <br>KHp03 -- 7%";}
            if($dem50['count(maMuahang)'] >= 7 &&  $dem50['count(maMuahang)'] < 10)
                {echo " "."0OpaH -- 5% <br>KHp03 -- 7%  <br>NMVU5 -- 10%";}
            if($dem50['count(maMuahang)'] >= 10)
                {echo " "."0OpaH -- 5% <br>KHp03 -- 7% <br>NMVU5 -- 10% <br>84Tbc -- 15%";}
            ?></div>
    </div>
    <?php 
        $sql5 = "select * from thongtin1 where taiKhoanKh='$ma'   ";	
        $sql6= $db->thucthi($sql5);
        $row1=mysqli_fetch_array($sql6);
        		
						?>
<div class="grid_rightUser ">
    
    <div class="userRight_labe">
        <a href="" id="lable_info" class="user_border--lable">Thông tin tài khoản</a>
        <a href="" id="lable_info">Chờ xác nhận</a>
        <a href="" id="lable_info">Đã duyệt</a>
        <a href="" id="lable_info">Đang giao</a>
        <a href="" id="lable_info">Lịch sử đơn hàng</a>
    </div>
    <div class="grid_userRight grid_userRight--show" id="box_info" >
        <form action="luuthongtin.php?taikhoan=<?php echo $ma ?>" method="post" class="user_right--form">
            <div class="user_form--lable" style="color:red">Lưu thông tin của bạn</div>
            <input type="text" placeholder="Họ và tên" name="ten">
            <input type="text" name="ten1" hidden value="<?php echo isset( $row1['ten']) ?   $row1['ten'] : '';?>" >
            <input type="text" name="email" placeholder="Nhập email">
            <input type="text" name="sdt" placeholder="Nhập số điện thoại">
            <input type="text " name="diaChi" placeholder="Nhập địa chỉ">
            <input type="submit" class="user_btn" value="Lưu" >
        </form>
        <form action="suathongtin.php?taikhoan=<?php echo $ma ?>" method="post" class="user_right--form">
            <div class="user_form--lable">Thông tin bạn đã lưu</div>
            <input type="text" placeholder="Họ và tên" value="<?php echo isset( $row1['ten']) ?   $row1['ten'] : '';?>" name="ten">
      
            <input type="text" name="email" value="<?php echo isset( $row1['email']) ?  $row1['email'] : '';?>" placeholder="Nhập email">
            <input type="text" name="sdt" value="<?php echo isset( $row1['sdt']) ?  $row1['sdt'] : '';?>" placeholder="Nhập số điện thoại">
            <input type="text " name="diaChi" value="<?php echo isset( $row1['diaChi']) ?  $row1['diaChi'] : '';?>" placeholder="Nhập địa chỉ">
            <input type="submit" class="user_btn" value="Sửa" >
        </form>

    </div>
    <?php
    $cholayhang = "SELECT * FROM muahang inner join sanpham on muahang.maSp = sanpham.maSp and muahang.taiKhoanKh = '$ma' ";
    $rs = $db->thucthi($cholayhang);
    ?>
    <div class="grid_userRight" id="box_info" style="flex-direction: column; padding:10px ">
            <!-- <div class="cart_check">
                <input type="checkbox">
            </div> -->
            <div class="cart_product">   
                <div class="cart_sp">Sản Phẩm</div>
                <div class="cart_dg">Đơn Giá</div>
                <div class="cart_sl">Số Lượng</div>
                <div class="cart_st">Số Tiền</div>
                        
            </div>
            <?php while ( $r1 = mysqli_fetch_assoc($rs)){ ?>
                <div class="cart_product">

                    <a href="" class="cart_sp">
                         <img src="img/<?php echo $r1['anh'] ?>" alt="">
                        <span><?php echo  $r1['tenSp']; ?>
                            <img src="img/vn-50009109-0b441604783532e7168faa6d0939efe3.png" alt="">
                        </span>
                    </a>
                    <div class="cart_dg"><?php echo  number_format($r1['donGia']); ?>vnđ</div>
                    <div class="cart_sl">
                    <?php echo  $r1['soluong']; ?>
                    </div>
                    <div class="cart_sumMonney cart_st"><?php echo  number_format($r1['tongTien']); ?>vnđ</div>
                                  
                </div>
            <?php } ?>    

    </div>
    <?php
        $daduyet = "SELECT * FROM cholayhang inner join sanpham on cholayhang.maSp = sanpham.maSp and cholayhang.taiKhoanKh = '$ma' ";
        $rs_daduyet = $db->thucthi($daduyet);
    ?>
    <div class="grid_userRight" id="box_info" style="flex-direction: column; padding:10px ">
            <!-- <div class="cart_check">
                <input type="checkbox">
            </div> -->
            <div class="cart_product">
                    
                    <div class="cart_sp">Sản Phẩm</div>
                    <div class="cart_dg">Đơn Giá</div>
                    <div class="cart_sl">Số Lượng</div>
                    <div class="cart_st">Số Tiền</div>
                   
                </div>
                <?php while ( $r2 = mysqli_fetch_assoc($rs_daduyet)){ ?>
                <div class="cart_product">

                    <a href="" class="cart_sp">
                         <img src="img/<?php echo $r2['anh'] ?>" alt="">
                        <span><?php echo  $r2['tenSp']; ?>
                            <img src="img/vn-50009109-0b441604783532e7168faa6d0939efe3.png" alt="">
                        </span>
                    </a>
                    <div class="cart_dg"><?php echo  number_format($r2['donGia']); ?>vnđ</div>
                    <div class="cart_sl">
                    <?php echo  $r2['soluong']; ?>
                    </div>
                    <div class="cart_sumMonney cart_st"><?php echo   number_format($r2['tongTien']); ?>vnđ</div>
                        
                </div>
                <?php } ?>    

    </div>
    <?php
        $danggiao = "SELECT * FROM danggiao inner join sanpham on danggiao.maSp = sanpham.maSp and danggiao.taiKhoanKh = '$ma' ";
        $rs_danggiao = $db->thucthi($danggiao);
    ?>
    <div class="grid_userRight" id="box_info" style="flex-direction: column; padding:10px ">
            <!-- <div class="cart_check">
                <input type="checkbox">
            </div> -->
            <div class="cart_product">
                    
                    <div class="cart_sp">Sản Phẩm</div>
                    <div class="cart_dg">Đơn Giá</div>
                    <div class="cart_sl">Số Lượng</div>
                    <div class="cart_st">Số Tiền</div>
                    <div class="cart_tt1">Trạng Thái</div>
                    <div class="cart_tTac">Thao Tác</div>
                   
                </div>
                <?php while ( $r3 = mysqli_fetch_assoc($rs_danggiao)){ ?>
                <div class="cart_product">
                    <a href="" class="cart_sp">
                         <img src="img/<?php echo $r3['anh'] ?>" alt="">
                        <span><?php echo  $r3['tenSp']; ?>
                            <img src="img/vn-50009109-0b441604783532e7168faa6d0939efe3.png" alt="">
                        </span>
                    </a>
                    <div class="cart_dg"><?php echo   number_format($r3['donGia']); ?>vnđ</div>
                    <div class="cart_sl">
                    <?php echo  $r3['soluong']; ?>
                    </div>
                    <div class="cart_sumMonney cart_st"><?php echo   number_format($r3['tongTien']); ?>vnđ</div>
                    <div class="cart_tt1" id="trangthai" style="color:chocolate"><?php echo  $r3['trangthai']; ?></div>
                    <a  class="cart_tt " id="btn_nhanhang" data-ma = '<?php echo  $r3['maMuahang']; ?>' style="text-decoration: none;" >Đã Nhận Hàng</a>                 
                </div>
                <?php } ?>

    </div>
    <?php
        $lichsu = "SELECT * FROM lichsudonhang inner join sanpham on lichsudonhang.maSp = sanpham.maSp and lichsudonhang.taiKhoanKh = '$ma' ";
        $rs_lichsu = $db->thucthi($lichsu);
    ?>
    <div class="grid_userRight" id="box_info" style="flex-direction: column; padding:10px ">
            <!-- <div class="cart_check">
                <input type="checkbox">
            </div> -->
            <div class="cart_product">
                    
                    <div class="cart_sp">Sản Phẩm</div>
                    <div class="cart_dg">Đơn Giá</div>
                    <div class="cart_sl">Số Lượng</div>
                    <div class="cart_st">Số Tiền</div>
                    <div class="cart_tt1">Thời Gian</div>
                   
                   
                </div>
                <?php while ( $r4 = mysqli_fetch_assoc($rs_lichsu)){ ?>
                <div class="cart_product">

                    <a href="" class="cart_sp">
                         <img src="img/<?php echo $r4['anh'] ?>" alt="">
                        <span><?php echo  $r4['tenSp']; ?>
                            <img src="img/vn-50009109-0b441604783532e7168faa6d0939efe3.png" alt="">
                        </span>
                    </a>
                    <div class="cart_dg"><?php echo   number_format($r4['donGia']); ?>vnđ</div>
                    <div class="cart_sl">
                    <?php echo  $r4['soluong']; ?>
                    </div>
                    <div class="cart_sumMonney cart_st"><?php echo   number_format($r4['tongTien']); ?>vnđ</div>
                    <div class="cart_tt1"><?php echo  $r4['thoiGian']; ?></div>
                             
                </div>
                <?php } ?>

    </div>
</div>
    </div>
 </div>
 <script src="user.js"></script></script>
<?php
include "footer.php"
?>