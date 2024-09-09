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
    <!---Navbar section---->
    <nav class="top-nav" top-fixed id="home">
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
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Food Point</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!----<span class="navbar-toggler-icon"></span>-->
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.html">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="about.html">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="reservation.html">Reservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contect.html">Contact us</a>
                        </li>
                    </ul>
                    <div class="right">
                        <ul>
                            <li class="nav-item">
                         <a class="nav-link" href="login.html"  ><button id="submit" class="Btn">login</button></a></li>
                            </ul>
                            </div>
                    </div>
                </div>
        </nav>
    </div>
   
    <!-----Reservation section---->

    <section class="reservation">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center pb-5">
                    <h2>Book Table</h2>
                    <p class="intro">Book Table come and Enjoy delicious Food</p>
                </div>
                <div class="col-8 form">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="row g-3">
                                <div class="col-md-6 mb-4">
                                    <input type="text" class="form-control" placeholder="Your Name*" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="email" class="form-control" placeholder="Your email*" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="number" class="form-control" placeholder="Number of person" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="number" class="form-control" placeholder="Your number" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="time" class="form-control" placeholder="Whats time" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="date" class="form-control" placeholder="What is the date.." required>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="text-center pb-5">
                                        <button type="submit" class="btn Btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----footer section--->
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
                        <li><a href="#">Menu Category</a></li>
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
            <p>Copyright<a href="#">@2024FoodPoint</a> All Right Reserved</p>
        </div>
    </section>
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