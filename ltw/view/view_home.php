<!DOCTYPE html>
<html lang="en"><head>
    <title> Example </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <script type="text/javascript" src="layout/vendor/bootstrap.js"></script>
    <link rel="stylesheet" href="layout/vendor/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>
<body >
	
	<div class="container" style="padding-top: 30px">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				Chào mừng <?php echo $_SESSION["username"]; ?> đến với trang Admin
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"">
				<a href="http://localhost:8080/ltw_project/ltw/index2.php?controller=home2">Chuyển đến trang nhân viên</a>
			</div>
		</div>
	</div>
</body>
</html>