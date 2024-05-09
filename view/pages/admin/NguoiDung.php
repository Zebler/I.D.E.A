<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div >
  <h2>Người Dùng </h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Mã Người Dùng</th>
        <th class="text-center">Họ tên</th>
        <th class="text-center">SĐT</th>
        <th class="text-center">Địa chỉ</th>
        <th class="text-center">Email</th>
        <th class="text-center">Trạng thái</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php

      $sql="SELECT * from nguoidung";
      $result=$dp-> excuteQuery($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row["idnguoidung"]?></td>
      <td><?=$row["hoten"]?></td>      
      <td><?=$row["sdt"]?></td>   
      <td><?=$row["diachi"]?></td>     
      <td><?=$row["email"]?></td>   
      <td><?=$row["trangthai"]?></td>  
      <td><button class="btn btn-primary" style="height:40px" onclick="editNguoiDung('<?=$row['idnguoidung']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" >Delete</button></td>
      </tr>
      <?php
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Product
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Người Dùng</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
          <div class="form-group">
      <label for="desc">Mã Người Dùng:</label>
      <input type="text" class="form-control"  >
      
    </div>
    <div class="form-group">
      <label for="desc">Họ Tên</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group">
      <label for="desc">SĐT:</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group">
      <label for="desc">Địa chỉ:</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group">
      <label for="desc">Email:</label>
      <input type="text" class="form-control"  >
      <div class="form-group">
      <label for="desc">Trạng thái:</label>
      <input type="text" class="form-control"  >
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
   