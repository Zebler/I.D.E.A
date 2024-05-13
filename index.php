<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/view/styles/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header Section Starts -->
    <div class="container" id="header-section">
      <header class="py-3 mb-3 border-bottom">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid gap-5 p-0 d-flex align-items-center ">
            <a href="index.php" class="link-body-emphasis text-decoration-none">
              <img src="/view/assets/img/logo.png" alt="" width="100px">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
              <ul class="nav nav-pills gap-2 navigation-links">
                <li class="nav-item"><a href="index.php" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="view/pages/user/shopping.php" class="nav-link">Shopping</a></li>
                <li class="nav-item"><a href="view/pages/user/profile.php"  >My Account</a></li>
                <li class="nav-item"><a href="view/pages/user/cart.php"  >Cart</a></li>
                <li class="nav-item"><a href="view/pages/user/checkout.php" class="nav-link">Checkout</a></li>
              </ul>
    
              <ul class="nav nav-pills navigation-icons">
                <li class="nav-item"><a href="cart.php" class="nav-link">
                    <i class="bi bi-bag" style="font-size: 16px;"></i>
                </a></li>
                <li class="nav-item"><a href="favourite.php" class="nav-link">
                    <i class="bi bi-heart" style="font-size: 16px;"></i>
                </a></li>
                <li class="nav-item"><a href="profile.php" class="nav-link">
                    <i class="bi bi-person" style="font-size: 16px;"></i>
                </a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
    </div>
    <!-- Header Section Ends -->  


    <!-- Heroes Section Starts -->
    <?php include 'view/pages/user/heroes.php'?>
    <!-- Heroes Section Ends -->


    <!-- Popular Products Section Starts -->
    <?php include 'view/pages/user/popular.php'?>
    <!-- Popular Products Section Ends -->


    <!-- Rooms Section Starts -->
    <?php include 'view/pages/user/room.php' ?>
    <!-- Rooms Section Ends -->


    <!-- About Us Section Starts -->
    <!-- Testimonial 1 - Bootstrap Brain Component -->
    <?php include 'view/pages/user/aboutus.php' ?>
    <!-- About Us Section Ends -->


    <!-- Featured Section Starts -->
   <?php include 'view/pages/user/featured.php' ?>
    <!-- Featured Section Ends -->


    <!-- Footer Section Starts -->
  <?php include 'view/pages/user/footer.php' ?>
    <!-- Footer Section Ends -->
</body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
<script type="text/javascript" src="./view/pages/user/js/ajaxuser.js"></script>
