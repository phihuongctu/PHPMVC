<?php 
	
	
	if(isset($_GET['action']))
	{
		$action = $_GET['action'];
	}
	else {
		$action = '';
	}

	$thanhcong = array();

	switch($action)
	{
		case 'them':{
			if(isset($_POST['them'])) {
				$ten = $_POST['ten'];
				$namsinh = $_POST['namsinh'];
				$quequan = $_POST['quequan'];

				$db ->themData($ten, $namsinh, $quequan);
				$thanhcong[] = 'add_thanhcong';
				
			
		}

			require_once('View/thanhvien/themtv.php');
			break;
		}
		case 'sua':
			if (isset($_GET['id'])){
				$id=$_GET['id'];
				$tblTable='thanhvien';
				$dataID = $db->getDataID($tblTable,$id);

				if(isset($_POST['sua'])){
					$ten = $_POST['ten'];
					$namsinh = $_POST['namsinh'];
					$quequan = $_POST['quequan'];
					if($db->suaData($id, $ten, $namsinh, $quequan)){
						header('location:index.php?controller=thanh-vien&action=danhsach');
					}
				}

			}
			require_once('View/thanhvien/suatv.php');
			break;
		
		case 'xoa':
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$tblTable='thanhvien';
				
				if($db->xoaData($id)){
					header('location:index.php?controller=thanh-vien&action=danhsach');
				}
			}
			break;

		case 'danhsach':
			$tblTable = "thanhvien";
			$data = $db->getAlldata($tblTable);
			require_once('View/thanhvien/danhsachtv.php');
			break;
		case 'timkiem':
		if (isset($_GET['tukhoa'])) {
			$key = $_GET['tukhoa'];
			$tblTable = "thanhvien";

			$dataSearch=$db->timkiem($tblTable,$key);
		}
			require_once('View/thanhvien/search.php');
			break;

		default:
		require_once('View/thanhvien/danhsachtv.php');
			break;
	}

 ?>