<?php 
	class controller_staff extends controller{
		public function __construct(){ 
			//goi ham tao cua class controller
			parent::__construct();
			//---------
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "delete":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//------------
					//xoa anh vat ly neu anh nay ton tai
					// var_dump($arr_old_img); die;
					$arr_old_img = $this->model->fetch_one("select * from tbl_nhanvien");

					$old_img = isset($arr_old_img["anh"])?$arr_old_img["anh"]:"";
					if(file_exists("../public/upload/staff/".$old_img)){
						//xoa file
						unlink("../public/upload/staff/".$old_img);
					}
					//------------
					//thuc hien truy van xoa ban ghi co id truyen vao
					$this->model->execute("delete from tbl_nhanvien where idnv=$id");
					//di chuyen den trang chi dinh
					header("location:index.php?controller=staff");
					break;
			}
			//---------
			$total_record = $this->model->num_rows("select * from tbl_nhanvien where phanquyen=2");
			$max_record = 4;
			$page = ceil($total_record/$max_record);
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"]>0 ? $_GET["p"] - 1:"";
			$from = $p * $max_record;
			$arr = $this->model->fetch("select * from tbl_nhanvien where phanquyen=2 order by idnv desc limit $from,$max_record");
			//load view
			include "view/view_staff.php";
		}
	}
	new controller_staff();
 ?>