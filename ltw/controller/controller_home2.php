<?php 
	class controller_home2 extends controller{
		public function __construct(){
			parent:: __construct();
			//-------------
			$total_record = $this->model->num_rows("select * from tbl_nhanvien");
			$max_record = 4;
			$page = ceil($total_record/$max_record);
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"]>0 ? $_GET["p"] - 1:"";
			$from = $p * $max_record;
			$arr = $this->model->fetch("select * from tbl_nhanvien order by phanquyen asc limit $from,$max_record");
			//load view
			//
			include "view/view_home2.php";
		}
	}
	new controller_home2();
		
 ?>