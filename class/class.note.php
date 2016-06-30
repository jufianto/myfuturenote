<?php 
class note 
{
	private $db;
	function __construct($connect){
		$this->db = $connect;
	}

	public function getAllData(){
		$jfSql = "select * from idea";
		$jfQu = $this->db->prepare($jfSql);
		$jfQu->execute();
		$jfData = $jfQu->fetchAll(PDO::FETCH_OBJ);
		return $jfData;
	}

	public function getLabel($id){
		$jfSql = "select * from label where id = :label_id";
		$jfQu = $this->db->prepare($jfSql);
		$jfQu->execute(array(":label_id"=> $id));
		$jfData = $jfQu->setFetchMode(PDO::FETCH_OBJ);
		$jfData = $jfQu->fetchColumn(1);
		return $jfData;
	}

	public function getStart($id){
		if ($id == 0){
		echo "
		<button class='btn btn-primary' type='submit'>Start</button>
		 ";

		 }else{
		 	echo "
		<button class='btn btn-warning' type='submit'>Starting</button>
		 ";
		 }

		
	}
}