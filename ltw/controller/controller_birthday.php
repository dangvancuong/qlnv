<?php 
	class controller_birthday extends controller{
		public function __construct(){
			parent::__construct();
			//----
			//
			//
			$arr1=$this->model->fetch("select * from tbl_nhanvien");
			$total_record = $this->model->num_rows("select * from tbl_nhanvien");
			$max_record = 3;
			$page = ceil($total_record/$max_record);
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"]>0 ? $_GET["p"] - 1:"";
			$from = $p * $max_record;
			$arr = $this->model->fetch("select * from tbl_nhanvien order by idnv desc limit $from,$max_record");

			include 'view/view_birthday.php';


		
	}
}
	new controller_birthday();
 ?>