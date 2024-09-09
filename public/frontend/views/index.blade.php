<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Point</title>
  <!---Bootstrap--->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!---Font Awesome CDN---->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!---style.css--->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/Responsive.css">
</head>

<body>
  <!----Nav Bar section---->
  <nav class="top-nav">
    <div class="container">
      <p>
        <i class="fa fa-envelope me-3"></i>
        <span>info@foodpoint.com</span>
      </p>
      <p>
        <i class="fa fa-phone me-3"></i>
        <span>(92) 2567-1234</span>
      </p>
    </div>
  </nav>
  <header>
    <div class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Food Point</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-stream navbar-toggler-icon"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.html">Menu</a>
              </li>
              <!----<li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
              </li>--->
              <li class="nav-item">
                <a class="nav-link" href="about.html">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reservation.html">Reservation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contect.html">Contact us</a>
              </li>
            </ul>
            <div class="right">
              <ul>
                <li class="nav-item">
                  <a class="nav-link" href="login.html"><button id="submit" class="Btn">login</button></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!---Banner section start-->
  <section class="banner_section">
    <div class="container">
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-caption">
              <div class="banner-content">
                <h1>Food Point</h1>
                <h3>Fresh and Testy Food </h3>
                <p class="intro">Come and Enjoy Healthy And testy Food</p>
                <a href="menu.html" class="Btn">Menu</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption">
              <div class="banner-content">
                <h1>Food Point</h1>
                <h3>Fresh and Testy Food Point</h3>
                <p class="intro">Come and Enjoy Healthy And testy Food</p>
                <a href="menu.html" class="Btn">Menu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----About---->
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="row align-item-center py-5">
          <div class="col-lg-6 col-12 mb-4">
            <img src="./images/About/about-1.jpg" alt="" width="100%" height="100%" class="img-fluid">
          </div>
          <div class="col-lg-6 col-12 mb-4">
            <div class="about-detail">
              <h2>Services providing at Food Point!</h2>
              <p> At Food point , we believe in more than just serving great food. We're passionate about
                creating
                unforgettable dining experiences for our guests, where every meal is a journey of
                flavors and every
                visit is a celebration. Nestled in the heart of [City/Area], our restaurant is a haven
                for food
                enthusiasts, where culinary excellence meets warm hospitality.</p>
              <p>At Food point, we believe in more than just serving great food. We're passionate about
                creating
                unforgettable dining experiences for our guests, where every meal is a journey of
                flavors and every
                visit is a celebration. Nestled in the heart of [City/Area], our restaurant is a haven
                for food
                enthusiasts, where culinary excellence meets warm hospitality.
              </p>
              <a href="about.html" class="Btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!---menu---->
  <section class="menu">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-center pb-5">
          <h1>Menu</h1>
          <p class="intro">
            Food Point provide Fresh and Testy Food as your expectation.At Food Point,you can easily
            order your favorite food.</p>
        </div>
        <div class="row">
          <div class="col-md-3 mb-5">
            <div class="card menu-card">
              <div class="menu-img">
                <img src="./images/menu/M1.jpg" class="img-fluid">
              </div>
              <div class="d-flex align-item-center justify-content-between">
                <h3>Pizza</h3>
                <span>RS:1200</span>
              </div>
              <div class="order-detail">
                <a href="menu.html" class="btn Btn">View menu</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <div class="card menu-card">
              <div class="menu-img">
                <img src="./images/menu/M2.jpg" class="img-fluid">
              </div>
              <div class="d-flex align-item-center justify-content-between">
                <h3>Shawarma</h3>
                <span>Rs:300</span>
              </div>
              <div class="order-detail">
                <a href="menu.html" class="btn Btn">View menu</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <div class="card menu-card">
              <div class="menu-img">
                <img src="./images/menu/M3.jpg" class="img-fluid">
              </div>
              <div class="d-flex align-item-center justify-content-between">
                <h3>Fruit chat</h3>
                <span>Rs:400</span>
              </div>
              <div class="order-detail">
                <a href="menu.html" class="btn Btn">View menu</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <div class="card menu-card">
              <div class="menu-img">
                <img src="./images/menu/M5.jpg" class="img-fluid">
              </div>
              <div class="d-flex align-item-center justify-content-between">
                <h3>Ice Cream</h3>
                <span>RS:300</span>
              </div>
              <div class="order-detail">
                <a href="menu.html" class="btn Btn">View menu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----feedback section---->
  <section class="customer">
    <div class="container">
      <div class="row pb-5">
        <div class="col-12 text-center">
          <h2>Customer Feedback</h2>
          <p class="intro">
            Our happy customer Feedback after eating meal at Food point
            Food Point.Food Point is a best way to enjoy Healthy and testy food.</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-8 col-md-10">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="d-sm-flex row">
                  <div class="profile-box col-sm-5">
                    <img src="./images/testimonial/T1.jpg" class="img-fluid">
                  </div>
                  <div class="card col-sm-7">
                    <div class="desc-box">
                      <p class="fst-italic">Not only was Customer Support
                        very fast, but the design is very professional.Will
                        definitely be looking for new menu in the future from this author.</p>
                      <div class="my-4">
                        <h4>Mehwish</h4>
                        <p class="m-0 text-white">Happy Customer</p>
                      </div>
                      <img src="./images/testimonial/qoutes.svg" class="float-end">
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-sm-flex row">
                  <div class="profile-box col-sm-5">
                    <img src="./images/testimonial/T2.jpg" class="img-fluid">
                  </div>
                  <div class="card col-sm-7">
                    <div class="desc-box">
                      <p class="fst-italic">Nice Food Point,I loved the food,value for money & unique taste.
                        I suggest anybody want to try something new then savoury express is the place

                      </p>
                      <div class="my-4">
                        <h4>Zoya</h4>
                        <p class="m-0 text-white">Happy Customer</p>
                      </div>
                      <img src="./images/testimonial/qoutes.svg" class="float-end">
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-sm-flex row">
                  <div class="profile-box col-sm-5">
                    <img src="./images/testimonial/T1.jpg" class="img-fluid">
                  </div>
                  <div class="card col-sm-7">
                    <div class="desc-box">
                      <p class="fst-italic">Nice Food Point,I loved the food,value for money & unique taste.
                        I suggest anybody want to try something new then savoury express is the place.
                      </p>
                      <div class="my-4">
                        <h4>Noor</h4>
                        <p class="m-0 text-white">Happy Customer</p>
                      </div>
                      <img src="./images/testimonial/qoutes.svg" class="float-end">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---Features section start-->
  <section class="feature">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-3 mb-5">
          <div class="card features-box">
            <div class="text-center">
              <div class="features-icon-border">
                <div class="features-icon">
                  <img src="./images/feature-icon/ui-chat.svg">
                </div>
              </div>
              <div class="features-text">
                <h3>20/10 Support</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 mb-5">
          <div class="card features-box">
            <div class="text-center">
              <div class="features-icon-border">
                <div class="features-icon">
                  <img src="./images/feature-icon/wheat.svg">
                </div>
              </div>
              <div class="features-text">
                <h3>Fresh&Healthy</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 mb-5">
          <div class="card features-box">
            <div class="text-center">
              <div class="features-icon-border">
                <div class="features-icon">
                  <img src="./images/feature-icon/lemon.svg">
                </div>
              </div>
              <div class="features-text">
                <h3>From our farm</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 mb-5">
          <div class="card features-box">
            <div class="text-center">
              <div class="features-icon-border">
                <div class="features-icon">
                  <img src="./images/feature-icon/truck-loaded.svg">
                </div>
              </div>
              <div class="features-text">
                <h3>Free Shipping</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----Blog section---->
  <section class="blog">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center pb-5">
          <h2>Blog</h2>
          <p class="intro">
            Welcome to Food point,your ultimate destination for delicious and wholesome
            meals</p>
        </div>
        <div class="col-md-4 mb-4">
          <img src="images/Blog/B1.jpg" class="img-fluid" rounded-3>
          </a>
        </div>
        <div class="col-md-4 mb-4">
          <img src="images/Blog/B2.jpg" class="img-fluid" rounded-3>
          </a>
        </div>
        <div class="col-md-4 mb-4">
          <img src="images/Blog/B3.jpg" class="img-fluid" rounded-3>
          </a>
        </div>
        <div class="col-md-4 mb-4">
          <img src="images/Blog/B4.jpg" class="img-fluid" rounded-3>
          </a>
        </div>
        <div class="col-md-4 mb-4">
          <img src="images/Blog/B5.jpg" class="img-fluid" rounded-3>
          </a>
        </div>
        <div class="col-md-4 mb-4">
          <img src="images/Blog/B6.jpg" class="img-fluid" rounded-3>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!----Footer section---->

  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>Food point:</h5>
          <p>Welcome to Food point,your ultimate destination for delicious and wholesome
            meals.
            Food Point provide Healthy and testy Food as Your Expectation and according to your need......
          </p>
        </div>
        <div class="col-md-3">
          <h5>Contect us:</h5>
          <div class="contact">
            <ul>
              <li><a href="#"><i class="fa fa-home me-3"></i>No. 50,Gujranwala city,pakistan</a></li>
              <li><a href="#"><i class="fa fa-phone me-3"></i>+92 2567 1234</a></li>
              <li><a href="#"><i class="fa fa-envelope me-3"></i>Info@foodpoint.com</a></li>
              <li><a href="#">Payments</li>
              <li><a href="#"><i class="fab fa-cc-visa"></i><i class="fab fa-cc-mastercard"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <h5>About us:</h5>
          <ul>
            <li><a href="#">Services</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">safety Policy</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Quick Links:</h5>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Reservation</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Login</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Follow us</h5>
          <ul class="social d-flex">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab  fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
      </div>
    </div>
    <div class="copyright">
      <p>Copyright<a href="#">@2024FoodPoint</a> All right Reserved</p>
    </div>
  </section>

  <!----JQuery  CDN---->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-----Bootstrap----->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

  <!---Custom JS---->
  <script src="js/main.js"></script>
</body>

</html>