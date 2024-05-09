<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div >
<td><button class="btn btn-danger" style="height:40px" onclick="ShowSanPham()">Back</button></td>
  <h2>Loại </h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Mã loại</th>
        <th class="text-center">Tên loại</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php

      $sql="SELECT * from loai";
      $result=$dp-> excuteQuery($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row["idloai"]?></td>
      <td><?=$row["tenloai"]?></td>      
      <td><button class="btn btn-primary" style="height:40px" onclick="editLoai('<?=$row['idloai']?>')">Edit</button></td>
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
          <h4 class="modal-title">New Loại</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
            <div class="form-group">
              <label for="name">Mã loại:</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <label for="price">Tên loại:</label>
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
   