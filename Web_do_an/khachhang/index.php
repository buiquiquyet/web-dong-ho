<?php

include "header.php";
$db = new database();
$sql = "SELECT * FROM sanpham LIMIT 8 ";
$kq = $db->thucthi($sql);


$sql1 = "SELECT * FROM sanpham LIMIT 8 OFFSET 8";
$kq1 = $db->thucthi($sql1);

$sql2 = "SELECT * FROM sanpham LIMIT 8 OFFSET 17";
$kq2 = $db->thucthi($sql2);

$sql3 = "SELECT * FROM sanpham LIMIT 8 OFFSET 33";
$kq3 = $db->thucthi($sql3);

$sql4 = "SELECT * FROM sanpham LIMIT 8 OFFSET 58";
$kq4 = $db->thucthi($sql4);

$sql5 = "SELECT * FROM sanpham LIMIT 8 OFFSET 49";
$kq5 = $db->thucthi($sql5);


?>
<style>
    .slide_section {
    position: relative;
    height: 600px;
    overflow: hidden;
    max-height: 100%;
}

.slide_col {
    position: absolute;
    top: -40px;
    left: 0;
    opacity: 0;
    height: 100%;
    padding:  40px;
    transform: translateX(100%);
  transition: transform 1.2s ease-in-out;
  
}

.slide_col.active {
    opacity: 1;
    transform: translateX(0%);
}
</style>
<div class="slide_section">
    <div class="slide_col active">
        <div class="slide_col-left">
            <h1 class="col_left-detail">
                Smart Watches
            </h1>
            <p>Địa điểm đâu có ánh sáng – ở đó có năng lượng. Những cỗ máy nhai nuốt ánh sáng của nhãn hiệu người dân với nhiều ưu thế vượt trội đã gây thương nhớ cho bao nam giới.</p>
            <!-- <button class="btn col_left-contact">Contact Us</button> -->
        </div>
        <div class="slide_col-right">
            <img src="img/slider-img.png" alt="">
        </div>
    </div>
    <div class="slide_col active">
        <div class="slide_col-left">
            <h1 class="col_left-detail">
                Smart Watches
            </h1>
            <p>CASIO nổi lên như một thương hiệu kích thích khách hàng bằng cách luôn khám phá những điều mới hơn và tốt hơn.</p>
        </div>
        <div class="slide_col-right">
            <img src="img/slider-img.png" alt="">
        </div>
    </div>
</div>
</div>
<div class="grid" id="home1" >
    <h1 class="grid_lable">ĐỒNG HỒ CHÍNH HÃNG</h1>
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

    <div class="grid_row" style="background-color:#ff8d8d;    padding: 80px 10px 80px 35px; border-radius:10px;">
    <h2 class="grid_row--lable">ĐỒNG HỒ <span>BÁN CHẠY & ĐẸP</span> </h2>
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
                        Giá:
                    </p>
                    <span>  <?php  echo number_format($rows['donGia']); ?>VNĐ</span>
                    
                </div>
               
            </div>
        </div>
        <?php } ?>
        

    </div>
    <div class="grid_row" style="background-color:#e3f3ff; margin-top:30px; padding: 80px 10px 80px 35px; border-radius:10px;">
    <h2 class="grid_row--lable">ĐỒNG HỒ MOVADO  </h2>
    <?php while ($rows1 = mysqli_fetch_array($kq1)){ ?>	
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
    <div class="grid_row" style="background-color:#fff3e4; margin-top:30px; padding: 80px 10px 80px 35px; border-radius:10px;">
    <h2 class="grid_row--lable">ĐỒNG HỒ CASIO NAM </h2>
    <?php while ($rows2 = mysqli_fetch_array($kq2)){ ?>	
        <div class="grid_news grid_column-2-4 grid_hover ">
            <img src="img/<?php  echo $rows2['anh']; ?>">
            <a href="product.php?maLoai=<?php  echo $rows2['maSp']; ?>&loai=<?php  echo $rows2['maLoai']; ?>&maMuahang=<?php echo $ma ?>" class="btn show_product">Đặt hàng</a>
            <div class="product_introduce">
                <h3 class="grid_product-lable">
                <?php  echo $rows2['tenSp']; ?>
                </h3>
                <div class="product_price">
                    <p>
                        Price:
                    </p>
                    <span>  <?php  echo number_format($rows2['donGia']); ?>VNĐ</span>
                    
                </div>
               
            </div>
        </div>
        <?php } ?>
        

    </div>
    <div class="grid_row" style="background-color:#e3f3ff; margin-top:30px; padding: 80px 10px 80px 35px; border-radius:10px;">
    <h2 class="grid_row--lable">ĐỒNG HỒ CHRONOGRAPH </h2>
    <?php while ($rows3 = mysqli_fetch_array($kq3)){ ?>	
        <div class="grid_news grid_column-2-4 grid_hover ">
            <img src="img/<?php  echo $rows3['anh']; ?>">
            <a href="product.php?maLoai=<?php  echo $rows3['maSp']; ?>&loai=<?php  echo $rows3['maLoai']; ?>&maMuahang=<?php echo $ma ?>" class="btn show_product">Đặt hàng</a>
            <div class="product_introduce">
                <h3 class="grid_product-lable">
                <?php  echo $rows3['tenSp']; ?>
                </h3>
                <div class="product_price">
                    <p>
                        Price:
                    </p>
                    <span>  <?php  echo number_format($rows3['donGia']); ?>VNĐ</span>
                    
                </div>
               
            </div>
        </div>
        <?php } ?>
        

    </div>
    <div class="grid_row" style="background-color:#fff3e4; margin-top:30px; padding: 80px 10px 80px 35px; border-radius:10px;">
    <h2 class="grid_row--lable">ĐỒNG HỒ Patek Philippe </h2>
    <?php while ($rows4 = mysqli_fetch_array($kq4)){ ?>	
        <div class="grid_news grid_column-2-4 grid_hover ">
            <img src="img/<?php  echo $rows4['anh']; ?>">
            <a href="product.php?maLoai=<?php  echo $rows4['maSp']; ?>&loai=<?php  echo $rows4['maLoai']; ?>&maMuahang=<?php echo $ma ?>" class="btn show_product">Đặt hàng</a>
            <div class="product_introduce">
                <h3 class="grid_product-lable">
                <?php  echo $rows4['tenSp']; ?>
                </h3>
                <div class="product_price">
                    <p>
                        Price:
                    </p>
                    <span>  <?php  echo number_format($rows4['donGia']); ?>VNĐ</span>
                    
                </div>
               
            </div>
        </div>
        <?php } ?>
        

    </div>
    <div class="grid_row" style="background-color:#ff8d8d; margin-top:30px; padding: 80px 10px 80px 35px; border-radius:10px;">
    <h2 class="grid_row--lable">ĐỒNG HỒ SOLAR </h2>
    <?php while ($rows5 = mysqli_fetch_array($kq5)){ ?>	
        <div class="grid_news grid_column-2-4 grid_hover ">
            <img src="img/<?php  echo $rows5['anh']; ?>">
            <a href="product.php?maLoai=<?php  echo $rows5['maSp']; ?>&loai=<?php  echo $rows5['maLoai']; ?>&maMuahang=<?php echo $ma ?>" class="btn show_product">Đặt hàng</a>
            <div class="product_introduce">
                <h3 class="grid_product-lable">
                <?php  echo $rows5['tenSp']; ?>
                </h3>
                <div class="product_price">
                    <p>
                        Price:
                    </p>
                    <span>  <?php  echo number_format($rows5['donGia']); ?>VNĐ</span>
                    
                </div>
               
            </div>
        </div>
        <?php } ?>
        

    </div>
</div>
<div class="product_viewAll">
    <!-- <button class="btn col_left-contact"> View All</button> -->
</div>
<div class="about_section" id="about1">
    <div class="contain">
        <div class="about_col-3">
            <img src="img/about-img.png" alt="">
        </div>
        <div class="about_col-4">
            <h1 class="about_lable">Smart Watch</h1>
            <p>Thời gian tự nhiên thì vô hạn nhưng mỗi người lại chỉ có một số năm hữu hạn để sống. Thậm chí, chẳng ai biết được liệu ngày mai mình có còn hiện diện trên cuộc đời này. Vì vậy, hãy sống theo cách bạn muốn, chọn những thứ bạn cảm thấy phù hợp và theo đuổi những điều bạn thực sự yêu thích. Đừng sống theo định hướng, mong muốn của người khác bởi họ không thể vẽ đường mãi cho bạn được.</p>
            <!-- <button class="btn col_left-contact"> Read More</button> -->
        </div>
    </div>
</div>
<div class="grid" id="watch1">
    <h1 class="feature_lable">Tương lai của đồng hồ thông minh</h1>
    <p class="feature_watch">Những chiếc kim của đồng hồ truyền thống như có một ma lực nào đó không thể cưỡng lại được.</p>
    <div class="grid_row">
        <div class="grid_column-2-4 feature_hover" style="padding-top:30px;box-shadow: 5px 5px 5px 0 rgb(0 0 0 / 25%), -2px -2px 3px 0 rgb(0 0 0 / 5%);">
            <img src="img/f1.png" style="width:75px" alt="">
            <h1 class="feature_box-text">Smart Watch</h1>
            <p class="feature_box-p">Thời gian của bạn là hữu hạn, vì thế đừng lãng phí nó để sống cuộc đời của người khác.</p>
            <a href="" class="feature_more">Read More <i class="fa-solid fa-arrow-right"></i></a>

        </div>
        <div class="grid_column-2-4 feature_hover " style="padding-top:30px;box-shadow: 5px 5px 5px 0 rgb(0 0 0 / 25%), -2px -2px 3px 0 rgb(0 0 0 / 5%);">

            <img src="img/f2.png" style="width:75px" alt="">
            <h1 class="feature_box-text">Smart Watch</h1>
            <p class="feature_box-p">Cuộc đời là của mình, hãy dùng thời gian mình có để thực hiện những hoài bão, đam mê nhé!</p>
            <a href="" class="feature_more">Read More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="grid_column-2-4 feature_hover " style="padding-top:30px;box-shadow: 5px 5px 5px 0 rgb(0 0 0 / 25%), -2px -2px 3px 0 rgb(0 0 0 / 5%);">
            <img src="img/f3.png" style="width:75px" alt="">
            <h1 class="feature_box-text">Smart Watch</h1>
            <p class="feature_box-p">Tờ lịch hôm qua không thể sử dụng trong ngày hôm nay. Tờ lịch ngày hôm nay cũng không thể sử dụng cho ngày mai.</p>
            <a href="" class="feature_more">Read More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="grid_column-2-4 feature_hover " style="padding-top:30px;box-shadow: 5px 5px 5px 0 rgb(0 0 0 / 25%), -2px -2px 3px 0 rgb(0 0 0 / 5%);">
            <img src="img/f4.png" style="width:75px" alt="">
            <h1 class="feature_box-text">Smart Watch</h1>
            <p class="feature_box-p">Phần lớn mọi người dùng điện thoại để xem giờ, nhưng đồng hồ vẫn luôn mang vẻ đẹp và sức hấp dẫn riêng của nó.</p>
            <a href="" class="feature_more">Read More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <!-- <div class="feature_btn">
            <button class="btn col_left-contact"> View More</button>
        </div> -->

    </div>
    <div class="grid" id="contact1" style="margin-top:80px">
        <div class="grid_row">
            <div class="slide_col-left" style="margin: 50px 0 40px 0;">
                <h1 class="contact_text">Liên lạc với chúng tôi</h1>
                <form action="" class="contact_form">
                    <div>
                        <input type="text" id="hoTen" placeholder="Họ Tên">
                    </div>
                    <div>
                        <input type="text" id="email" placeholder="Email">
                    </div>
                    <div>
                        <input type="text" id="sdt" placeholder="Số Điện Thoại">
                    </div>
                    <div>
                        <input type="text" id="tinNhan" class="form_input-message" placeholder="Lời Nhắn">
                    </div>
                    <div class="contact_btn">
                        <button class="btn btn_formContact" id="btn_send"> SEND</button>
                    </div>
                </form>
            </div>
            <div class="slide_col-right contact_col-right">
                <img src="img/contact-img.jpg" class="contact_img" alt="">
            </div>
        </div>
    </div>
    <div class="grid">
        <div class="grid_row">
            <div class="testimonial">

                <h1 class="testimonial_text">Lời chứng thực</h1>
                <div class="testimonial_box">

                    <div class="grid_row-2">
                        <div class="testimonial_img">
                            <img src="img/c2.jpg" alt="">
                        </div>
                        <div class="testimonial_introduce">
                            <h1 class="testimonial_introduce-text">
                                ALINA HANS
                            </h1>
                            <span>CUSTOMER</span>
                            <i class="fa fa-quote-left"></i>
                            <p class="testimonial_introduce-p">Không giống như phụ nữ có hàng tá nữ trang trên người, với đàn ông, đồng hồ là thứ trang sức duy nhất của họ. Đồng hồ có sức hấp dẫn lớn với đàn ông, khiến những món đồ xa xỉ khác trở nên lu mờ trước vẻ đẹp của nó.</p>
                        </div>
                    </div>
                    <div class="grid_row-2">
                        <div class="testimonial_img">
                            <img src="img/c1.jpg" alt="">
                        </div>
                        <div class="testimonial_introduce">
                            <h1 class="testimonial_introduce-text">
                                MARKS THOMAS
                            </h1>
                            <span>CUSTOMER</span>
                            <i class="fa fa-quote-left"></i>
                            <p class="testimonial_introduce-p">Quản lý thời gian là một bài toán hóc búa. Khi thời gian vượt tầm kiểm soát, mặc cho chúng ta giải quyết thế nào, đồng hồ vẫn cứ đều đặn chạy. Thay vào đó hãy quản lý mọi việc theo thứ tự ưu tiên. Đó là cách tối đa hóa thời gian mà ta có.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button_next">
            <!-- <button><</button>
            <button>></button> -->
        </div>
    </div>
    <div class="grid">
        <div class="grid_row">
            <h1 class="grid_row--lable lable_phanloai">
                Tin Tức Đồng Hồ
            </h1>
            <div class="news">

                <a href="tintuc.php" class="news_left">
                    <div class="left_img">

                        <img src="img/news.jpg" class="img_news" alt="">
                    </div>
                    <div class="left_text">

                        <p>Tại sao đồng hồ Sunrise nam lại được yêu thích đến vậy?</p>
                        <span>Đồng hồ Sunrise nam là một thương hiệu đồng hồ nổi tiếng không chỉ ở [...]</span>
                    </div>
                </a>
                <div  class="news_right">
                    <a href="tintuc.php" class="news_right--item">
                        <div class="right_img">

                            <img src="img/news1.jpg" class="img_news" alt="">
                        </div>   
                        <div class="news_right--text">

                            <p>Khám phá thương hiệu đồng hồ điện tử nam danh tiếng </p>
                            <span>Trải qua rất nhiều năm,  đồng hồ điện tử nam ngày càng [...]</span>
                        </div>

                    </a>
                    <a href="tintuc.php" class="news_right--item">
                        <div class="right_img">

                            <img src="img/news2.jpg" class="img_news" alt="">
                        </div>   
                        <div class="news_right--text">

                            <p>Chọn đồng hồ treo tường phong thủy chuẩn theo mệnh ngũ hành</p>
                            <span>✨✨ Màu sắc,  chất liệu là những yếu tố cần lưu ý khi [...]</span>
                        </div>
                    </a>
                    <a href="tintuc.php" class="news_right--item">
                        <div class="right_img">

                            <img src="img/news3.jpg" class="img_news" alt="">
                        </div>   
                        <div class="news_right--text">

                            <p>Lựa chọn đồng hồ treo tường chuẩn phong thủy cho 12 con giáp</p>
                            <span>Khi chọn đồng hồ treo tường, có một số yếu tố cần cân nhắc để [...]</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
   
<?php 
include "footer.php";
?>
<script src="index.js"></script>