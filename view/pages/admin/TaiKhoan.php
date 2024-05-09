<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div >
  <h2>Tài Khoản </h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Mã người dùng</th>
        <th class="text-center">Username</th>
        <th class="text-center">Mật khẩu</th>
        <th class="text-center">Ngày tạo</th>
        <th class="text-center">Vai trò</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php

      $sql="SELECT * from taikhoan";
      $result=$dp-> excuteQuery($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row["idnguoidung"]?></td>
      <td><?=$row["username"]?></td>      
      <td><?=$row["password"]?></td>    
      <td><?=$row["ngaytao"]?></td>
      <td><?=$row["vaitro"]?></td>
      <td><button class="btn btn-primary" style="height:40px" onclick="editTaiKhoan('<?=$row['username']?>')">Edit</button></td>
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
          <h4 class="modal-title">New Tài Khoản</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
         
          <div class="form-group">
              <label>Mã người dùng:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
          
                  $sql="SELECT * from nguoidung";
                  $result = $dp-> excuteQuery($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idnguoidung']."'>".$row['idnguoidung'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
    <div class="form-group">
      <label for="desc">Username:</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group">
      <label for="desc">Password:</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group">
      <label for="desc">Ngày tạo:</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group">
              <label>Vai trò:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php

                  $sql="SELECT * from vaitro";
                  $result = $dp-> excuteQuery($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['maVaiTro']."'>".$row['maVaiTro'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Item</button>
            </div>

  
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>

  
</div>