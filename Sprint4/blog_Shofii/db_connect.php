<?php 
class database{
	protected $host = "localhost",
	 	$username = "root",
	 	$password = "password",
		$database = "app_pondok",
		$data;
<<<<<<< HEAD
=======

>>>>>>> 59c6a8ae5e4a75f8e3880202d58189e186517519
		 
	public function __construct(){

		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		
		try {
			$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
			// echo "koneksi berhasil";	
		} catch (mysqli_sql_exception $e){
			echo $e->getMessage();
			exit;
		}
		
	}

	function register($name, $password){

		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

		$insert = mysqli_query($this->koneksi, "INSERT INTO login(name, password) VALUES ('$name','$password')");

		if($insert){
			echo 'success';
			die;
		}else{
			echo mysqli_error($this->data);
			die;
		}
		return $insert;
	}

}

<<<<<<< HEAD
		
=======

>>>>>>> 59c6a8ae5e4a75f8e3880202d58189e186517519
?>
