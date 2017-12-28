 <div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm Và Sửa Nhân Viên</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_action; ?>" enctype="multipart/form-data">
			<!-- row -->
			<div class="row" style="margin:5px">
				<div class="col-md-2">Họ Tên</div>
				<div class="col-md-10">
					<input type="text" name="hoten" class="form-control" required value="<?php echo isset($arr["hoten"])?$arr["hoten"]:""; ?>">
				</div>
			</div>			
			<!-- end row -->
			<!-- row -->
			<!-- ngay sinh lam sau -->
			<div class="row" style="margin:5px">
				<div class="col-md-2">Ngày Sinh</div>
				<div class="col-md-10">
					<input type="date" name="ngaysinh" class="form-control" required value="<?php echo isset($arr["ngaysinh"])?$arr["ngaysinh"]:""; ?>">
				</div>
			</div>			
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin:5px">
				<div class="col-md-2">Email</div>
				<div class="col-md-10">
					<input type="email" name="email" class="form-control" required value="<?php echo isset($arr["email"])?$arr["email"]:""; ?>">
				</div> 
			</div>			
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin:5px">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="checkbox" <?php echo isset($arr["hoten"])&&$arr["gioitinh"]==1?"checked":""; ?> name="gioitinh" id="gioitinh"> <label for="gioitinh">Nam</label>
				</div>
			</div>			
			<!-- end row -->
			<div class="row" style="margin:5px">
				<div class="col-md-2">Số Điện Thoại</div>
				<div class="col-md-10">
					<input type="text" name="sdt" class="form-control" required value="<?php echo isset($arr["sdt"])?$arr["sdt"]:""; ?>">
				</div>
			</div>			
			<!-- row -->
			<div class="row" style="margin:5px">
				<div class="col-md-2">Địa Chỉ</div>
				<div class="col-md-10">
					<textarea style="width:700px;height:100px;" name="diachi">
					<?php echo isset($arr["diachi"])?$arr["diachi"]:""; ?>
					</textarea>
					<script type="text/javascript">
						CKEDITOR.replace("diachi");
					</script>
				</div>
			</div>		
			<div class="row" style="margin:5px">
				<div class="col-md-2">Mô Tả</div>
				<div class="col-md-10">
					<textarea style="width:700px;height:100px;" name="mota">
					<?php echo isset($arr["mota"])?$arr["mota"]:""; ?>
					</textarea>
					<script type="text/javascript">
						CKEDITOR.replace("mota");
					</script>
				</div>
			</div>			
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin:5px">
				<div class="col-md-2">Ảnh</div>
				<div class="col-md-10">
					<input type="file" name="anh">
					<div style="margin-top:5px;"> 
						<?php 
							if (isset($arr["anh"])&&file_exists("../public/upload/staff/".$arr["anh"])) {
								# code...
						 ?>
						<img src="<?php echo "../public/upload/staff/".$arr["anh"]; ?>" style="width:100px;">
						<?php } ?>
					</div>
				</div>
			</div>			
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin:5px">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" name="btn" class="btn btn-primary" value="Process">
				</div>
			</div>			
			<!-- end row -->
			</form>
		</div>
	</div>
</div>