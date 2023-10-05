<?php
	class Database{
		private $hostname ='localhost';
		private $username ='root';
		private $password ='';
		private $dbname = 'manage_members';
		private $conn =NULL;
		private $result =Null;
		public function connect(){
			$this ->conn = new mysqli($this ->hostname, $this -> username, $this -> password, $this -> dbname);
			if(!($this-> conn)){
				die( 'Connect failed');
			}else{
				// mysql_set_charset($this->conn,'utf8');
				$this->conn->set_charset('utf8');
			}
			return $this ->conn;
		}
			//  function execute cau lenh truy van
		public function execute($sql){
			$this->result = $this->conn->query($sql);
			return $this->result;
		}
		public function queryList($tableName){
			$sql = "SELECT * FROM $tableName";
			$this->execute($sql);
			return $this->getData();
			
		}
		public function getData(){
			if($this -> result){
				$data= mysqli_fetch_array($this ->result);
			}else{
				$data =0;
			}
			return $data;
		}

		// function get All Data

		public function getAllData(){
			if(!$this->result){
				return false;
			}else{
				while($datas = $this->getData() ){
					$data[] = $datas;
					// echo '<pre>';
					// print_r($datas);
				}
			}
			return $data;
		}


		//function get data to update by id

		public function getDataById($tableName, $id){
			$sql = "SELECT * FROM  $tableName WHERE id= '$id'";
			$this->execute($sql);
			if($this ->num_rows() !== 0 ){
				$data= mysqli_fetch_array($this ->result);
			}else{
				$data =0;
			}
			return $data;
		}
		//function dem so ban ghi

		public function num_rows(){
			if($this -> result){
				$num = mysqli_num_rows($this->result);
			}else{
				$num =0;
			}
			return $num;

		}
		//function get more data

		public function insertData($name, $birthday,$hometown){
			$sql = "INSERT INTO  members(id, fullname ,birthday, hometown) 
					VALUES('NULL','$name','$birthday','$hometown')";
			return $this -> execute($sql);
		}
		
		 // function Update Data
		public function updateData($id ,$name, $birthday,$hometown){
			$sql ="UPDATE members
					SET fullname = '$name',
						birthday= '$birthday',
						hometown = '$hometown' 
						WHERE id ='$id' ";
			return $this->execute($sql);
		} 
		//function Delete Data
		public function deleteData($id){
			$sql ="DELETE FROM members WHERE id = '$id' ";
			return $this -> execute($sql);
		}
		public function getDataSearch($tableName, $key){
				$sql = "SELECT * FROM  $tableName WHERE fullname REGEXP '$key' ORDER BY id DESC";
				$this->execute($sql);
				if($this ->num_rows() == 0 ){
					$data = 0;
				}else{
					while($datas = $this -> getData()){
						$data[] = $datas;
					}
				}
				return $data;
		}		
			
	}

?>