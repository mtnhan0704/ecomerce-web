<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>MTNhan Beauty</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="/images/logo-black-ad.png"
                            alt="#" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Trang chủ <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('products') }}">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('show_cart') }}">Giỏ hàng</a>
                            </li>
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                        <x-app-layout>

                                        </x-app-layout>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="btn btn-praimary" id="longincss" href="{{ route('login') }}">Đăng nhập</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-success" href="{{ route('register') }}">Đăng ký</a>
                                    </li>
                                @endauth
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <div class="container">
            <div class="box">
                <div class="option_container1">
                    <div class="img-box">
                        <img src="/product/{{ $product->image }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5 style="color: black">
                            {{ $product->title }}
                        </h5>
                        <br>
                        <h6 style="color: black; font-weight: bold;">
                            {{ number_format($product->price) }} VNĐ
                        </h6>
                        <br>
                        <h6 style="font-style:italic; opacity: 90%">{{ $product->description }}</h6>
                        <br>
                        <h6>Số lượng: {{ $product->quantity }}</h6>
                        <br>
                        <form action="{{ url('add_cart', $product->id) }}" method="Post">
                            @csrf
                            <div class="detail-box">
                                <div class="col-md-1">
                                    <input type="number" name="quantity" value="1" min="1"
                                        style="width: 100px">
                                    <input type="submit" value="Thêm vào giỏ">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="full">
                                <div class="logo_footer">
                                    <a href="#"><img width="210" src="/images/logo-black-ad.png"
                                            alt="#" /></a>
                                </div>
                                <div class="information_f">
                                    <p><strong>Địa chỉ: </strong>14 Đường 28, Bình Trưng Tây, Q2, HCM</p>
                                    <p><strong>Điện thoại: </strong>085 666 44 78</p>
                                    <p><strong>Email: </strong>mtnbeauty.site@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="widget_menu">
                                                <h3>Menu</h3>
                                                <ul>
                                                    <li><a href="#">Home</a></li>
                                                    <li><a href="#">About</a></li>
                                                    <li><a href="#">Services</a></li>
                                                    <li><a href="#">Testimonial</a></li>
                                                    <li><a href="#">Blog</a></li>
                                                    <li><a href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="widget_menu">
                                                <h3>Account</h3>
                                                <ul>
                                                    <li><a href="#">Account</a></li>
                                                    <li><a href="#">Checkout</a></li>
                                                    <li><a href="#">Login</a></li>
                                                    <li><a href="#">Register</a></li>
                                                    <li><a href="#">Shopping</a></li>
                                                    <li><a href="#">Widget</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="widget_menu">
                                        <h3>Google Map</h3>
                                        <div class="span6">
                                            <div id="map" style="width: 100%; height: 170px"></div>
                                            <script>
                                                function initMap() {
                                                    var location = {
                                                        lat: 10.7720842,
                                                        lng: 106.6577867
                                                    };
                                                    var map = new google.maps.Map(document
                                                        .getElementById('map'), {
                                                            zoom: 15,
                                                            center: location
                                                        });
                                                    var marker = new google.maps.Marker({
                                                        position: location,
                                                        map: map
                                                    });
                                                }
                                            </script>
                                            <script async defer
                                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAZPjM4XSmqXd3L5HbCjHKkKIyDjJ43mM&callback=initMap"></script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="cpy_">
                <p class="mx-auto">© 2023 All Rights Reserved By <a href="http://mtnhan.tech/">MTNhan</a><br></p>
            </div>
            <!-- jQery -->
            <script src="home/js/jquery-3.4.1.min.js"></script>
            <!-- popper js -->
            <script src="home/js/popper.min.js"></script>
            <!-- bootstrap js -->
            <script src="home/js/bootstrap.js"></script>
            <!-- custom js -->
            <script src="home/js/custom.js"></script>

</body>

</html>
