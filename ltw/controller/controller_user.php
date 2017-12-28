<?php 
	class controller_user extends controller{
		public function __construct(){
			parent::__construct();
			
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
			 	case 'delete':
			 		# code...
			 		$id = isset($_GET["id"])?$_GET["id"]:0;
			 		$this->model->execute("delete from tbl_dangnhap where idnv = $id");
			 		header("location:index.php?controller=user");
					break;
			 } 

			$total_record = $this->model->num_rows("select * from tbl_dangnhap where phanquyen=2");
			$max_record = 4;
			$page = ceil($total_record/$max_record);
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"]>0 ? $_GET["p"] - 1:"";
			$from = $p * $max_record;
			$arr = $this->model->fetch("select * from tbl_dangnhap where phanquyen =2 order by idnv desc limit $from,$max_record ");
			include 'view/view_user.php';
		}
	}
	new controller_user();
 ?>