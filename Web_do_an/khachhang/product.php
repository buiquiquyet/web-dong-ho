<?php
include "headerProduct.php";
$id = $_GET['maLoai'];
$loai = $_GET['loai'];

if(isset($_SESSION["user1"]) ){					
$ma1 =$_SESSION['user1'];  }

$sql = "SELECT * FROM sanpham WHERE maSp = '$id'";
$results = $db->thucthi($sql);
$row = mysqli_fetch_array($results);

$loai_sp = "SELECT * FROM sanpham where maLoai ='$loai' LIMIT 5 ";
$loai1 =  $db->thucthi( $loai_sp);
$loai_sp1 = "SELECT * FROM sanpham where maLoai ='$loai' LIMIT 5 OFFSET 5 ";
$loai11 =  $db->thucthi( $loai_sp1);

$danhgia = "SELECT * FROM nhanxet where maLoai = '$id'  ORDER BY id DESC LIMIT 4 ";
$kq_danhgia = $db->thucthi($danhgia);

$dg_count = "SELECT COUNT(ten) FROM nhanxet where maLoai = '$id'";
$kq_dgCount = $db->thucthi($dg_count);
$dgCount = mysqli_fetch_array($kq_dgCount);

?>
    </div>
    <div class="grid_product">
        <div class="product">

            <div class="product_subname">Atlantic Swiss AT-52851.44.25 - Đồng hồ Nam - Size mặt 42 mm - Sapphire - Automatic (Cơ tự động) - Chịu nước 5 ATM</div>

            <div class="product_detail">
                <a href="">Trang chủ</a><span>/</span>
                <a href="">Đồng hồ nam</a><span>/</span>
                <a href="">Atlantic Swiss</a><span>/</span>
            </div>
            <div class="detail_top">
                <div class="detail_left">
                    <div class="detail_left-img">
                        <img src="img/<?php  echo $row['anh']; ?>">

                        <div class="owl_prev"><i class="fa-solid fa-chevron-left"></i></div>
                        <div class="owl_next"><i class="fa-solid fa-chevron-right"></i></div>

                    </div>
                    <!-- <div class="detail_left-box">
                        <div class="box_img">
                            <img src="img/<?php  echo $row['anh']; ?>">
                        </div>
                        <div class="box_img">
                            <img src="img/<?php  echo $row['anh1']; ?>">
                        </div>
                        <div class="box_img">
                            <img src="img/<?php  echo $row['anh2']; ?>">
                        </div>
                        <div class="box_img">
                            <img src="img/<?php  echo $row['anh1']; ?>">
                        </div>
                    </div> -->
                </div>
                <div class="detail_mid">
                    <h1 class="detail_nameProduct"><?php  echo $row['tenSp']; ?></h1>
                    
                    <div class="detail_price">

                        <h3><?php  echo number_format($row['donGia']); ?>đ</h3>
                        <span>Trả góp 0%</span>
                    </div>
                    <p style="color:black;margin: 5px 0 20px;font-size: 1.8rem;">Còn <b style="font-size:20px; color:red"> <?php  echo $row['soLuong']; ?></b> sản phẩm trong cửa hàng  </p>
                    <div class="detail_info">Đường kính mặt mặt: 42 mm</div>
                    <div class="detail_info">Chống nước: 5 ATM</div>
                    <div class="detail_info">Chất liệu mặt kính: Sapphire</div>
                    <div class="detail_info">Bộ máy: Automatic (Cơ tự động)</div>
                    <div class="detail_call">
                        <span>Gọi đặt mua:
                        </span>
                        <a href="">0379952714</a>
                        <span>(8:00 - 21:00)</span>
                    </div>
                    <div class="detail_button">
                        <a href="checksoluongMua.php?maSp=<?php echo $row['maSp']; ?>&soLuong= <?php  echo $row['soLuong']; ?>&maMuahang=<?php echo $ma ?>&admin=<?php echo $ma1 ?>&loai=<?php echo $loai ?>" type="button" id="button_buyCart" class="button_buynow">
                            <span>Mua ngay</span>
                            <span style="margin-top:3px;font-size: 1.5rem; font-weight:100">Miễn phí vận chuyển - Thanh toán tại nhà</span>
                        </a>
                        <div class="button_cartGroup">
                            <a href="#" class="button_tragop">
                                <span>MUA TRẢ GÓP 0%</span>
                                <span>Qua thẻ Visa, Master, JCB</span>
                            </a>
                            <button id="button_cart" type="button" data-product-maSp="<?php echo $row['maSp']; ?>"
                                                    data-product-soLuong= "<?php  echo $row['soLuong']; ?>"
                                                    data-product-maMuahang="<?php echo $ma ?>"
                                                    data-product-admin="<?php echo $ma1 ?>"
                                                    data-product-loai="<?php echo $loai ?>"
                                                      class="button_cart">
                                <span>GIỎ HÀNG</span>
                                <span>Thêm vào giỏ hàng</span>
                            </button>
                        </div>
                        <div class="detail_promotion">
                            <div class="detail_promotion--head">Ưu đãi dự kiến áp dụng</div>
                            <div class="detail_promotion--info" style="color:red"><span>Giảm ngay <b>10%</b> chỉ áp dụng mua hàng Online </span></div>
                            <div class="detail_promotion--info"><span>Giảm ngay <b>5%</b> chỉ áp dụng với VIP </span></div>
                            <div class="detail_promotion--info"><span>Giảm ngay <b>15%</b> chỉ áp dụng mua hàng toàn quốc </span></div>

                        </div>
                        <div class="detail_connect">
                            <a href=""><img src="img/zalo.jpg" class="detail_connect--img" alt=""><span>Nhắn tin Zalo: 03799.52.714</span> </a>
                        </div>
                    </div>
                </div>
                <div class="detail_right">
                    <div class="detail_right-text">Tìm cửa hàng</div>
                    <form action="" class="search_province">
                        <select name="" id="">
                            <option value="">Hà Nội</option>
                            <option value="">Hải Phòng</option>
                            <option value="">Gia Lộc</option>
                            <option value="">Hải Dương</option>
                        </select>
                    </form>
                    <div class="detail_right-group">
                        <div class="group_info">

                            <div class="group_info-call">
                                <a href=""><i class="fa fa-phone"></i> <span>0379952714</span></a>

                            </div>
                            <div class="group_info-icon"><i class="fa-solid fa-location-dot"></i>
                                <p>Bán hàng online với ưu đãi riêng cực lớn</p>
                            </div>
                        </div>
                        <div class="group_info">

                            <div class="group_info-call">
                                <a href=""><i class="fa fa-phone"></i> <span>0379952714</span></a>

                            </div>
                            <div class="group_info-icon"><i class="fa-solid fa-location-dot"></i>
                                <p>Bán hàng online với ưu đãi riêng cực lớn</p>
                            </div>
                        </div>
                        <div class="group_info">

                            <div class="group_info-call">
                                <a href=""><i class="fa fa-phone"></i> <span>0379952714</span></a>

                            </div>
                            <div class="group_info-icon"><i class="fa-solid fa-location-dot"></i>
                                <p>Bán hàng online với ưu đãi riêng cực lớn</p>
                            </div>
                        </div>
                        <div class="group_info">

                            <div class="group_info-call">
                                <a href=""><i class="fa fa-phone"></i> <span>0379952714</span></a>

                            </div>
                            <div class="group_info-icon"><i class="fa-solid fa-location-dot"></i>
                                <p>Bán hàng online với ưu đãi riêng cực lớn</p>
                            </div>
                        </div>
                        <div class="group_info">

                            <div class="group_info-call">
                                <a href=""><i class="fa fa-phone"></i> <span>0379952714</span></a>

                            </div>
                            <div class="group_info-icon"><i class="fa-solid fa-location-dot"></i>
                                <p>Bán hàng online với ưu đãi riêng cực lớn</p>
                            </div>
                        </div>

                    </div>
                    <div class="detail_promotion">
                        <div class="detail_promotion--info promotion_baohanh"><i class="fa-solid fa-check"></i>
                            <p>Bảo hành chính hãng <span>02</span> năm tại <span>100</span> Showrooms toàn quốc.</p>
                        </div>
                        <div class="detail_promotion--info promotion_baohanh"><i class="fa-solid fa-check"></i>
                            <p>Sẩn phầm bao gồm: Hộp đựng, thẻ bảo hành quốc tế, thẻ khách hàng thân thiết, khăn lau (đối với kính mắt).</p>
                        </div>

                    </div>
                    <div class="support_online">
                        <a href=""><i class="fa fa-phone"></i><span>03799.52.7777</span></a>
                        <a href=""><i class="fa fa-phone"></i><span>03798.00.5555</span></a>

                    </div>
                </div>
            </div>
            <div class="detail_product_box">
                <div class="detail_product_left">
                    <h1 class="detail_product_text">Có thể bạn sẽ thích</h1>
                    
                    <div class="otherProduct">
                        <?php while( $cot = mysqli_fetch_array($loai1)){  ?>
                            <a href="product.php?maLoai=<?php  echo $cot['maSp']; ?>&loai=<?php  echo $cot['maLoai']; ?>&maMuahang=<?php echo $ma ?>" class="otherProduct_item">
                                <img src="img/<?php  echo $cot['anh']; ?>">
                                <span><?php  echo $cot['tenSp']; ?> </span>
                                <span class="freeShip">Free ship</span>
                                <p><?php  echo number_format($cot['donGia']) ?>đ</p>
                            </a>
                       <?php } ?>
                       
                    </div>
                    <div class="tab_detailProduct">
                        <span class="tab_header active">Thông tin sản phẩm</span>
                        <span class="tab_header">Chế độ bảo hành</span>
                    </div>
                    <div class="tabContent">
                        <span>Thương hiệu đồng hồ Atlantic Swiss được nhập khẩu nguyên chiếc từ Thụy Sỹ và phân phối độc quyền tại Đăng Quang Watch.

                        </span>
                        <img src="img/<?php  echo $row['anh2']; ?>">
                    </div>
                    <div class="tabContent">
                        <span>Thương hiệu đồng hồ Atlantic Swiss được nhập khẩu nguyên chiếc từ Thụy Sỹ và phân phối độc quyền tại Đăng Quang Watch.

                        </span>
                        <img src="img/<?php  echo $row['anh1']; ?>">
                    </div>
                    <div class="tabContent">
                        <span>Thương hiệu đồng hồ Atlantic Swiss được nhập khẩu nguyên chiếc từ Thụy Sỹ và phân phối độc quyền tại Đăng Quang Watch.

                        </span>
                        <img src="img/cau thu Bui Tien Dung deo dong ho ATLANTIC.jpg" alt="">
                    </div>
                </div>
                <div class="detail_product_right">
                    <h1 class="product_right_text">Thông số kỹ thuật của Đồng hồ <?php  echo $row['tenSp'];  ?></h1>
                    <ul class="product_right_nav">
                        <li class="product_right--item"><span class="product_right--itemInfo">Đường kính mặt</span> <span style="color: #288ad6;"> 42 mm</span></li>
                        <li class="product_right--item"><span class="product_right--itemInfo">Chống nước</span><span style="color: #288ad6;">5 ATM</span></li>
                        <li class="product_right--item"><span class="product_right--itemInfo">Chất liệu mặt</span><span>Sapphire</span></li>
                        <li class="product_right--item"><span class="product_right--itemInfo">Năng lượng sử dụng</span><span>Automatic(Cơ tự động)</span></li>
                        <li class="product_right--item"><span class="product_right--itemInfo">Size dây</span><span>21 mm</span></li>
                        <li class="product_right--item"><span class="product_right--itemInfo">Chất liệu dây</span><span>Dây da chính hãng</span></li>
                        <li class="product_right--item"><span class="product_right--itemInfo">Chất liệu vỏ</span><span>Thép không gỉ</span></li>
                        <li class="product_right--item"><span class="product_right--itemInfo">Kiểu dáng</span><span>Đồng hồ Nam</span></li>
                        <li class="product_right--item"><span class="product_right--itemInfo">Xuất xứ</span><span>Thụy Sỹ</span></li>
                        <li class="product_right--item"><span class="product_right--itemInfo">Chế độ bảo hành</span><span>Bảo hành quốc tế <p>02</p> năm</span></li>
                    </ul>
                </div>
            </div>
            <div class="modal" id="formstar">

                <form  class="input_formstar" name="fRatingComment" > 
                    
                            <input type="hidden" name="hdfStar" id="hdfStar" value="5"> 
                            <input type="hidden" name="hdfProductID" id="hdfProductID" value="13617"> 
                            <div class="ips ent-left"> 
                                <span>Viết đánh giá</span>
                                <div class="name_dg">Đánh giá sản phẩm <?php  echo ($row['tenSp']); ?>  </div>
                                <!-- <div class="dgcb_v">Đánh giá của bạn</div> -->
                                
                            </div> 
                            <div class="ipt" style="display: block;"> 
                                <div class="ct"> 
                                <input required="required" type="text" id="fRName" name="fRName" placeholder="Họ tên"> 
    
                                    <textarea required="required" id="fRContent" class="textarea" name="fRContent" placeholder="Nhập đánh giá về sản phẩm "></textarea>
                                   
                                    <!-- <div class="extCt "> 
                                        <span class="hcmtt">Hình chụp thực tế sản phẩm</span>
                                       
                                        <input type="file" id="imageInput">
                                    </div>  -->
                                </div>
                               <div class="button_danhgia">
    
                                   <div class="hdgia" id="huydanhgia">Hủy</div>
                                   <div class="hdgia" data-id = <?php echo  $id ?> id="guidanhgia" href="#">Gửi đánh giá</div>
                               </div>
                            </div> 
                        </form>
            </div>
            <div class="comment">
                
                <span class="lable">Đánh giá sản phẩm
                    <button id="vietdanhgia" class="comment_button">Viết đánh giá</button>
                </span>
                <span style="color:#219653"><i class="fa fa-check"></i> SHOPDONGHO.COM cam kết 100% đánh giá đều đến từ khách đã mua hàng</span>
                <span class="comment_sl"><?php echo $dgCount['COUNT(ten)'] ?> đánh giá</span>
                <?php while( $dg = mysqli_fetch_array($kq_danhgia)){  ?>
                <div class="comment_text">
                    <span class="lable_text">
                    <?php  echo $dg['ten']; ?>

                    </span>
                    <span class="comment_cusomer">
                    <?php  echo $dg['nhanxet']; ?>
                    </span>
                    
                </div>
                <?php } ?>
            </div>
            <div class="detail_watched">
                <div class="detail_watched--text">SẢN PHẨM ĐÃ XEM</div>
                <div class="detail_watched_nav">
                    <?php while( $cot1 = mysqli_fetch_array($loai11)){  ?>
                        <a href="product.php?maLoai=<?php  echo $cot1['maSp']; ?>&loai=<?php  echo $cot1['maLoai']; ?>&maMuahang=<?php echo $ma ?>" class="detail_watched--item">
                            <img src="img/<?php  echo $cot1['anh']; ?>">
                            <span><?php  echo $cot1['tenSp']; ?></span>
                            <span class="freeShip">Free ship</span>
                            <p><?php  echo number_format($cot1['donGia']) ?>đ</p>
                        </a>
                    <?php  } ?>

                </div>
            </div>
        </div>
    </div>
    <script src="addCart.js"></script>
    <script src="danhgia.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
  <?php

include "footer.php";
  ?>