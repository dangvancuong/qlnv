 <div class="container admin">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h1>Danh Sách Các Thành Viên Và Admin</h1>
                </div>
                <?php 
                    foreach ($arr as $key => $value) {
                        # code...
                 ?>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="thumbnail">
                        <div>
                        <?php 
                        if(file_exists("../public/upload/staff/".$value["anh"]))
                        {
                     ?>
                    <img src="<?php echo "../public/upload/staff/".$value["anh"]; ?>" style="width:100%;height:200px">
                    <?php } ?>
                        </div>
                        <div class="caption">
                            <h3>Họ Và Tên: <?php echo $value["hoten"]; ?></h3>
                            <p>
                                Chức Vụ: <?php echo $value["phanquyen"]==1?"Admin":"Nhân Viên"; ?>
                            </p>
                            <p>
                                SĐT: <?php echo $value["sdt"]; ?>
                            </p>
                            <p>
                                Mô Tả: <?php echo $value["mota"]; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
<div class="container">
    <div class="row">
        <style type="text/css">
                .pagination{padding: 0px; margin:0px;}
            </style>
            <ul class="pagination">
            <?php 
                for($i = 1; $i<=$page; $i++){
             ?>
                <li>
                <a href="index2.php?controller=home2&p=<?php echo $i; ?>" class="nutsinhnhat"><?php echo $i; ?></a></li>
            <?php } ?>
            </ul>
    </div>
</div>