<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Template</title>

    <link href="//fonts.googleapis.com/{{url('public')}}/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/{{url('public')}}/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/{{url('public')}}/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">

    <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/all.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/style.css">
</head>
<body>
    <div class="container-fluid">

        <div class="row min-vh-100">
            <div class="col-12">
                <header class="row">
                    <!-- Top Nav -->
                    <div class="col-12 bg-dark py-2 d-md-block d-none">
                        <div class="row">
                            <div class="col-auto me-auto">
                                <ul class="top-nav">
                                    <li>
                                        <a href="tel:+123-456-7890"><i class="fa fa-phone-square me-2"></i>+123-456-7890</a>
                                    </li>
                                    <li>
                                        <a href="mailto:mail@ecom.com"><i class="fa fa-envelope me-2"></i>mail@ecom.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-auto">
                                <ul class="top-nav">
                                    <li>
                                        <a href="register"><i class="fas fa-user-edit me-2"></i>Register</a>
                                    </li>
                                    <li>
                                        <a href="login"><i class="fas fa-sign-in-alt me-2"></i>Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Nav -->

                    <!-- Header -->
                    <div class="col-12 bg-white pt-4">
                        <div class="row">
                            <div class="col-lg-auto">
                                <div class="site-logo text-center text-lg-left">
                                    <a href="index.html">E-Commerce</a>
                                </div>
                            </div>
                            <div class="col-lg-5 mx-auto mt-4 mt-lg-0">
                                <form action="#">
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <input type="search" class="form-control border-dark" placeholder="Search..." required>
                                            <button class="btn btn-outline-dark"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-auto text-center text-lg-left header-item-holder">
                                <a href="#" class="header-item">
                                    <i class="fas fa-heart me-2"></i><span id="header-favorite">0</span>
                                </a>
                                <a href="cart.html" class="header-item">
                                    <i class="fas fa-shopping-bag me-2"></i><span id="header-qty" class="me-3">2</span>
                                    <i class="fas fa-money-bill-wave me-2"></i><span id="header-price">$4,000</span>
                                </a>
                            </div>
                        </div>

                        <!-- Nav -->
                        <div class="row">
                            <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
                                <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="mainNav">
                                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="electronics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electronics</a>
                                            <div class="dropdown-menu" aria-labelledby="electronics">
                                                <a class="dropdown-item" href="category.html">Computers</a>
                                                <a class="dropdown-item" href="category.html">Mobile Phones</a>
                                                <a class="dropdown-item" href="category.html">Television Sets</a>
                                                <a class="dropdown-item" href="category.html">DSLR Cameras</a>
                                                <a class="dropdown-item" href="category.html">Projectors</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="fashion" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fashion</a>
                                            <div class="dropdown-menu" aria-labelledby="fashion">
                                                <a class="dropdown-item" href="category.html">Men's</a>
                                                <a class="dropdown-item" href="category.html">Women's</a>
                                                <a class="dropdown-item" href="category.html">Children's</a>
                                                <a class="dropdown-item" href="category.html">Accessories</a>
                                                <a class="dropdown-item" href="category.html">Footwear</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="books" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Books</a>
                                            <div class="dropdown-menu" aria-labelledby="books">
                                                <a class="dropdown-item" href="category.html">Adventure</a>
                                                <a class="dropdown-item" href="category.html">Horror</a>
                                                <a class="dropdown-item" href="category.html">Romantic</a>
                                                <a class="dropdown-item" href="category.html">Children's</a>
                                                <a class="dropdown-item" href="category.html">Non-Fiction</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Nav -->
                         </div>
                    <!-- Header -->

                </header>
            </div>

            <div class="col-12">
                <!-- Main Content -->
                <main class="row">

                    <!-- Slider -->
                    <div class="col-12 px-0">
                        <div id="slider" class="carousel slide w-100" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#slider" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#slider" data-bs-slide-to="1"></li>
                                <li data-bs-target="#slider" data-bs-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="{{url('public')}}/images/slider-1.jpg" class="slider-img">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url('public')}}/images/slider-2.jpg" class="slider-img">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url('public')}}/images/slider-3.jpg" class="slider-img">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <!-- Slider -->
        </div>
        </div>

    </div>

    <script type="text/javascript" src="{{url('public')}}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/script.js"></script>
</body>
</html>