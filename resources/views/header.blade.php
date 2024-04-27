<div class="header scrolling" id="myHeader">
    <div class="grid wide">
        <div class="header__top">
            <div class="navbar-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <a href="{{ route('index') }}" class="header__logo">
                <img src="{{asset('img/logomoi.png')}}" alt="" style="width: 130px; height: 130px;">
            </a>

            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="query" placeholder="Tìm kiếm sản phẩm..." required>
                <button type="submit">Tìm kiếm</button>
            </form>

            @auth
            <p style="font-size: 18px; margin-left: 170px;">{{ auth()->user()->name }}!</p>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" style="font-size: 16px; margin-left: 20px; background: black; color:white;">Đăng xuất</button>
            </form>
            @else

            <a href="{{ route('login') }}" style="font-size: 18px;">Đăng nhập |</a>
            <a href="{{ route('register')}}" style="font-size: 18px;">Đăng ký</a>
            @endauth

            <!-- Cart -->
            <div class="header__cart have" href="#">
                <i class="fas fa-shopping-basket"></i>
               
                <div class="header__cart-wrap">
                    <a href="{{url('cart')}}" class="btn btn--default cart-btn">Xem giỏ hàng</a>
                    <a href="{{url('pay')}}" class="btn btn--default cart-btn orange">Thanh toán</a </div>
                </div>
            </div>
            @if(auth()->user()->role === 'admin')
            <!-- Hiển thị biểu tượng cài đặt cho admin -->
            <a href="{{ route('admin.dashboard') }}">
                <i class="fas fa-cogs" style="font-size: 26px; color:aliceblue"></i> <!-- Sử dụng Font Awesome icon, thay thế bằng icon setting của bạn -->
            </a>
            @else
            <a href="{{ route('user.dashboard') }}">
            <!-- Hiển thị biểu tượng mặc định cho user -->
            <i class="fas fa-user" style="font-size: 26px; color:aliceblue"></i> <!-- Sử dụng Font Awesome icon, thay thế bằng icon của bạn -->
            </a>
            @endif
        </div>
        <!-- Menu -->
        <div class="header__nav" style="background-color: #00ab6d;">
            <ul class="header__nav-list">
                <li class="header__nav-item nav__search">
                    <div class="nav__search-wrap">
                        <input class="nav__search-input" type="text" name="" id="" placeholder="Tìm sản phẩm...">
                    </div>
                    <div class="nav__search-btn">
                        <i class="fas fa-search"></i>
                    </div>
                </li>
                <li class="header__nav-item authen-form">
                    <a href="#" class="header__nav-link">Tài Khoản</a>
                    <ul class="sub-nav">
                        <li class="sub-nav__item">
                            <a href="#my-Login" class="sub-nav__link">Đăng Nhập</a>
                        </li>
                        <li class="sub-nav__item">
                            <a href="#my-Register" class="sub-nav__link">Đăng Kí</a>
                        </li>
                    </ul>
                </li>
                <li class="header__nav-item index">
                    <a href="{{ route('index') }}" class="header__nav-link">Trang chủ</a>
                </li>
                <li class="header__nav-item">
                    <a href="{{ route('about') }}" class="header__nav-link">Giới Thiệu</a>
                </li>
                <li class="header__nav-item">
                    <a href="{{url('listProduct')}}" class="header__nav-link">Sản Phẩm</a>
                    <div class="sub-nav-wrap grid wide">
                        <ul class="sub-nav">
                            @if(isset($cate) && count($cate) > 0)
                            @foreach($cate as $row)
                            <li class="sub-nav__item">
                                <a href="{{ url('listProduct') }}" class="sub-nav__link heading">{{ $row->ten }}</a>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </li>
                <li class="header__nav-item">
                    <a href="{{url('news')}}" class="header__nav-link">Tin Tức</a>
                </li>
                <li class="header__nav-item">
                    <a href="{{url('contact')}}" class="header__nav-link">Liên Hệ</a>
                </li>
            </ul>
        </div>
    </div>