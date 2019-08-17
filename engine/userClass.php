<?php  
	include("function.php");
	include("../db/db.php");

	class User extends Database
	{
		public function check_login ($table, $where, $redirect_to, $failed) 
		{
			$sql = "";
			$condition = "";

			foreach ($where as $key => $value) {
				//id = '5' AND m_name = 'something'
				$condition .= $key . "='".strip_tags($this->con->real_escape_string($value)) . "' AND ";
			}
			$condition = substr($condition, 0, -5);
			$sql ="SELECT * FROM ".$table." WHERE ".$condition;
			$result = $this->con->query($sql);
			$row = $result->fetch_array(MYSQLI_ASSOC);
			$count_row = $result->num_rows;

			if($count_row == 1){
				session_start();
				// $['session_loggedat'] = time()
				$_SESSION['id'] = $row['id'];
				header("Location:../".$redirect_to);
				exit;
				// return True;

			}else 
			{
				header("Location:../".$failed);
				exit;
			}
		}


		public function registerUser($table,$fileds) 
		{
			$sql = "";
			$sql .= "INSERT INTO ".$table;
			$sql .="(".implode(",",array_keys($fileds)).") VALUES";
			echo $sql .="('".implode("','", array_values($fileds))."')";
			// echo $sql;
			$query = mysqli_query($this->con,$sql);
			if ($query) {
			 	return true;
			 } else{
			 	echo mysqli_error($this->con);
			 }
		}

		public function fetchUserInfo($table1,$table2,$col1,$col2,$col_cond, $col_value) 
		{
			$sql = "SELECT u.*, r.* FROM ".$table1." AS u INNER JOIN ".$table2." AS r ON u.".$col1."=r.".$col2." AND u.".$col_cond." = ".$col_value;
			$result = $this->con->query($sql);
			$array = array();
			// $user = $result->fetch_array(MYSQLI_ASSOC);
			while($user = $result->fetch_array(MYSQLI_ASSOC)){
				$array[] = $user;
			}
			return $array;

		}


		public function validateSession() 
		{	
			session_start();
			if (isset($_SESSION['id'])) {
			 	return true;
			 } else{
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


		public function logout($location) 
		{
			// Four steps to closing a session
			// (i.e. logging out)

			// 1. Find the session
			session_start();
			
			// 2. Unset all the session variables
			$_SESSION = array();
			
			// 3. Destroy the session cookie
			if(isset($_COOKIE[session_name()])) {
				setcookie(session_name(), '', time()-42000, '/');
			}
			
			// 4. Destroy the session
			session_destroy();
			$location = $location."?logout=1";
			redirect_to($location);
		}
	}

	// $obj = new Database;
	// $obj = new User;
	// $myarray = array(
	// 	"id" => "1",
	// 	"position" => "admin"
	// );
	// echo $obj->check_login("roles", $myarray,"index.php");
	// echo "          ";
	// echo $obj->validateSession();
// echo hashing("no",'salt');
$obj = new User;
if(isset($_POST['confirmUser'])){
	$myarray = array(
		"email" => $_POST['emailId'],
		"hash" => hashing($_POST['pass'])
	);

	$obj->check_login("users", $myarray, "adpa/index.php","adpa/login.php");
	

}


// echo $user['firstname'];

// echo hashing("1234");
// $conn = mysqli_connect("localhost", "root", "", "sadaka");
// $asl = "SELECT u.*, r.* FROM users AS u INNER JOIN roles AS r ON u.role_id=r.id AND u.id='1'";
// $check = mysqli_query($conn, $asl);
// $row = mysqli_fetch_array($check);

// if ($check) {
// 	echo $row['firstname']."  description : ".$row['description'];
// }else{
// 	echo mysqli_error($conn);
// }
 ?>
