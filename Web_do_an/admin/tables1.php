
		<?php include_once("header.php") ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
		<div class="container mt-3" >
		<div class="right_col" role="main" >
          <div class="">
            <div class="page-title">
               
			  <h1>Quản lí tài khoản </h1>
				<table class="table table-striped table table-bordered " >
				
				<thead class="thead-dark">
				  <tr>
					<th>Tên đăng nhập</th>
					<th>Mật khẩu</th>
					
					<th>Chức năng</th>
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
					$begin = ($page * 5) -5;
				}
				$lietke_sql = "SELECT * FROM sinhvien1 order by maSv desc limit $begin,5   ";
				//thuc thi cau lenh
				$results = mysqli_query($conn,$lietke_sql);
				//duyet qua  va in ra
				while ($r = mysqli_fetch_assoc($results)){
					?>
					
				

			<tr>
					<th><?php echo  $r['maSv'] ?></th>
					<th><?php echo  $r['tenSv']?></th>
					
					<th><a href="sua1.php?maSv=<?php echo  $r['maSv'] ?> " class="btn btn-warning" ><i class="fa fa-pen"></i> SỬA </a>
					<a  onclick="return confirm('Bạn có muốn xóa tài khoản này không');" href="xoa.php?maSv=<?php echo $r['maSv'];?>" class="btn btn-danger"><i class="fa fa-trash"></i> XÓA </a></th>
				  </tr>
			  <?php
				}
			  ?>
				</tbody>
			  </table>
			  <button type="button" class="btn btn-success">
				<a href="them11.php" style="color:white; text-decoration:none;"><i class="fa fa-user-plus"></i> Thêm</a> 
			  </button>
			  
			   <?php
			 require_once 'condb1.php';
			
				$phantrang = "SELECT * FROM sinhvien1 ";
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
							<li class="page-item"><a class="page-link" href="tables1.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
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
    