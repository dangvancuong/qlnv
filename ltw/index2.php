<?php 
	//start session
	session_start();
	//load config
	include '../config.php';
	include '../application/model.php';
	include '../application/controller.php';
	if (isset($_GET["act"]) && $_GET["act"] = "logout") {
		# code...
		unset($_SESSION["username"]);
	}
	// echo "afdf";
	if (isset($_SESSION["username"])) {
		# code...
		$c = isset($_GET["controller"])?$_GET["controller"]:"";
		$controller = $c != "" ? "controller/controller_$c.php" :"";
		include 'view/view2_layout.php';
	} else {
		include 'controller/controller_login.php';
	}

 ?>