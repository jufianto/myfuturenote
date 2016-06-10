<?php 
class label
{
	private $db;
	function __construct($connect){
		$this->db = $connect;
	}

	public function createData($name,$level){

		try{
			$jfSql = "insert into label (name,level) values (:name , :level)";
			$jfQu  = $this->db->prepare($jfSql);
			$jfQu->bindparam(":name", $name);
			$jfQu->bindparam(":level", $level);
			$jfQu->execute();
			return true;
			
		}catch(PDOException $ex){
			echo $ex->getMessage;
			return false;
		}
	}


	public function getAllData(){
		$jfSql = "select * from label";
		$jfQu = $this->db->prepare($jfSql);
		$jfQu->execute();
		$jfData = $jfQu->fetchAll(PDO::FETCH_OBJ);
		return $jfData;
	}

	public function getOneData($id){
		$jfSql = "select * from label where id = :id";
		$jfQu = $this->db->prepare($jfSql);
		$jfQu->execute(array(":id"=> $id));
		$jfData = $jfQu->fetch(PDO::FETCH_OBJ);
		return $jfData;
	}

	public function updateData($id,$name,$level){
		try{
			$jfSql = "update label set name = :name , level =  :level where id = :id";
			$jfQu  = $this->db->prepare($jfSql);
			$jfQu->bindparam(":id", $id);
			$jfQu->bindparam(":name", $name);
			$jfQu->bindparam(":level", $level);
			$jfQu->execute();

			return true;
			
		}catch(PDOException $ex){
			echo $ex->getMessage;
			return false;
		}
	}

	public function remove($id){
		$jfSql = "delete from label where id = :id";
		$jfQu  = $this->db->prepare($jfSql);
		if($jfQu->execute(array(":id"=> $id)))
		{
			header('location:label.php?removed');
		}else{
			header('location:label.php?failure');
		}

	}
}