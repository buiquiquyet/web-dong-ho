<?php
include "headerPhanLoaiProduct.php";
?>
<div class="grid" id="home1" >
    <h1 class="grid_lable" >Tìm Kiếm Đồng Hồ Chính Hãng</h1>
    <span class="span_phanloai">Nếu bạn đang tìm kiếm đồng hồ đeo tay chính hãng, chúng tôi đảm bảo sẽ mang đến cho bạn những sản phẩm chất lượng và đáng tin cậy nhất.</span>
    <div action="" class="header_searchForm" style="margin:10px 0 20px" >
        <input type="text" id="search_inputPhanLoai" class="searchForm_input" placeholder="Nhập từ khóa tìm kiếm..." style="border:0.5px solid #f0d43a">
        <button class="header_btnSearch" type="submit" id="btn_search" data-maMuaHang = <?php echo $ma ?> style="border:0.5px solid #f0d43a">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>
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
    $sql = "SELECT * FROM sanpham  ";
    $kq = $db->thucthi($sql);
    ?>
    <div class="grid_row" id="grid_row" style="   padding: 100px 10px 80px 35px; border-radius:10px;">
    <h2 class="grid_row--lable lable_phanloai">ĐỒNG HỒ BÁN CHẠY NHẤT </h2>
    <?php while ($rows = mysqli_fetch_assoc($kq)){ ?>	
        <div class="grid_news grid_column-2-4 grid_hover ">
            <img src="img/<?php echo $rows['anh'] ?>" alt="">
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
    
</div>
<script src="timkiemPhanLoai.js"></script>
<?php
include "footer.php"
?>

