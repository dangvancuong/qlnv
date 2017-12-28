<?php 
	class controller_login extends controller{
		public function __construct(){
			parent::__construct();
			// 
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				# code...
				$username= $_POST["username"];
				$password= $_POST["password"];
				$check = $this->model->fetch_one("select * from tbl_dangnhap where username = '$username' and password = '$password' ");
				if ($check['phanquyen'] == 1) {
					# code...
				 	# code...
				 	$_SESSION["username"]= $username;
				 	header('location:index.php?controller=home1');
				 	
				 	// header('location:index.php?err=1');

				} if ($check['phanquyen'] == 2) {
					# code...
					 if (isset($check['username'])) {
				 	# code...
				 	$_SESSION["username"]= $username;
				 	header('location:index2.php?controller=home2');
				 } else {
				 	header('location:index2.php?err=1');
				 }
				}
				
				 
				
			}
			// load view
			include 'view/view_login.php';
		}
	}
	new controller_login();
 ?>