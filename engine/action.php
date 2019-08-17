<?php 

if ($_SERVER['REQUEST_URI'] == '/siwes/sadaka/HTML/engine/ajaxLoad.php') {
	include("../db/db.php");
}else{
	include("db/db.php");
}
class DataOperation extends Database
{
	public function insert_record($table, $fileds) {
		$sql = "";
		$sql .= "INSERT INTO ".$table;
		$sql .="(".implode(",",array_keys($fileds)).") VALUES";
		$sql .="('".implode("','", array_values($fileds))."')";
		// echo $sql;
		$query = mysqli_query($this->con,$sql);
		if ($query) {
		 	return true;
		 } else{
		 	echo mysqli_error($this->con);
		 }
	}


	public function fetch_record($table) {
		$sql = "SELECT * FROM ".$table;
		$array = array();
		$query = mysqli_query($this->con, $sql);
		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return $array;	
	}

	public function select_record($table, $where) {

		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			//id = '5' AND m_name = 'something'
			$condition .= $key . "='".$value . "' AND ";
		}
		$condition = substr($condition, 0, -5);

		$sql .= "SELECT * FROM ".$table." WHERE ".$condition;
		$query = mysqli_query($this->con, $sql);
		$row = mysqli_fetch_array($query);
		return $row;
	}

	public function update_record($table,$where,$fileds) {

		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			//id = '5' AND m_name = 'something'
			$condition .= $key . "='".$value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		foreach ($fileds as $key => $value) {
			//UPDATE table SET m_name = '' ,qty='' WHERE id='';
			$sql .= $key . "='".$value."', ";
		}
		$sql = substr($sql, 0, -2);
		$sql ="UPDATE ".$table." SET ".$sql." WHERE ".$condition;
		if(mysqli_query($this->con,$sql)) {
			return true;
		}else{
			echo mysqli_error($this->con);
		}
	}

	public function delete_record($table, $where) {
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			//UPDATE table SET m_name = '' ,qty='' WHERE id='';
			$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		$sql ="DELETE FROM ".$table." WHERE ".$condition;
		if (mysqli_query($this->con,$sql)) {
			return true;
		}else {
			echo mysqli_error($this->con);
		}
	}


	public function fetch_record_with_limit($table, $limit) {
		$sql = "";
		$condition = "";
		foreach ($limit as $key => $value) {
			//UPDATE table SET m_name = '' ,qty='' WHERE id='';
			$condition .= $value . " ,";
		}
		$condition = substr($condition, 0, -1);
		$sql ="SELECT * FROM ".$table." LIMIT ".$condition;
		// echo $sql = "SELECT * FROM ".$table." LIMIT ".$limit;
		$array = array();
		$query = mysqli_query($this->con, $sql);
		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return $array;	
	}
}

$obj = new DataOperation;
if(isset($_POST['submit'])){
	$myarray = array(
		"m_name" => $_POST['name'],
		"qty" => $_POST['qty']
	);
	if ($obj->insert_record("medcine", $myarray)) {
		header("location:index.php?msg=Record inserted");
	}else{
		echo "error";
	}
	
}

if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$where = array("id"=>$id);
	$myarray = array(
		"m_name" => $_POST['name'],
		"qty" => $_POST['qty']
	);
	if ($obj->update_record("medcine",$where, $myarray)) {
		header("location:index.php?msg=Record updated succesfully");
	}
	
}

if (isset($_GET["delete"])) {
	$id = $_GET['id'];
	$where = array("id"=>$id);
	if ($obj->delete_record("medcine",$where)) {
		header("location:index.php?msg=Record Ddeleted Successfully");
	}
}


 ?>