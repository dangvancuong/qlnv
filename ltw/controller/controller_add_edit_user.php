<?php 
	class controller_add_edit_user extends controller{
		public function __construct(){
			parent::__construct();
			$act=isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case "edit":
					# code...
					# code...
					$id=isset($_GET["id"])?$_GET["id"]:0;
				//lay ban ghi co array truyen vao
				$arr=$this->model->fetch_one("select * from tbl_dangnhap where idnv=$id");
				$form_action="index.php?controller=add_edit_user&act=do_edit&id=$id";
				//load view
				include "view/view_add_edit_user.php";
				break;
				case "do_edit":
					$id=isset($_GET["id"])?$_GET["id"]:0;
					$password=$_POST["password"];
					if ($password!="") {
						# code...
						$password=md5($password);
						$this->model->execute("update tbl_dangnhap set password='$password' where idnv=$id");
					}
					//quay ve trang chi dinh
					header("location:index.php?controller=user");
					break;
				case "add":
					# code...
					$form_action="index.php?controller=add_edit_user&act=do_add";
					include "view/view_add_edit_user.php";
					break;
				case "do_add":
					# code...
					$username=$_POST["username"];
					$password=$_POST["password"];
					$password=md5($password);
					$this->model->execute("insert into tbl_dangnhap(username,password,phanquyen) values('$username','$password',2)");
					header("location:index.php?controller=user");
					break;
			}
		}
	}
	new controller_add_edit_user();
 ?>