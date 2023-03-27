<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="images/logo-black-ad.png" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('products') }}">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('show_cart') }}">Giỏ hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('show_order') }}">Order</a>
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
