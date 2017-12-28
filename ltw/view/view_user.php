<div class="col-md-8 col-xs-offset-2">
	<div style="margin-bottom: 5px;">
		<a href="index.php?controller=add_edit_user&act=add" class="btn btn-primary">Add</a>
		<!-- add de sau -->  
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">Tài khoản nhân viên</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th>Username</th>
					<th>Họ Tên</th>
					<th style="width: 100px;"></th>
				</tr>
				<?php 
					foreach ($arr as $key => $value) {
						# code...
				 ?>
				<tr>
					<td><?php echo $value["username"]; ?></td>
					<td>
						
					<?php 
						$arr1 = $this->model->fetch_one("select * from tbl_nhanvien where idnv =".$value['idnv']);
						isset($arr1["hoten"]) ? $arr1["hoten"] : "";
						echo $arr1["hoten"];
					 ?>

					</td>
					<td style="text-align: center;">
						<a href="index.php?controller=add_edit_user&act=edit&id=<?php echo $value["idnv"]; ?>">Edit</a>&nbsp;&nbsp;
						<a href="index.php?controller=user&act=delete&id=<?php echo $value["idnv"]; ?>" onclick="return window.confirm('Are you sure')">Delete</a>
					</td>
				</tr>
				<?php } ?>
			</table>
			<style type="text/css">
				.pagination{
					padding: 0px;
					margin: 0px;
				}
			</style>
			<ul class="pagination">
				<li class="active"><a href="#">Trang</a></li>
					<?php 
				for($i = 1; $i<=$page; $i++){
			 ?>
				<li>
				<a href="index.php?controller=user&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			<?php } ?>
			</ul>
		</div>
	</div>
</div>