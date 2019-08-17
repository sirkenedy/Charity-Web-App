<?php 

	class Database
	{
		public $con;
		public function __construct() {
			$this->con = new mysqli("localhost","root","","sadaka");
			// if($this->con){
			// 	echo "connected";
			// }else {
			// 	echo "NOT Connected";
			// }
		}
	}

	// $obj = new Database;
 ?>