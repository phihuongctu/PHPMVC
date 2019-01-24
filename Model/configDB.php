<?php 
	Class Database{
		private $hostname = "localhost";
		private $username = "root";
		private $pass = "";
		private $dbname = "qltvien_mvc";

		private $conn = null;
		private $result = null;

		public function connect()
		{
			$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
			if (!$this->conn) {
				echo"Ket Noi That Bai";
				exit();
			}
			else{
				mysqli_set_charset($this->conn,'utf8');
				 // echo 'ket noi thanh cong';
			}
			return $this->conn;
		}

		//thuc thi cau lenh truy van:

		public function excute($sql)
		{
			$this->result = $this->conn->query($sql);
			return $this->result;
		}

		//lay du lieu:

		public function getData()
		{
			if($this->result){
				$data = mysqli_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
			return $data;
		}

		public function getDataID($table, $id)
		{
			$sql = "SELECT * FROM $table WHERE id='$id'";
			$this->excute($sql);
			if($this->num()!=0){
				$data = mysqli_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
			return $data;
		}

		//điếm bản ghi
		public function num(){
			if ($this->result) {
				$num = mysqli_num_rows($this->result);
			}else {
				$num = 0;
			}
			return $num;
		}


		// Lay toan bo du  lieu
		public function getAlldata($table){
			$sql = "SELECT * FROM $table";
			$this->excute($sql);
			if ($this->num()==0){
				$data = 0;
			}
			else{
				while ($datas = $this->getData()) {
				    $data[] = $datas;
				}
			}
			return $data;
		}

		
		
		// them du lieu:

		public function themData($ten, $namsinh,$quequan)
		{
			$them = "INSERT INTO thanhvien(ten,namsinh,quequan) VALUES('$ten','$namsinh', '$quequan')";
			return $this->excute($them);
		}

		//Sua du lieu

		public function suaData($id,$ten, $namsinh,$quequan)
		{
			$sua = "UPDATE thanhvien SET ten = '$ten', namsinh = '$namsinh', quequan = '$quequan' WHERE id = '$id'";
			return $this->excute($sua);
		}

		// Xoa data

		public function xoaData($id)
		{
			$xoa = "DELETE FROM thanhvien WHERE id = '$id'";
			return $this->excute($xoa);
		}


		public function timkiem($Table,$key){
			$sql = "SELECT * FROM $Table WHERE ten regexp '$key' ORDER BY id desc";
			$this->excute($sql);
			if ($this->num()==0){
				$data = 0;
			}
			else{
				while ($datas = $this->getData()) {
				    $data[] = $datas;
				}
			}
			return $data;
		}
	}


 ?>