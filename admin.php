<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="./viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./view/styles/admin.css"></link>
  </head>
</head>
<body onload="ShowThongKe()">
    
        <?php
            include "./view/pages/admin/adminHeader.php";
            require("./util/dataProvider.php");
            ?>

    <div class=container-all>
            <?php
            include "./view/pages/admin/sidebar.php";
             ?>

    <div id="main-content" class="container allContent-section py-4" >

    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="./view/pages/admin/assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./view/pages/admin/assets/js/script.js"></script>
</body>
 
</html>