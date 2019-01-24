<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="">
	<title>Thêm Thành Viên</title>
</head>
<body>
	<div class="dangkitv">
		<center>
		<h2>Thêm Thành Viên</h2>
		<form action="" method="POST">
		<a href="index.php?controller=thanh-vien&action=danhsach">Danh Sách</a>
			<table>
					<tr>
						<td>Tên Thành Viên: </td>
						<td><input type="text" name="ten"></td>
					</tr>
					<tr>
						<td>Năm Sinh: </td>
						<td><input type="text" name="namsinh"></td>
					</tr>
					<tr>
						<td>Quê Quán: </td>
						<td><input type="text" name="quequan"></td>
					</tr>
			</table>
			<div class="nut">
				<input type="submit" value="Thêm" name="them" />
				<input type="reset" value="Reset" name="reset" />
			</div>
		</form>
		</center>
		<?php 
			if (isset($thanhcong) && in_array('add_thanhcong',$thanhcong)) {
				echo '<p style = "color:red; text-align:center;">Thêm Thành Công</p>';
			}
		 ?>

	</div>
</body>
</html>