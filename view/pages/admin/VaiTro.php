<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div >
  <h2>Vai Trò </h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Mã Vai Trò</th>
        <th class="text-center">Tên vai trò</th>
        <th class="text-center">Mô tả</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php

      $sql="SELECT * from vaitro";
      $result=$dp-> excuteQuery($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row["idvaitro"]?></td>
      <td><?=$row["tenvaitro"]?></td>      
      <td><?=$row["mota"]?></td>    
      <td><button class="btn btn-primary" style="height:40px" onclick="editVaiTro('<?=$row['idvaitro']?>')">Edit</button></td>
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
          <h4 class="modal-title">New Vai Trò</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
         
            <div class="form-group">
      <label for="desc">Mã Vai Trò:</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group">
      <label for="desc">Tên vai trò:</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group">
      <label for="desc">Mô tả:</label>
      <input type="text" class="form-control"  >
    </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Item</button>
            </div>
          </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>