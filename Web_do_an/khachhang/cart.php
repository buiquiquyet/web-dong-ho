<?php
include "headerProduct.php";
$lietke_sql1 = "SELECT * FROM sanpham inner join giohang on giohang.maSp = sanpham.maSp and taiKhoankh = '$ma'";		
$results1 = $db->thucthi($lietke_sql1);
?>
    <div class="grid" style="background-color:#f5f5f5;margin:0">
        <div class="grid_row">
            <div class="grid_cart">
                <div class="cart_top">

                    <div class="cart_search--lable">Giỏ Hàng</div>
                    <!-- <form action="" class="cart_search">
                        <input type="text" placeholder="Tìm kiếm">
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form> -->
                </div>
                <div class="cart_product">
                    <div class="cart_check">
                        <!-- <input type="text"> -->
                    </div>
                    <div class="cart_sp">Sản Phẩm</div>
                    <div class="cart_dg">Đơn Giá</div>
                    <!-- <div class="cart_dg">Số Lượng</div> -->
                    <div class="cart_dg">Số Tiền</div>
                    <div class="cart_dg">Thao Tác</div>
                </div>
                <?php while ( $r1 = mysqli_fetch_assoc($results1)){
					?>
                <div class="cart_product">
                    <div class="cart_check">
                        <input type="checkbox" value="<?php echo  ($r1['maSp']); ?>" data-price = "<?php echo  ($r1['donGia']); ?>"  >
                    </div>
                    <a href="product.php?maLoai=<?php  echo $r1['maSp']; ?>&loai=<?php  echo $r1['maLoai']; ?>&maMuahang=<?php echo $ma ?>" class="cart_sp">
                        <img src="img/<?php echo $r1['anh'] ?>" alt="">
                        <span><?php echo  $r1['tenSp']; ?>
                            <img src="img/vn-50009109-0b441604783532e7168faa6d0939efe3.png" alt="">
                        </span>
                    </a>
                    <div class="cart_dg"><?php echo  number_format($r1['donGia']); ?>vnđ</div>
                    
                        
                    
                    <div class="cart_sumMonney cart_dg"><?php echo  number_format($r1['donGia']); ?>vnđ
                    <!-- <input type="text" min="1" id="maSp" value="<?php echo  ($r1['maGio']); ?>" style="width:40px;height:20px"> -->
                </div>
                    <a id="btn_cart_del" class="cart_tt cart_dg " data-maGio = "<?php echo  ($r1['maGio']); ?>" style="text-decoration: none;">Xóa</a>
                </div>
                <?php } ?>

                <div class="cart_product cart_thanhtoan" style="justify-content: end;">
                    <div class="cart_numberProduct">
                        <div class="cart_sumBig" >Tổng thanh toán (<span id="cart_soluong">0</span> Sản phẩm):</div>
                        <span id="cart_sumBig">0vnđ</span>
                    </div>
                    <button class="cart_btnBuy" onclick="getSelectedValues(event)">Mua Hàng</button>
                </div>
            </div>
        </div>
    </div>
    <script src="cart_to_buy.js"></script>
    <?php
    include "footer.php"
    ?>