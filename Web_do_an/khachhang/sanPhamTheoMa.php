<?php

include "headerProduct.php";
if(isset($_GET['maLoai'])){
    $tenLoai = $_GET['tenLoai'];
    $Loai = $_GET['maLoai'];
    // $sql = "SELECT * FROM `sanpham` WHERE maLoai = '$Loai'";
    // $result = $db->thucthi($sql);
    // $kq_result = mysqli_fetch_assoc($result);
  
}

?>

<div class="grid" id="home1" >
    <h1 class="grid_lable" >Đồng Hồ <?php echo $tenLoai; ?> </h1>
    <span class="span_phanloai">Chúng tôi cam kết mang lại những giá trị cao nhất, chế độ hậu mãi tốt nhất khi quý khách hàng tin dùng & mua sắm đồng hồ nam nữ chính hãng của thương hiệu SHOPDONGHO.com</span>
    <!-- <div action="" class="header_searchForm" style="margin:10px 0 20px" >
        <input type="text" id="search_inputPhanLoai" class="searchForm_input" placeholder="Nhập từ khóa tìm kiếm..." style="border:0.5px solid #f0d43a">
        <button class="header_btnSearch" type="submit" id="btn_search" data-maMuaHang = <?php echo $ma ?> style="border:0.5px solid #f0d43a">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div> -->
   
    <div class="grid_section">
        <div class="section_row">
            <div class="section_item">
                <a href="sanPhamTheoMa.php?maLoai=1&tenLoai=Movado">
                    <img src="img/wristwatch.png" alt="">
                    <span>Movado</span>
                </a>
                
            </div>
            <div class="section_item">
                <a href="sanPhamTheoMa.php?maLoai=7&tenLoai=Omega">
                    <img src="img/clock-1.png" alt="">
                    <span>Omega</span>
                </a>
                
            </div> 
            <div class="section_item">
                <a href="sanPhamTheoMa.php?maLoai=3&tenLoai=Chronograph">
                    <img src="img/belt.png" alt="">
                    <span>Chronograph</span>
                </a>
                
            </div>
            <div class="section_item">
                <a href="sanPhamTheoMa.php?maLoai=2&tenLoai=Casio">
                    <img src="img/hot-sale.png" alt="">
                    <span>Casio</span>
                </a>
                    
            </div>
        </div>
    </div>
    <?php
    $sql = "SELECT * FROM sanpham  WHERE maLoai = '$Loai' LIMIT 8  ";
    $kq = $db->thucthi($sql);

    $sql1 = "SELECT * FROM sanpham  WHERE maLoai = '$Loai' LIMIT 8 OFFSET 8 ";
    $kq1 = $db->thucthi($sql1);
    ?>
    <div class="grid_row" id="grid_row" style=" background-color: #ff8d8d;   padding: 100px 10px 80px 35px; border-radius:10px;">
    <h2 class="grid_row--lable ">ĐỒNG HỒ <span>BÁN CHẠY NHẤT</span>  </h2>
    <?php while ($rows = mysqli_fetch_assoc($kq)){ ?>	
        <div class="grid_news grid_column-2-4 grid_hover ">
            <img src="img/<?php  echo $rows['anh']; ?>">
            <a href="product.php?maLoai=<?php  echo $rows['maSp']; ?>&loai=<?php  echo $rows['maLoai']; ?>&maMuahang=<?php echo $ma ?>" class="btn show_product">Đặt hàng</a>
            <div class="product_introduce">
                <h3 class="grid_product-lable">
                <?php  echo $rows['tenSp']; ?>
                </h3>
                <div class="product_price">
                    <p>
                        Price:
                    </p>
                    <span>  <?php  echo number_format($rows['donGia']); ?>VNĐ</span>
                    
                </div>
               
            </div>
        </div>
        <?php } ?>
        

    </div>
    <div class="grid_row" id="grid_row" style=" background-color: #e4f4ff; margin-top: 30px;   padding: 100px 10px 80px 35px; border-radius:10px;">
    <h2 class="grid_row--lable ">ĐỒNG HỒ MỚI NHẤT</h2>
    <?php while ($rows1 = mysqli_fetch_assoc($kq1)){ ?>	
        <div class="grid_news grid_column-2-4 grid_hover ">
            <img src="img/<?php  echo $rows1['anh']; ?>">
            <a href="product.php?maLoai=<?php  echo $rows1['maSp']; ?>&loai=<?php  echo $rows1['maLoai']; ?>&maMuahang=<?php echo $ma ?>" class="btn show_product">Đặt hàng</a>
            <div class="product_introduce">
                <h3 class="grid_product-lable">
                <?php  echo $rows1['tenSp']; ?>
                </h3>
                <div class="product_price">
                    <p>
                        Price:
                    </p>
                    <span>  <?php  echo number_format($rows1['donGia']); ?>VNĐ</span>
                    
                </div>
               
            </div>
        </div>
        <?php } ?>
        

    </div>
    
</div>
<?php
include "footer.php"
?>
