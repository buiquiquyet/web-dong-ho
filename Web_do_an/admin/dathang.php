
		<?php include_once("header.php") ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
		<div class="container mt-3" >
		<div class="right_col" role="main" >
          <div class="">
            <div class="page-title">

			  <h1>Chờ Xác Nhận </h1>
				<!--<?php
					 require_once 'condb1.php';


				if(isset($_GET['trang'])){
					$page = $_GET['trang'];
				}else{
					$page ='';
				}
				if($page== '' || $page == 1){
					$begin = 0;
				}else{
					$begin = ($page *2) -2;
				}
						$sql = "SELECT distinct taiKhoanKh FROM muahang order by taiKhoanKh limit $begin,1 ";
						$sql1 = mysqli_query($conn,$sql);
						while ( $r2 = mysqli_fetch_assoc($sql1)){
							  $GLOBALS['taikhoan'] = $r2['taiKhoanKh'];

					?>-->



						<table class="table table-striped table table-bordered " >

				<thead class="thead-dark">
				  <tr>
				  <!--<th>Người dùng : <font-color:red><?php echo $r2['taiKhoanKh'];?> </th>-->
				  <th>Người dùng  </th>
					<th>Tên người mua</th>
					<th>Email</th>
					<th>Sđt</th>
					<th>Địa chỉ</th>
					<th>Mã sản phẩm</th>
					<th>Tên sản phẩm</th>
					<th>Đơn giá</th>
					<th>Ảnh</th>
					<th>Số lượng</th>
					<th>T.Gian đặt hàng</th>
					<th>Tổng tiền</th>
					<th>Chức năng</th>

				  </tr>
				</thead>
				<tbody>

						  <?php


					 require_once 'condb1.php';


				if(isset($_GET['trang1'])){
					$page1 = $_GET['trang1'];
				}else{
					$page1 ='';
				}
				if($page1== '' || $page1 == 1){
					$begin1 = 0;
				}else{
					$begin1 = ($page1 *5) -5;
				}
				$lietke_sql = "SELECT * FROM cholayhang ";
				$lietke_sql1 = "SELECT  * FROM muahang inner join sanpham on muahang.maSp = sanpham.maSp  order by maMuahang limit $begin1,5";
				//thuc thi cau lenh
				$results = mysqli_query($conn,$lietke_sql);
				$results1 = mysqli_query($conn,$lietke_sql1);
				//duyet qua  va in ra
				while ( $r1 = mysqli_fetch_assoc($results1)){
					?>
				<tr>
				
					<th><?php echo $r1['taiKhoanKh'];?></th>
					<th><?php echo  $r1['ten'];?></th>
					<th><?php echo  $r1['email'];?></th>
					<th><?php echo  $r1['sdt']; ?></th>
					<th><?php echo  $r1['diaChi']; ?></th>
					<th><?php echo  $r1['maSp']; ?></th>
					<th><?php echo  $r1['tenSp']; ?></th>
					<th><?php echo  number_format($r1['donGia']); ?></th>
					<th><img src = "../upload/<?php echo  $r1['anh'];  ?>" width = "40px" height = "40px"></th>



					<th><?php echo  $r1['soluong']; ?></th>
					<th><?php echo  $r1['thoiGian']; ?></th>
					<th><?php echo  number_format($r1['tongTien']); ?></th>
					<!--<th>
					<a  onclick="return confirm('Bạn có muốn xóa sản phẩm này không');" href="xoadathangAdmin.php?tenSp=<?php echo $r1['maMuahang'];?>" class="btn btn-danger"><i class="fa fa-trash"></i>  </a></th>-->
					<th>
					<a  onclick="return confirm('Bạn có muốn xóa sản phẩm này không');" href="xoadathangAdmin.php?tenSp=<?php echo $r1['maSp'];?>&soluong=<?php echo  $r1['soluong']; ?>&sl=<?php echo  $r1['soLuong']; ?>&maMuahang=<?php echo  $r1['maMuahang']; ?> " class="btn btn-danger"><i class="fa fa-trash"></i>  </a>
					<a   href="duyetlayhang.php?maMuahang=<?php echo $r1['maMuahang']?>&maSp=<?php echo $r1['maSp'];?>&taiKhoanKh=<?php echo $r1['taiKhoanKh']; ?>
																			&ten=<?php echo $r1['ten']; ?>
																		&email=<?php echo $r1['email']; ?>
																		&sdt=<?php echo $r1['sdt']; ?>
																		&soluong=<?php echo $r1['soluong']; ?>
																		&tongTien=<?php echo $r1['tongTien']; ?>
																		&diaChi=<?php echo $r1['diaChi']; ?>
																		&thoiGian=<?php echo $r1['thoiGian']; ?>" class="btn btn-info"><i class="fa fa-trash"></i> Duyệt </a></th>
				  </tr>
			  <?php
				}
			  ?>



				</tbody>
			  </table>
			  
			<!--   <?php
			 require_once 'condb1.php';

				$phantrang1 = "select  * FROM muahang inner join sanpham on muahang.maSp = sanpham.maSp and muahang.taiKhoanKh = '$taikhoan'   ";

				$phantrang21 = mysqli_query($conn,$phantrang1);
				$phantrang11 = mysqli_num_rows($phantrang21);
				$trang1 = ceil($phantrang11/2);

			 ?>
			  <nav aria-label="Page navigation example">

					  <ul class="pagination">
					 	<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>

					   <?php

						for($i=1; $i <=$trang1; $i++)
						{?>
							<li class="page-item"><a class="page-link" href="dathang.php?trang1=<?php echo $i ?>"><?php echo $i ?></a></li>
						<?php
						}
			  ?>



						<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
					  </ul>
</nav>-->

			  
			   <?php } ?>

  




			    <?php
			 require_once 'condb1.php';

				$phantrang = "SELECT  * FROM muahang inner join sanpham on muahang.maSp = sanpham.maSp  ";

				$phantrang2 = mysqli_query($conn,$phantrang);
				$phantrang1 = mysqli_num_rows($phantrang2);
				$trang = ceil($phantrang1/5);

			 ?>
			  <nav aria-label="Page navigation example">

					  <ul class="pagination">
					 	<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>

					   <?php

						for($i=1; $i <=$trang; $i++)
						{?>
							<li class="page-item"><a class="page-link" href="dathang.php?trang1=<?php echo $i ?>"><?php echo $i ?></a></li>
						<?php
						}
			  ?>



						<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
					  </ul>
</nav>
					  </div>
					</div>
					<br>
					<br>




			</div>

			</div>

			</div>
			</div>

			<?php include("footer.php"); ?>
