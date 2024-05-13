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
<?php
require("../../../util/dataProvider.php");
$dp = new DataProvider();
session_start();
$userID = $_SESSION['$userID'];
$sql1 = "SELECT giohang.soluong as slgh, sanpham.* FROM giohang join sanpham on (giohang.idsanpham = sanpham.idsanpham and giohang.idmau = sanpham.idsanpham) 
          where idnguoidung = '" . $userID . "'";
$result1 = $dp->excuteQuery($sql1);
$sanpham = array();
if ($result1->num_rows > 0) {
  while ($row = $result1->fetch_assoc()) {
      array_push($album, $row);
  }
}
$sql2 = "select diaChi from nguoiDung where idnguoidung='" . $userID . "'";
$result2 = $dp->excuteQuery($sql2);
$address = $result2->fetch_assoc()['diachi'];
?>  
?>
    <!-- Header Section Starts -->
    <?php
        include'header.php'
    ?>
    <!-- Header Section Ends -->  


    <!-- Cart Section Starts -->
    <div class="container border-bottom py-5" id="cart-section">
        <div class="row g-5">
            <div class="col-md-4 col-lg-3 order-md-last">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span>Summary</span>
                <span class="badge bg-warning rounded-pill">3</span>
              </h4>
              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between">
                  <strong>Total (USD)</strong>
                  <strong>$20</strong>
                </li>
              </ul>
              <a href="checkout.php" class="w-100 btn btn-warning btn-md" role="button">Proceed to checkout</a>
            </div>
            <div class="col-md-8 col-lg-9">
              <h4 class="mb-3">Your cart</h4>

              <hr class="my-4">

                <div class="row mb-4 d-flex flex-wrap align-items-center">
                <div class="col-2">
                    <a href="product-detail.php">
                      <img
                    src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
                    class="img-fluid rounded-3" alt="Cotton T-shirt" style="overflow: hidden; width: 100px;">
                    </a>
                </div>
                <div class="col-3 text-break">
                    <h6 class="text-muted"><a href="product-detail.php" class="text-decoration-none text-black nav-link px-0">REVSKÄR</a></h6>
                    <h6 class="text-black mb-0">$ 199</h6>
                </div>
                <div class="col-3 d-flex">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="bi bi-dash"></i>
                    </button>

                    <input id="form1" min="0" name="quantity" value="1" type="number"
                    class="form-control" min="1" style="width: 52px;"/>

                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="bi bi-plus"></i>
                    </button>
                </div>
                <div class="col-3">
                    <h6 class="mb-0">$ 199</h6>
                </div>
                <div class="col-1 text-end">
                    <a href="#!" class="text-muted"><i class="bi bi-x-lg"></i></a>
                </div>
                </div>

                <hr class="my-4">

                <div class="row mb-4 d-flex flex-wrap align-items-center">
                  <div class="col-2">
                      <a href="product-detail.php">
                      <a href="product-detail.php">
                        <img
                      src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
                      class="img-fluid rounded-3" alt="Cotton T-shirt" style="overflow: hidden; width: 100px;">
                      </a>
                  </div>
                  <div class="col-3 text-break">
                      <h6 class="text-muted"><a href="product-detail.php" class="text-decoration-none text-black nav-link px-0">REVSKÄR</a></h6>
                      <h6 class="text-black mb-0">$ 199</h6>
                  </div>
                  <div class="col-3 d-flex">
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="bi bi-dash"></i>
                      </button>
  
                      <input id="form1" min="0" name="quantity" value="1" type="number"
                      class="form-control" min="1" style="width: 52px;"/>
  
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="bi bi-plus"></i>
                      </button>
                  </div>
                  <div class="col-3">
                      <h6 class="mb-0">$ 199</h6>
                  </div>
                  <div class="col-1 text-end">
                      <a href="#!" class="text-muted"><i class="bi bi-x-lg"></i></a>
                  </div>
                  </div>
                <hr class="my-4">

                <div class="row mb-4 d-flex flex-wrap align-items-center">
                  <div class="col-2">
                      <a href="product-detail.php">
                        <img
                      src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
                      class="img-fluid rounded-3" alt="Cotton T-shirt" style="overflow: hidden; width: 100px;">
                      </a>
                  </div>
                  <div class="col-3 text-break">
                      <h6 class="text-muted"><a href="product-detail.php" class="text-decoration-none text-black nav-link px-0">REVSKÄR</a></h6>
                      <h6 class="text-black mb-0">$ 199</h6>
                  </div>
                  <div class="col-3 d-flex">
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="bi bi-dash"></i>
                      </button>
  
                      <input id="form1" min="0" name="quantity" value="1" type="number"
                      class="form-control" min="1" style="width: 52px;"/>
  
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="bi bi-plus"></i>
                      </button>
                  </div>
                  <div class="col-3">
                      <h6 class="mb-0">$ 199</h6>
                  </div>
                  <div class="col-1 text-end">
                      <a href="#!" class="text-muted"><i class="bi bi-x-lg"></i></a>
                  </div>
                  </div>
            </div>
          </div>
    </div>
    <!-- Cart Section Ends -->


    <!-- Footer Section Starts -->
    <div class="container" id="footer-section">
      <footer class="pt-5 border-top">
        <div class="row">
          <div class="col-6 col-md-3 col-lg-2 mb-3">
            <h5>Sections</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="index.php#heroes-section" class="nav-link p-0 text-body-secondary">Heroes</a></li>
              <li class="nav-item mb-2"><a href="index.php#popular-products-section" class="nav-link p-0 text-body-secondary">Popular products</a></li>
              <li class="nav-item mb-2"><a href="index.php#rooms-section" class="nav-link p-0 text-body-secondary">Rooms</a></li>
              <li class="nav-item mb-2"><a href="index.php#about-us-section" class="nav-link p-0 text-body-secondary">About us</a></li>
              <li class="nav-item mb-2"><a href="index.php#featured-section" class="nav-link p-0 text-body-secondary">Featured</a></li>
            </ul>
          </div>
    
          <div class="col-6 col-md-3 col-lg-2 mb-3">
            <h5>Infomations</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Privacy policy</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Return policy</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Terms and conditions</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Customer service</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            </ul>
          </div>
    
          <div class="col-12 col-md-6 col-lg-4 mb-3">
            <h5>Contact</h5>
            <ul class="nav flex-column">
              <li class="nav-item d-flex"><i class="bi bi-house"></i><span class="mx-1 mb-2">273 An Duong Vuong St, District 5, Ho Chi Minh City</span></li>
              <li class="nav-item d-flex"><i class="bi bi-envelope-at"></i><span class="mx-1 mb-2">team19sgu@gmail.com</span></li>
              <li class="nav-item d-flex"><i class="bi bi-telephone"></i><span class="mx-1">+01 234 567 89</span></li>
            </ul>
          </div>
    
          <div class="col-12 col-lg-4 mb-3">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of what's new and exciting from us.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-warning" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
    
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 mt-4 border-top">
          <p>© 2024 Team 19 SGU, Inc. All rights reserved.</p>
        </div>
      </footer>
  </div>
  <!-- Footer Section Ends -->
</body>
