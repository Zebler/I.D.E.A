<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div >
<td><button class="btn btn-danger" style="height:40px" onclick="ShowSanPham()">Back</button></td>
<h2>Edit Sản Phẩm</h4>

<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
<div class="form-group">
              <label for="name">Mã sản phẩm:</label>
              <input type="text" class="form-control" id="p_name"  disabled>
            </div>
            <div class="form-group">
              <label>Mã mẫu:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
          
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
              <label>Mã phòng:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
          
                  $sql="SELECT * from phong";
                  $result = $dp-> excuteQuery($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idphong']."'>".$row['idphong'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Mã loại:</label>
              <select id="category" >
                <option disabled selected>Chọn</option>
                <?php
          
                  $sql="SELECT * from loai";
                  $result = $dp-> excuteQuery($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idloai']."'>".$row['idloai'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="name">Tên sản phẩm:</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <label for="name">Giá:</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <label for="name">Mô tả:</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <label for="name">Hình:</label>
              <input type="file" class="fileToUpload form-control"></input>
            </div>
            <div class="form-group">
              <label for="name">Trạng thái:</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
  </form>
    </div>