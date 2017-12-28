<div class="col-md-10 col-xs-offset-1">
	<div style="margin-bottom:5px;">
		<a href="index.php?controller=add_edit_staff&act=add" class="btn btn-primary">
		Thêm Nhân Viên
		</a>
	</div>
	<div class="panel panel-primary"> 
		<div class="panel-heading">
			Danh Sách Nhân Viên
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
			<tr>
				<th style="width:50px">STT</th>	
				<th style="width:120px;">Ảnh</th>
				<th style="width:120px;">Họ Tên</th>
				<th style="width: 150px;">Ngày Sinh</th>
				<th style="width: 120px;">Email</th>
				<th style="width: 120px;">Số Điện Thoại</th>
				<th style="width: 320px;">Mô Tả</th>
				<th style="width: 70px;">Giới Tính</th>
				<th style="width:100px;">Manage</th>
			</tr>
			<?php 
				$stt = 0;
				foreach($arr as $value)
				{
					$stt++;
			 ?>
			<tr>
				<td style="text-align:center">
					<?php echo $stt; ?>
					<!-- stt -->
				</td>
				<td style="text-align:center">
				<?php 
						if(file_exists("../public/upload/staff/".$value["anh"]))
						{
					 ?>
					<img src="<?php echo "../public/upload/staff/".$value["anh"]; ?>" style="width:100px;">
					<?php } ?>
					<!-- anh? -->
				</td>
				<td>
					<?php echo $value["hoten"]; ?>
					<!-- ho ten -->
				</td>
				<td style="text-align: center;">
					<!-- ngay sinh -->
					<?php echo $value["ngaysinh"]; ?>
				</td>
				<td style="text-align: center;">
					<!-- Email -->
					<?php echo $value["email"]; ?>
				</td>
				<td style="text-align: center;">
					<!-- //sdt -->
					<?php echo $value["sdt"]; ?>
				</td>
				<td style="text-align: center;">
					<!-- //mô tả -->
					<?php echo $value["mota"]; ?>

				</td>
				<td style="text-align: center;">
					<?php 
						echo isset($value["gioitinh"])&&$value["gioitinh"]==1?"Nam":"Nữ";
					 ?>
				</td>
				<td style="text-align:center">
					<a href="index.php?controller=add_edit_staff&act=edit&id=<?php echo $value["idnv"]; ?>">Edit</a>&nbsp;
					<a href="index.php?controller=staff&act=delete&id=<?php echo $value["idnv"]; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
				</td>
			</tr>
			<?php } ?>
			</table>
			<style type="text/css">
				.pagination{padding: 0px; margin:0px;}
			</style>
			<ul class="pagination">
			<?php 
				for($i = 1; $i<=$page; $i++){
			 ?>
				<li>
				<a href="index.php?controller=staff&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			<?php } ?>
			</ul>
		</div>
	</div>
</div>