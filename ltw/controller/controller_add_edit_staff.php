 <?php 
	class controller_add_edit_staff extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//lay ban ghi co id truyen vao
					$arr = $this->model->fetch_one("select * from tbl_nhanvien where idnv=$id");
					$form_action="index.php?controller=add_edit_staff&act=do_edit&id=$id";
					//load view
					include "view/view_add_edit_staff.php";
				break;	
				case "do_edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$hoten = $_POST["hoten"];
					// ngay sinh lam sau
					$ngaysinh= $_POST["ngaysinh"];
					$email = $_POST["email"];
					$sdt = $_POST["sdt"];
					$gioitinh = isset($_POST["gioitinh"])?1:2;
					$mota= $_POST["mota"];
					$diachi=$_POST["diachi"];
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_nhanvien set hoten='$hoten',email='$email',sdt='$sdt',gioitinh=$gioitinh,mota='$mota',ngaysinh='$ngaysinh',diachi='$diachi' where idnv=$id");
					//kiem tra xem co anh update khong, neu co anh thi thuc hien upload
					if($_FILES["anh"]["name"] != ""){
						//------------
						//xoa anh vat ly neu anh nay ton tai
						$arr_old_img = $this->model->fetch_one("select * from tbl_nhanvien where idnv=$id");
						$old_img = isset($arr_old_img["anh"])?$arr_old_img["anh"]:"";
						if(file_exists("../public/upload/staff/".$old_img)){
							//xoa file
							unlink("../public/upload/staff/".$old_img);
						} 
						//------------
						$c_img = time().$_FILES["anh"]["name"];
						//upload file
						move_uploaded_file($_FILES["anh"]["tmp_name"], "../public/upload/staff/".time().$_FILES["anh"]["name"]);
						//update c_img
						$this->model->execute("update tbl_nhanvien set anh='$c_img' where idnv=$id");
					}
					header("location:index.php?controller=staff");
				break;	
				case "add":
					$form_action = "index.php?controller=add_edit_staff&act=do_add";
					//load view
					include "view/view_add_edit_staff.php";
				break;	
				case "do_add":
					$hoten = $_POST["hoten"];
					// ngay sinh lam sau
					$ngaysinh= $_POST["ngaysinh"];
					$c_img="";
					$email = $_POST["email"];
					$sdt = $_POST["sdt"];
					$gioitinh = isset($_POST["gioitinh"])?1:2;
					$mota= $_POST["mota"];
					$diachi=$_POST["diachi"];
					//kiem tra xem co anh update khong, neu co anh thi thuc hien upload
					if($_FILES["anh"]["name"] != ""){
						$c_img = time().$_FILES["anh"]["name"];
						//upload file
						move_uploaded_file($_FILES["anh"]["tmp_name"], "../public/upload/staff/".time().$_FILES["anh"]["name"]);
					}
					$this->model->execute("insert into tbl_nhanvien(hoten,email,sdt,gioitinh,mota,anh,ngaysinh,phanquyen,diachi) values('$hoten','$email','$sdt','$gioitinh','$mota','$c_img','$ngaysinh',2,'$diachi')");
					header("location:index.php?controller=staff");
				break;	
			}
		}
	}
	new controller_add_edit_staff();
 ?>