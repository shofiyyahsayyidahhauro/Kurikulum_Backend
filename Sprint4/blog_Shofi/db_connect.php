<?php 
class database{
	protected $host = "localhost",
	 	$username = "root",
	 	$password = "password",
		$database = "app_pondok",
		$data;

	// try {
	// 	$conn =  new PDO("mysql") 
	// }
		 
	public function __construct(){

		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		
		try {
			$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
			// echo "koneksi berhasil";	
		} catch (mysqli_sql_exception $e){
			echo $e->getMessage();
			exit;
		}
		// if( mysqli_connect_errno() )
		// {
		// 	echo "Failed to connect : ".mysqli_connect_error();
		// 	exit;
		// } else {
		// 	echo 'koneksi berhasil';
		// }
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

		// 	$data = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		// 	if (mysqli_connect_errno()){
		// 		echo "failed to connect to mysql: " .mysqli_connect_error();
		// 		exit();
		// 	}	
		// }

// 	function login($username,$password,$remember)
// 	{
// 		$query = mysqli_query($this->koneksi,"select * from login where username='$username'");
// 		$data_user = $query->fetch_array();
// 		if(password_verify($password,$data_user['password']))
// 		{
			
// 			if($remember)
// 			{
// 				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
// 				setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
// 			}
// 			$_SESSION['username'] = $username;
// 			$_SESSION['nama'] = $data_user['nama'];
// 			$_SESSION['is_login'] = TRUE;
// 			return TRUE;
// 		}
// 	}

// 	function relogin($username)
// 	{
// 		$query = mysqli_query($this->koneksi,"select * from login where username='$username'");
// 		$data_user = $query->fetch_array();
// 		$_SESSION['username'] = $username;
// 		$_SESSION['nama'] = $data_user['nama'];
// 		$_SESSION['is_login'] = TRUE;
// 	}


?>