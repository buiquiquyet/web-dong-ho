<?php
include "headerProduct.php";
$id = $_GET['maSp'];

$sql = "SELECT * FROM `sanpham` WHERE maSp = '$id'";
$result = $db->thucthi($sql);
$row = mysqli_fetch_array($result);

$xuat = "select  * from thongtin1 where taiKhoanKh='$ma' ";
$xuat1= $db->thucthi($xuat);
$xuat2 = mysqli_fetch_assoc($xuat1);
?>
    </div>
    <div class="grid_buy">
        <div class="grid_cartProduct">
            <div class="cart_buyOther">
                <a href=""><i class="fa-solid fa-chevron-left"></i>Mua thêm sản phẩm khác</a>
                <span>Giỏ hàng</span>
            </div>
            <form class="cart_content" name="" action="" method="">
                <div class="cart_contentProduct">

                    <a href="" class="cart_image">
                        <img src="img/1137667559_dong-ho-thuy-sy-phien-ban-gioi-han3.jpg" alt="">
                    </a>
                    <div class="cart_info">
                    <input type="hidden" name ="maSp" class="textbox" value ="<?php  echo $row['maSp']; ?>" readonly >
                        <p><?php echo $row['tenSp'] ?></p>
                        <input type="hidden" id="soluong_old" value="<?php echo ($row['soLuong']) ?>"  >
                        <input type="number" name="soluong" id="soluong" min="1" max="<?php echo ($row['soLuong']) ?>" value="1">
                        <input type="submit" id="btn_capNhat" value="Cập nhật" data-buy-dg = <?php echo ($row['donGia']) ?> class="cart_info--btn">

                    </div>
                    <span ><?php echo number_format($row['donGia']) ?>đ</span>
                </div>
                <div class="cart_sale">
                    <p>Điều kiện giảm giá:</p>
                    <a href="">Mua kèm bút ký</a>
                </div>
                <div class="cart_sale">
                    <p>Tổng giá trị đơn hàng</p>
                    <span id="sum_tong"><?php echo number_format($row['donGia']) ?>đ</span>
                </div>
                <div class="cart_form">
                    <h1>THÔNG TIN KHÁCH HÀNG</h1>
                    <p>Lưu ý: Các ô có dấu <span>(*)</span> cần điền đầy đủ thông tin</p>
                    <div class="cart_inputInfo">

                        <label for="">Họ và tên <span>(*)</span></label>
                        <input type="text" id="ten" name="ten" value="<?php echo isset($xuat2) ?  $xuat2['ten'] : '';?>" placeholder="Nhập họ tên">
                    </div>
                    <div class="cart_inputInfo">

                        <label for="">Điện thoại <span>(*)</span></label>
                        <input type="text" id="sdt" name ="sdt" value="<?php echo isset($xuat2) ?  $xuat2['sdt'] : '';?>" placeholder="Nhập điện thoại">
                    </div>
                    <div class="cart_inputInfo">

                        <label for="">Địa chỉ <span>(*)</span></label>
                        <input type="text" id="diaChi" value="<?php echo isset($xuat2) ?  $xuat2['diaChi'] : '';?>"  name ="diaChi" placeholder="Nhập địa chỉ">
                    </div>
                    <div class="cart_inputInfo">

                        <label for="">Email <span>(*)</span></label>
                        <input id="email" name ="email"value="<?php echo isset($xuat2) ?  $xuat2['email'] : '';?>" placeholder="Nhập email"></input>
                    </div>



                </div>
                <div class="cart_radio">
                    <div class="radio">
                        <input type="text" placeholder="Mã giảm giá"   id="magiamgia">
                        <input type="button" id="btn_giamgia" name=""   value="Áp dụng" class="btn_sale">
                    </div>

                </div>
                <div class="cart_payTotal">
                    <span>Tổng tiền thanh toán</span>
                    <span class="cart_payTotal--number" id="sum_lastTong"><?php echo number_format($row['donGia']) ?>đ</span>
                </div>
                <div class="cart_btn">
                    <button class="btn_buy" data-id = <?php echo $id ?> name="" type="button" >
                        <p>ĐẶT HÀNG</p>
                        <span>(Trả tiền khi nhận hàng tại nhà)</span>
                    </button>
                    <!-- <button class="btn_payOnline" name="" type="submit">
                        <p>THANH TOÁN ONLINE</p>
                        <span>(Bằng thẻ VISA ,ATM, MASTER)</span>
                    </button> -->
                </div>
                <div class="cart_buyOther">
                    <a href=""><i class="fa-solid fa-chevron-left"></i>Mua thêm sản phẩm khác</a>

                </div>
            </form>

        </div>
    </div>
<?php include "footer.php" ?>
<script src="buy_inputGiamGia.js"></script>
