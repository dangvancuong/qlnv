<div class="col-md-8 col-xs-offset-2"> 
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit user</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_action; ?>">
				 <!-- row -->
				 <div class="row" style="margin-top:5px;">
					<div class="col-md-2">Username</div>
					<div class="col-md-10"><input type="text" <?php echo isset($arr["username"])?"disabled":""; ?> value="<?php echo isset($arr["username"])?$arr["username"]:""; ?>" name="username" required class="form-control"></div>
				</div>
				 <!-- end row -->
				 <!-- row -->
				<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Password</div>
				<div class="col-md-10"><input name="password" type="password" class="form-control" <?php echo isset($arr["username"])?"":"required"; ?> placeholder="<?php echo isset($arr["password"])?"Nếu không đổi password thì để trống trường này":""; ?>"></div>
				</div>
				<!-- end row -->
				<!-- row -->
					<div class="row" style="margin-top: 5px;">
						<div class="col-md-2"></div>
						<div class="col-md-10">
							<input type="submit" name="" class="btn btn-primary" value="proces">&nbsp;<input type="reset" name="" class="btn btn-danger" value="reset">
						</div>
					</div>
				<!-- end-row -->
			</form>
		</div>
	</div>
</div>