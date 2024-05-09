<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div >

<h2>Edit Người Dùng</h4>

<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
<div class="form-group">
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
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
  </form>
    </div>