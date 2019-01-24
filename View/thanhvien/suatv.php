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
		<h2>Sửa Thành Viên</h2>
		<form action="" method="POST">
		<a href="index.php?controller=thanh-vien&action=danhsach">Danh Sách</a>
			<table>
					<tr>
						<td>Tên Thành Viên: </td>
						<td><input type="text" name="ten" value="<?php echo $dataID['ten'] ?>"></td>
					</tr>
					<tr>
						<td>Năm Sinh: </td>
						<td><input type="text" name="namsinh" value="<?php echo $dataID['namsinh'] ?>"></td>
					</tr>
					<tr>
						<td>Quê Quán: </td>
						<td><input type="text" name="quequan" value="<?php echo $dataID['quequan'] ?>"></td>
					</tr>
			</table>
			<div class="nut">
				<input type="submit" value="Sửa" name="sua" />
				<input type="reset" value="Reset" name="reset" />
			</div>
		</form>
		</center>
		

	</div>
</body>
</html>