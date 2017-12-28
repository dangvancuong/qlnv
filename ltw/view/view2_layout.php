<!-- nhan vieen -->
<!DOCTYPE html>
<html lang="en"><head>
    <title> Example </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <script type="text/javascript" src="layout/vendor/bootstrap.js"></script>
    <script type="text/javascript" src="layout/1.js"></script>
    <script type="text/javascript" src="layout/2.js"></script>

    <link rel="stylesheet" href="layout/vendor/bootstrap.css">
    <link rel="stylesheet" href="layout/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>
<body >
    <div class="top1"><!-- top1 -->
    <div class="fa fa-bars nut"><a href="#"></a></div>
    <div class="menu">
        <ul class="list-group">
            <h1>Chào <?php echo $_SESSION['username']; ?> </h1>
            <li class="list-group-item"><a href="#" class="nut4">Trang chủ</a></li>
            <li class="list-group-item" ><a href="index2.php?controller=home2" class="nut1">Danh Sách Các Nhân Viên</a></li>
            <li class="list-group-item" ><a href="#" class="nut3">Liên Hệ</a></li>
            <li class="list-group-item" ><a href="index2.php?controller=birthday2" class="nutsinhnhat">Xem Các Sinh Nhật Sắp tới</a></li>
            <li class="list-group-item" ><a href="index2.php?act=logout">Thoát</a></li>
        </ul>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center header">
                    <h2 style="color:red">Xin Chào</h2>
                    <h4 style="color:red">Chào mừng bạn đến với trang của nhân viên</h4>
                    <a href="" class="nut1 btn btn-default">Danh Sách Các Nhân Viên</a>
                </div>
            </div>
        </div>
    </div><!-- end top 1 -->
    <!-- danh sach cac nhan vien -->
    <div class="top2"><!-- top2 -->
        <?php if (file_exists($controller)){
            include $controller;
        } 
        ?>
    </div><!-- end top2 -->
    <!-- danh sach cac nhan vien -->
    <!-- ban do -->
    <div class="top7 text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.298783880179!2d105.7852393143073!3d20.98065699479602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accdcf7b0bd1%3A0xc1cf5dd00247628a!2zSOG7jWMgVmnhu4duIEPDtG5nIG5naOG7hyBCxrB1IENow61uaCBWaeG7hW4gVGjDtG5n!5e0!3m2!1sen!2s!4v1510571957095" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 style="color: white">Start PHP</h1>
                    <p style="color: white">Lập Trình Web 2017</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>