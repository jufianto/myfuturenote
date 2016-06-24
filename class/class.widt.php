<?php 
class widt 
{
	private $db;
	function __construct($connect){
		$this->db = $connect;
	}

	public function createData($name,$level){

		try{
			$jfSql = "insert into widt (wid) values (:wid)";
			$jfQu  = $this->db->prepare($jfSql);
			$jfQu->bindparam(":wid", $name);
			$jfQu->execute();
			return true;
			
		}catch(PDOException $ex){
			echo $ex->getMessage;
			return false;
		}
	}

	public function getAllData(){
		$jfSql = "select * from widt";
		$jfQu = $this->db->prepare($jfSql);
		$jfQu->execute();
		$jfData = $jfQu->fetchAll(PDO::FETCH_OBJ);
		return $jfData;
	}

	public function remove($id){
		$jfSql = "delete from widt where id = :id";
		$jfQu  = $this->db->prepare($jfSql);
		if($jfQu->execute(array(":id"=> $id)))
		{
			header('location:widt.php?removed');
		}else{
			header('location:widt.php?failure');
		}

	}
}