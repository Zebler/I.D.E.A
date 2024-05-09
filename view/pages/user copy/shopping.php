
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/view/styles/style.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
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
                <li class="nav-item"><a href="index.php" class="nav-link" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="shopping.php" class="nav-link">Shopping</a></li>
                <li class="nav-item"><a href="profile.php" class="nav-link">My Account</a></li>
                <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
                <li class="nav-item"><a href="checkout.php" class="nav-link">Checkout</a></li>
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


    <!-- Shopping Section Starts -->
    <div class="container">
      <!-- Thanh tìm kiếm -->
      <form class="py-2 mx-auto d-flex gap-2" style="max-width: 700px;">
        <input class="search-bar form-control" type="text" placeholder="What are you looking for?" aria-label="Search">
        <button class="search-btn btn btn-outline-success" type="submit">Search</button>
      </form>

      <!-- Nút lọc sản phẩm -->
      <div class="d-flex justify-content-between">
        <button class="btn btn-outline-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" type="button" aria-controls="offcanvasExample">
          <i class="col bi bi-filter mr-4"></i> Filter
        </button>
  
        <div class="dropdown">
          <span class="mx-2">Sort by</span>
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
            Default
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Price ascending</a></li>
            <li><a class="dropdown-item" href="#">Price descending</a></li>
          </ul>
        </div>
      </div>
      
      <!-- Menu lọc sản phẩm ẩn -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Search filter</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <form>
            <div class="product-type-filter container pb-3 border-bottom">
              <h5 class="mb-3 fw-normal">Product type</h5>
              <div class="form-check my-3">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">All</label>
              </div>
              <div class="d-flex justify-content-start gap-3 flex-wrap">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Table</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Bed</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Chair</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Sofa</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Closet</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Jar</label>
                </div>
              </div>
            </div>

            <div class="rooms-filter container py-3 border-bottom">
              <h5 class="mb-3 fw-normal">Rooms</h5>
              <div class="form-check my-3">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">All</label>
              </div>
              <div class="d-flex justify-content-start gap-3 flex-wrap">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Living room</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Bedroom</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Bathroom</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Kitchen</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                  <label class="form-check-label">Home office</label>
                </div>
              </div>
            </div>

            <div class="d-flex fixed-bottom justify-content-start gap-3 m-3">
              <button class="btn btn-warning" type="submit">Search</button>
              <button class="btn btn-outline-secondary" type="submit">Reset</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Danh sách sản phẩm -->
      <div class=" product-cards row g-3 justify-content-start pt-3">
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-heart pt-2 px-2"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
              class="product-img card-img-top img-fluid"
              alt=""
              />
            </a>
            <div class="card-body p-2">
              <div class="text-center text-break">
                  <h6 class="card-title"><a class="product-name" href="product-detail.php">REVSKÄR</a></h6>
              </div>
              <div class="d-flex justify-content-center">
                <strong class="text-success product-price">$199</strong>
              </div>
              <div class="d-flex justify-content-between font-weight-bold mt-3">
                <button class="w-100 btn btn-warning add-to-cart-btn">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-heart pt-2 px-2"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
              class="product-img card-img-top img-fluid"
              alt=""
              />
            </a>
            <div class="card-body p-2">
              <div class="text-center text-break">
                  <h6 class="card-title"><a class="product-name" href="product-detail.php">REVSKÄR</a></h6>
              </div>
              <div class="d-flex justify-content-center">
                <strong class="text-success product-price">$199</strong>
              </div>
              <div class="d-flex justify-content-between font-weight-bold mt-3">
                <button class="w-100 btn btn-warning add-to-cart-btn">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-heart pt-2 px-2"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
              class="product-img card-img-top img-fluid"
              alt=""
              />
            </a>
            <div class="card-body p-2">
              <div class="text-center text-break">
                  <h6 class="card-title"><a class="product-name" href="product-detail.php">REVSKÄR</a></h6>
              </div>
              <div class="d-flex justify-content-center">
                <strong class="text-success product-price">$199</strong>
              </div>
              <div class="d-flex justify-content-between font-weight-bold mt-3">
                <button class="w-100 btn btn-warning add-to-cart-btn">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-heart pt-2 px-2"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
              class="product-img card-img-top img-fluid"
              alt=""
              />
            </a>
            <div class="card-body p-2">
              <div class="text-center text-break">
                  <h6 class="card-title"><a class="product-name" href="product-detail.php">REVSKÄR</a></h6>
              </div>
              <div class="d-flex justify-content-center">
                <strong class="text-success product-price">$199</strong>
              </div>
              <div class="d-flex justify-content-between font-weight-bold mt-3">
                <button class="w-100 btn btn-warning add-to-cart-btn">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-heart pt-2 px-2"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
              class="product-img card-img-top img-fluid"
              alt=""
              />
            </a>
            <div class="card-body p-2">
              <div class="text-center text-break">
                  <h6 class="card-title"><a class="product-name" href="product-detail.php">REVSKÄR</a></h6>
              </div>
              <div class="d-flex justify-content-center">
                <strong class="text-success product-price">$199</strong>
              </div>
              <div class="d-flex justify-content-between font-weight-bold mt-3">
                <button class="w-100 btn btn-warning add-to-cart-btn">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-md-3 col-lg-2">        
          <div class="product-card card text-black">
            <i class="bi bi-heart pt-2 px-2"></i>
            <a href="product-detail.php" class="link-body-emphasis text-decoration-none">
              <img
              src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png"
              class="product-img card-img-top img-fluid"
              alt=""
              />
            </a>
            <div class="card-body p-2">
              <div class="text-center text-break">
                  <h6 class="card-title"><a class="product-name" href="product-detail.php">REVSKÄR</a></h6>
              </div>
              <div class="d-flex justify-content-center">
                <strong class="text-success product-price">$199</strong>
              </div>
              <div class="d-flex justify-content-between font-weight-bold mt-3">
                <button class="w-100 btn btn-warning add-to-cart-btn">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Thanh phân trang -->
      <nav aria-label="..." class="pt-3">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Shopping Section Ends -->


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
