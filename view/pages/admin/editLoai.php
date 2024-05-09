<?php
   session_start();
   require("../../../util/dataProvider.php");
    $dp=new DataProvider();
?>
<div >
<td><button class="btn btn-danger" style="height:40px" onclick="ShowLoai()">Back</button></td>
<h2>Edit Loại</h4>

<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
    <div class="form-group">
      <label for="name">Mã Loại:</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group">
      <label for="desc">Tên loại:</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
  </form>
    </div>