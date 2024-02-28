
		<?php include_once("header.php") ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
		<div class="container mt-3" >
		<div class="right_col" role="main" >
          <div class="">
            <div class="page-title">
               
			  <h1>Quản lí sản phẩm </h1>
				<table class="table table-striped table table-bordered " >
				
				<thead class="thead-dark">
				  <tr>
					<th>Mã Loại Sản Phẩm</th>
					<th>Tên Sản Phẩm</th>
					<th>Đơn Gía</th>
					<th>Ảnh</th>
					
					<th>Trạng Thái</th>
					<th>Mô Tả</th>
					<th>Số lượng</th>
					<th>Chức Năng</th>
				  </tr>
				</thead>
				<tbody>
				
			<?php

				require_once 'condb1.php';
				if(isset($_GET['trang'])){
					$page = $_GET['trang'];
				}else{
					$page ='';
				}
				if($page== '' || $page == 1){
					$begin = 0;
				}else{
					$begin = ($page * 6) -6;
				}
				
				$lietke_sql = "SELECT * FROM sanpham order by maSp desc limit $begin,6 ";
				//thuc thi cau lenh
				$results = mysqli_query($conn,$lietke_sql);
				//duyet qua  va in ra
				while ($r = mysqli_fetch_assoc($results)){
					?>
					
				

			<tr>
					<th><?php echo  $r['maLoai'];?></th>
					<th><?php echo  $r['tenSp'];?></th>
					<th><?php echo  number_format($r['donGia']); ?></th>
					<th><img src = "../khachhang/img/<?php echo  $r['anh'];  ?>" width = "40px" height = "40px"></th>
					
					<th><?php  if($r['trangThai'] == 0){
									echo "Sẵn hàng";
									} if($r['trangThai'] ==1){
										echo "Hết hàng";
									} if($r['trangThai'] ==2){
										echo "Nổi bật";
									}if($r['trangThai'] ==3){
										echo "Bán chạy";
									}					
						?></th>
					<th><?php echo  $r['moTa']; ?></th>
					<th><?php echo  $r['soLuong']; ?></th>
					<th><a href="editSp.php?maSp=<?php echo $r['maSp']; ?> " class="btn btn-warning" ><i class="fa fa-pen"></i> SỬA </a>
					<a  onclick="return confirm('Bạn có muốn xóa sản phẩm này không');" href="xoaSp.php?tenSp=<?php echo $r['tenSp'];?>" class="btn btn-danger"><i class="fa fa-trash"></i> XÓA </a></th>
				  </tr>
			  <?php
				}
			  ?>
				</tbody>
			  </table>
			  
			  <button type="button" class="btn btn-success">
				<a href="themSp.php" style="color:white; text-decoration:none;"><i class="fa fa-user-plus"></i> Thêm</a> 
			  </button>
			  <br>
			   <?php
			 require_once 'condb1.php';
			
				$phantrang = "SELECT * FROM sanpham ";
				$phantrang2 = mysqli_query($conn,$phantrang);
				$phantrang1 = mysqli_num_rows($phantrang2);
				$trang = ceil($phantrang1/6);
				
			 ?>
			  <nav aria-label="Page navigation example">
			 
					  <ul class="pagination">
					 	<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>

					   <?php

						for($i=1; $i <=$trang; $i++)
						{?>
							<li class="page-item"><a class="page-link" href="sanpham.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
						<?php
						}
			  ?>
						
						
					   
						<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
					  </ul>
</nav>
			</div>
			</div>
			</div>
			<?php include("footer.php"); ?>
     