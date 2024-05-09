
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header Section Starts -->
    <div class="container" id="header-section">
      <header class="py-3 mb-3 border-bottom">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid gap-5 p-0 d-flex align-items-center ">
            <a href="index.php" class="link-body-emphasis text-decoration-none">
              <img src="assets/img/logo.png" alt="" width="100px">
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


    <!-- Profile Section Starts -->
    <div class="container">
        <div class="row g-5">
          <div class="col-4 d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                  Profile
                </a>
              </li>
              <li>
                <a href="#" class="nav-link active" aria-current="page">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                  Edit profile
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                  Orders
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                  Favourites
                </a>
              </li>
            </ul>
            <hr>

            <button type="button" class="btn btn-outline-danger">
              <i class="bi bi-box-arrow-left" style="font-size: 16px;"></i>
              Sign out
            </button>
          </div>
            <div class="col-8 mx-auto">
              <h4 class="mb-3">Edit Profile</h4>
              <form class="needs-validation" novalidate="">
                <div class="row g-3">
                  <div class="col-md-6">
                    <label for="firstName" class="form-label">Fullname</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter your fullname" value="" required="">
                    <div class="invalid-feedback">
                      Valid name is required.
                    </div>
                  </div>
      
                  <div class="col-md-6">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="phonenumber" class="form-label">Phone number </label>
                    <input type="text" class="form-control" id="phonenumber" placeholder="0123456789">
                    <div class="invalid-feedback">
                      Please enter a valid phone number for contact about shipping status.
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" class="form-control" id="email" placeholder="example@email.com">
                  </div>
      
                  <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                  </div>
                </div>

                <hr class="my-4">
      
                <button class="w-100 btn btn-primary btn-md" type="submit">Save changes</button>
              </form>
            </div>
          </div>
    </div>
    <!-- Profile Section Ends -->


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
