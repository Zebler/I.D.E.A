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
    <?php
        include'header.php'
    ?>
    <!-- Header Section Ends -->  


    <!-- Product Detail Section Starts -->
    <div class="container p-3" id="product-detail-section">
      <div class="row g-5 justify-content-between">
        <div class="col-md-6 col-lg-4 d-flex justify-content-center">
          <img src="/view/assets/img/products/revskaer-3-seat-conversation-set-outdoor-anthracite-froesoen-duvholmen-dark-gray__1240171_pe919187_s5.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" style="max-width: 300px;">
        </div>
        <div class="col-md-6 col-lg-3">
          <h4 class="product-name">REVSKÄR</h4>
          <div class="informations">
            <h4 class="text-success fw-bold">$ 199</h4>
            <p><strong>Type:</strong> Sofa</p>
            <p><strong>Room:</strong> Living room</p>
            <strong>Colors:</strong>
            <div class="colors mt-2">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <label>
                    <input type="radio" name="color" value="black" class="d-none" checked>
                    <span class="swatch" style="background-color:#222"></span>
                  </label>
                </li>
                <li class="list-inline-item">
                  <label>
                    <input type="radio" name="color" value="white" class="d-none">
                    <span class="swatch" style="background-color:#fff"></span>
                  </label>
                </li>
                <li class="list-inline-item">
                  <label>
                    <input type="radio" name="color" value="red" class="d-none">
                    <span class="swatch" style="background-color:red"></span>
                  </label>
                </li>
              </ul>
            </div> 
          </div>
          <div class="d-flex mt-3">
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
          <div class="d-flex gap-1 justify-content-md-start mt-3">
            <button class="add-to-cart-btn btn btn-warning">Add to cart</button>
            <button class="favourite-btn btn btn-outline-danger px-3"><i class="bi bi-heart-fill" style="font-size: 16px;"></i></button>
          </div>
        </div>
        <div class="col-lg-5">
          <h5 class="pb-3 border-bottom">Product Description</h5>
          <p class="product-description">Relax and entertain your guests in this comfy lounge set. It comes with a sofa for 2, a coffee table and a chaise longue with an integrated side table where you can place things you want to keep close.</p>
        </div>
      </div>
    </div>
    <!-- Product Detail Section Ends -->


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
