
<?php
require("../../../util/dataProvider.php");
session_start();
$dp = new DataProvider();
?>
<div>
<div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-th-large  mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Tổng Số Sản Phẩm</h4>
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from sanpham";
                        $result=$dp->excuteQuery($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Tổng Số Phòng</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * from phong";
                       $result=$dp-> excuteQuery($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="card">
                    <i class="fa fa-users mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Tổng Số Người Dùng</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * from nguoidung";
                       $result=$dp-> excuteQuery($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Tổng Số Hóa Đơn</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * from hoadon";
                       $result=$dp-> excuteQuery($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
        </div>
</div>