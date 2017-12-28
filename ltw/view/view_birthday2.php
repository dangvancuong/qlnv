<div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Sinh Nhật Trong Hôm Nay</div>
		<div class="panel-body">
		<?php 
				$dem=0;
					foreach ($arr1 as $key => $value) {
						# code...
						
				$a=substr($value['ngaysinh'],0,4);
						// echo $a;
						$b=date('Y');
						// echo $b;
						$c= $b-$a;

				$d=substr($value['ngaysinh'],5);
										// echo $d;
				$e=date('m')."-".(date('d')+1);
										// echo $e;
				if ($d == $e) {
											# code...
				echo $value["hoten"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				".$c." tuổi"."<br>";
				$dem=$dem+1;
				// echo "$dem";
				}
				
				}
			 	if ($dem == 0) {
			 		# code...
			 		echo "Hôm Nay Không Có Sinh Nhật Của Ai";
			 	}
		 	 ?> 
		</div>
	</div>
</div>
	<div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Sinh Nhật Của Tất Cả Các Nhân Viên</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th style="width: 250px;text-align: center;">Họ Tên</th>
					<th style="width: 150px;text-align: center;">Chức Vụ</th>
					<th style="text-align: center;">Sinh Nhật Lần Thứ</th>
					<th style="text-align: center;width: 150px">Còn</th>
				</tr>
				<?php 
					foreach ($arr as $key => $value) {
						# code...
						
				 ?>
				<tr>
					<td  style="text-align: center;">
						<?php echo $value["hoten"] ?>
						</td>
					<td style="text-align: center;">
						<?php echo $value["phanquyen"]==1?"Admin":"Nhân Viên"; ?>
					</td>
					<td style="text-align: center;">
						<?php
						$a=substr($value['ngaysinh'],0,4);
						// echo $a;
						$b=date('Y');
						// echo $b;
						$c= $b-$a;
						echo $c;
						 ?>
					</td>
					<td style="text-align: center;">
						<?php
						$ngay=substr($value['ngaysinh'],8,10);
						// echo $ngay;
						$thang=substr($value['ngaysinh'],5,2);
						$ngayht=date('d')+1;
						// echo $ngayht;
						$thanght=date('m');
						// echo $thanght;
						if ($thang =$thanght) {
							# code...
							echo abs($ngayht-$ngay)." Ngày";
						}
						else {
							# code...
							echo abs($thang-$thanght)." Tháng".abs($ngayht-$ngay)." Ngày";
						}
						// echo $b;
						// $c= $b-$a;
						// echo $c;
						 ?>
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
				<a href="index2.php?controller=birthday2&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>