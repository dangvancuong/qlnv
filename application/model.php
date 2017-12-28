<?php 
	class model{
		public function fetch($sql){//lay tat ca ban ghi
			global $link;
			$result=mysqli_query($link,$sql);
			$arr=array();
			while ($rows=mysqli_fetch_array($result)) {
				# code...
				$arr[]=$rows;
			}
			return $arr;
		}
		public function fetch_one($sql){//lay 1 ban ghi
			global $link;
			$result=mysqli_query($link,$sql);
			$rows=mysqli_fetch_array($result);
			return $rows;
		}
		public function execute($sql){//thuc thi cau lenh sql
			global $link;
			mysqli_query($link,$sql);
		}
		public function num_rows($sql){//lay tong so ban ghi
			global $link;
			$result=mysqli_query($link,$sql);
			return mysqli_num_rows($result);
		}
		public function get_insert_id($id_name,$table_name){
			global $link;
			$result=mysqli_query($link,"select $id_name from $table_name order by $id_name desc limit 0,1");
			$row=mysqli_fetch_array($result);
			return $row;
		}
	}

 ?>