<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div >
  <h2>Chi Tiết Hóa Đơn </h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Mã hóa đơn</th>
        <th class="text-center">Mã sản phẩm</th>
        <th class="text-center">Mã mẫu</th>
        <th class="text-center">Số lượng</th>
        <th class="text-center">Đơn giá</th>
        <th class="text-center">Thành Tiền</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from chitiethoadon";
      $result=$dp-> excuteQuery($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row["idhoadon"]?></td>
      <td><?=$row["idsanpham"]?></td>      
      <td><?=$row["idmau"]?></td>
      <td><?=$row["soluong"]?></td>
      <td><?=$row["dongia"]?></td>
      <td><?=$row["thanhtien"]?></td>
      <td><button class="btn btn-primary" style="height:40px" onclick="editChiTietHoaDon('<?=$row['idhoadon']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" >Delete</button></td>
      </tr>
      <?php
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add 
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Chi tiết hóa đơn</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
          <div class="form-group">
              <label>Mã hóa đơn:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
                include_once "../config/dbconnect.php";
                  $sql="SELECT * from hoadon";
                  $result = $dp-> excuteQuery($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idhoadon']."'>".$row['idhoadon'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Mã sản phẩm:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
                include_once "../config/dbconnect.php";
                  $sql="SELECT * from sanpham";
                  $result = $dp-> excuteQuery($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idsanpham']."'>".$row['idsanpham'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Mã mẫu:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
                include_once "../config/dbconnect.php";
                  $sql="SELECT * from mau";
                  $result = $dp-> excuteQuery($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idmau']."'>".$row['idmau'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="price">Số lượng:</label>
              <input type="number" class="form-control" id="p_price" required>
            </div>
            <div class="form-group">
              <label for="price">Đơn giá:</label>
              <input type="number" class="form-control" id="p_price" required>
            </div>
            <div class="form-group">
              <label for="price">Thành Tiền:</label>
              <input type="number" class="form-control" id="p_price" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Item</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   