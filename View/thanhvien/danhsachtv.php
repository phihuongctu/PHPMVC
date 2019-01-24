<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh Sách</title>
</head>
<body>	

		<center><div style="" class="danhsach">
		
		<form action="" method="GET">
			<input type="hidden" name="controller" value="thanh-vien">
			<input type="text" name="tukhoa" placeholder="mời nhập...">
			<input type="submit" value="tim kiếm">
			<input type="hidden" name="action" value="timkiem">
		</form>
		<br>
			<h3 ">Danh Sách Thành Viên</h3>
			<a href="index.php?controller=thanh-vien&action=them" style="color: red;">Về Trang Thêm Thành Viên</a>			<table style="text-align: center;">
				<thead>
					<tr>
						<th>ID</th>
						<th>Họ Tên</th>
						<th>Năm Sinh</th>
						<th>Quê Quán</th>
					</tr>
				</thead>
				<tbody>
					<!-- <?php 
						echo '<pre>';
						print_r($data);
					 ?> -->
					<?php
						$stt=1;
					  	foreach ($data as $value){	
					 ?>
						<tr>
							<td><?php echo $stt; ?></td>
							<td><?php echo $value['ten'] ?></td>
							<td><?php echo $value['namsinh'] ?></td>
							<td><?php echo $value['quequan'] ?></td>
							<td>
								<a onclick="return confirm('Bạn chắc chưa ?')" href="http://localhost/phpMVC/index.php?controller=thanh-vien&action=sua&id=<?php echo $value['id'] ?>">Sửa</a>
								<a onclick="return confirm('Bạn chắc chưa ?')" href="http://localhost/phpMVC/index.php?controller=thanh-vien&action=xoa&id=<?php echo $value['id'] ?>">Xóa</a>
							</td>
						</tr>
					 <?php 
					 	$stt++;

					 	}

					
					  ?>
				
				</tbody>
			</table>
		</div>
		</center>
</body>
</html>