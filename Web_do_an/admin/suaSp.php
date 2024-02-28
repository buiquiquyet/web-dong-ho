				<?php

								require_once 'condb1.php';
								//nhap
								$maLoai =  isset($_POST['maLoai']) ? $_POST['maLoai'] : '';
								$tenSp =  isset($_POST['tenSp']) ? $_POST['tenSp'] : '';
								$donGia =  isset($_POST['donGia']) ? $_POST['donGia'] : 0;
								$trangThai =  isset($_POST['trangThai']) ? $_POST['trangThai'] : '';
								
								

								$anh = basename($_FILES["anh"]["name"]);
								$anh1 =  basename($_FILES["anh1"]["name"]);
								$anh2 =  basename($_FILES["anh2"]["name"]);

								$moTa =  isset($_POST['moTa']) ? $_POST['moTa'] : '';
								$id = $_POST['maSp'];
								$soLuong =  isset($_POST['soLuong']) ? $_POST['soLuong'] : 0;

								
								
								$target_dir = "../khachhang/img/";
								$target_file = $target_dir . basename($_FILES["anh"]["name"]);
								$target_file1 = $target_dir . basename($_FILES["anh1"]["name"]);
								$target_file2 = $target_dir . basename($_FILES["anh2"]["name"]);
								$uploadOk = 1;
								$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
								$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
								$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
								// echo "<script>alert('$thu_muc_con');</script>";

									 $check = getimagesize($_FILES["anh"]["tmp_name"]);
									  $check1 = getimagesize($_FILES["anh1"]["tmp_name"]);
									  $check2 = getimagesize($_FILES["anh2"]["tmp_name"]);
									   if($check !== false || $check1 !== false || $check2 !== false) {	
										$uploadOk = 1;
									  } else {
										$uploadOk = 0;
								  //}
								}
								if ($uploadOk == 0) {
										 // echo "Sorry, your file was not uploaded.";
										// if everything is ok, try to upload file
										} else {
										  if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["anh1"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["anh2"]["tmp_name"], $target_file2)) {
											// $anh = $thu_muc_con . '/' . basename($_FILES["anh"]["name"]);
											// $anh1 = $thu_muc_con . '/' . basename($_FILES["anh1"]["name"]);
											// $anh2 = $thu_muc_con . '/' . basename($_FILES["anh2"]["name"]);
										  } else {
											
										  }
										}
										
										
									//ket noi

									//viet lenh
									$updatesql = "UPDATE `sanpham` SET maLoai='$maLoai', tenSp='$tenSp',donGia='$donGia',anh = '$anh',anh1 = '$anh1',anh2 = '$anh2', moTa = '$moTa',soLuong ='$soLuong', trangThai = '$trangThai' WHERE maSp='$id' ";
									// echo $updatesql; exit;
									 //thuc thi lenh
									 if (mysqli_query($conn,$updatesql)
									 ){

									 //inthanhcong
									 //tro ve trang liet ke
									header("Location: sanpham.php");
									 }

									?>