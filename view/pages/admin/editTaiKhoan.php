<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div >

<h2>Edit Tài Khoản</h4>

<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
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
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
  </form>
    </div>