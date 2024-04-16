@extends('layout')

@section('main')
<!DOCTYPE html>
<html lang="en">
<!-- https://cocoshop.vn/ -->
<!-- http://mauweb.monamedia.net/vanihome/ -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <!-- Font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon fontanwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Reset css & grid sytem -->
    <link rel="stylesheet" href="css/library.css">
    <!-- Owl Slider css -->
    <link rel="stylesheet" href="{{ asset('owlCarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('owlCarousel/assets/owl.theme.default.min.css')}}">
    <!-- Layout -->
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    <!-- index -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/new.css')}}">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl caroucel Js-->
    <script src="{{ asset('owlCarousel/owl.carousel.min.js')}}"></script>
</head>

<body>
<<<<<<< HEAD
    
=======
    <div class="header scrolling" id="myHeader">
        <div class="grid wide">
            <div class="header__top">
                <div class="navbar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <a href="{{ asset('index')}}" class="header__logo">
                    <img src="img/logomoi.png" alt="">
                </a>
                <div class="header__search">
                    <div class="header__search-wrap">
                        <input type="text" class="header__search-input" placeholder="Tìm kiếm">
                        <a class="header__search-icon" href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
                @auth
                <p style="font-size: 18px;">Xin chào ,{{ auth()->user()->name }}  </p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="font-size: 14px;">Đăng xuất</button>
                </form>
                @else
                
                <a href="{{ route('login') }}" style="font-size: 18px;">Đăng nhập |</a>
                <a href="{{ route('register')}}" style="font-size: 18px;">Đăng ký</a>
                @endauth

                
                <!-- Cart -->
                <div class="header__cart have" href="#">
                    <i class="fas fa-shopping-basket"></i>
                    <div class="header__cart-amount">
                        3
                    </div>
                    <div class="header__cart-wrap">
                        <ul class="order__list">
                            <li class="item-order">
                                <div class="order-wrap">
                                    <a href="{{ asset('product')}}" class="order-img">
                                        <img src="img/product/product1.jpg" alt="">
                                    </a>
                                    <div class="order-main">
                                        <a href="{{ asset('product')}}" class="order-main-name">Áo sơ mi  caro kèm belt caro kèm belt Áo sơ mi caro kèm belt</a>
                                        <div class="order-main-price">2 x 45,000 ₫</div>
                                    </div>
                                    <a href="{{ asset('product')}}" class="order-close"><i class="far fa-times-circle"></i></a>
                                </div>
                            </li>
                            <li class="item-order">
                                <div class="order-wrap">
                                    <a href="{{ asset('product')}}" class="order-img">
                                        <img src="img/product/product1.jpg" alt="">
                                    </a>
                                    <div class="order-main">
                                        <a href="{{ asset('product')}}" class="order-main-name">Áo sơ mi  caro kèm belt caro kèm belt Áo sơ mi caro kèm belt</a>
                                        <div class="order-main-price">2 x 45,000 ₫</div>
                                    </div>
                                    <a href="{{ asset('product')}}" class="order-close"><i class="far fa-times-circle"></i></a>
                                </div>
                            </li>
                            <li class="item-order">
                                <div class="order-wrap">
                                    <a href="{{ asset('product')}}" class="order-img">
                                        <img src="img/product/product1.jpg" alt="">
                                    </a>
                                    <div class="order-main">
                                        <a href="{{ asset('product')}}" class="order-main-name">Áo sơ mi  caro kèm belt caro kèm belt Áo sơ mi caro kèm belt</a>
                                        <div class="order-main-price">2 x 45,000 ₫</div>
                                    </div>
                                    <a href="{{ asset('product')}}" class="order-close"><i class="far fa-times-circle"></i></a>
                                </div>
                            </li>
                        </ul>
                        <div class="total-money">Tổng cộng: 120.000đ</div>
                        <a href="{{ asset('cart')}}" class="btn btn--default cart-btn">Xem giỏ hàng</a>
                        <a href="{{ asset('pay')}}" class="btn btn--default cart-btn orange">Thanh toán</a>
                        <!-- norcart -->
                        <!-- <img class="header__cart-img-nocart" src="http://www.giaybinhduong.com/images/empty-cart.png" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu -->
        <div class="header__nav">
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
                    <a href="{{route('index')}}" class="header__nav-link">Trang chủ</a>
                </li>
              
                <li class="header__nav-item">
                <a href="{{url('listProduct')}}" class="header__nav-link">Sản Phẩm</a>
                    <div class="sub-nav-wrap grid wide">
                        <ul class="sub-nav">
                            <li class="sub-nav__item">
                                <a href="" class="sub-nav__link heading">Nước hoa</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="{{ asset('listProduct')}}" class="sub-nav__link">Chăm sóc toàn thân vvv</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="{{ asset('listProduct')}}" class="sub-nav__link">Khuyến mãi</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="{{ asset('listProduct')}}" class="sub-nav__link">Chăm sóc cơ thể</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="{{ asset('listProduct')}}" class="sub-nav__link">Nước hoa</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="{{ asset('listProduct')}}" class="sub-nav__link">Chăm sóc miệng</a>
                            </li>
                        </ul>
                        
                    </div>
                </li>
                <li class="header__nav-item">
                    <a href="{{route('news')}}" class="header__nav-link">Tin Tức</a>
                </li>
                <li class="header__nav-item">
                    <a href="{{route('contact')}}" class="header__nav-link">Liên Hệ</a>
                </li>
            </ul>
        </div>
    </div>
>>>>>>> 0a1083de38872e07658b2ed8ee7bf9013b57a239
    <div class="main">
        <div class="grid wide">
            <div class="main__taskbar">
                <div class="main__breadcrumb">
                    <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Trang chủ</a>
                    </div>
                    <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Danh sách tin tức</a>
                    </div>
                </div>
            </div>
            <div class="list-new">
                <div href="#" class="new-item">
                    <a href="#" class="new-item__img">
                        <img src="https://www.kosmebox.com/image/cache/data/BLOG/Nhung-item-makeup-nha-etude-house-gia-hat-de/Nhung-item-makeup-nha-etude-house-gia-hat-de-7-9-225x225.jpg" alt="">
                    </a>
                    <div class="new-item__body">
                        <a href="#" class="new-item__title">
                            Những Item makeup nhà Etude House giá hạt dẻ, chất miễn đùa
                            Những Item makeup nhà Etude House giá hạt dẻ, chất miễn đùa
                       </a>
                        <p class="new-item__time"> Ngày đăng: 27/5/2020</p>
                        <p class="new-item__description">Những Item makeup nhà Etude House giá hạt dẻ, chất miễn đùa Không phải là những item makeup mới. Thậm chí nếu không nói là lâu đời. Nhưng ở thời điểm hiện tại, chúng vẫn không lỗi thời. Rất lì lợm. Bao nhiêu dòng makeup mới ra
                            vẫn không làm chúng ngao ngán. Và tất nhiên, nàng nào muốn Những Item makeup nhà Etude House giá hạt dẻ, chất miễn đùa Không phải là những item makeup mới. Thậm chí nếu không nói là lâu đời. Nhưng ở thời điểm hiện tại, chúng
                            vẫn không lỗi thời. Rất lì lợm. Bao nhiêu dòng makeup mới ra vẫn không làm chúng ngao ngán. Và tất nhiên, nàng nào muốn Những Item makeup nhà Etude House giá hạt dẻ, chất miễn đùa Không phải là những item makeup mới. Thậm chí
                            nếu không nói là lâu đời. Nhưng ở thời điểm hiện tại, chúng vẫn không lỗi thời. Rất lì lợm. Bao nhiêu dòng makeup mới ra vẫn không làm chúng ngao ngán. Và tất nhiên, nàng nào muốn Những Item makeup nhà Etude House giá hạt dẻ,
                            chất miễn đùa Không phải là những item makeup mới. Thậm chí nếu không nói là lâu đời. Nhưng ở thời điểm hiện tại, chúng vẫn không lỗi thời. Rất lì lợm. Bao nhiêu dòng makeup mới ra vẫn không làm chúng ngao ngán. Và tất nhiên,
                            nàng nào muốn đep chuẩn mực thì mời vào team.Không khác biệt nhiều so với các dòng makeup Hàn Quốc khác</p>
                        <a  href="#" class="btn btn--default">Xem thêm</a>
                    </div>
                </div>
                <div href="#" class="new-item">
                    <a href="#" class="new-item__img">
                        <img src="https://www.kosmebox.com/image/cache/data/BLOG/Nhung-item-makeup-nha-etude-house-gia-hat-de/Nhung-item-makeup-nha-etude-house-gia-hat-de-7-9-225x225.jpg" alt="">
                    </a>
                    <div class="new-item__body">
                        <a href="#" class="new-item__title">
                            Những Item makeup nhà Etude House giá hạt dẻ, chất miễn đùa
                            Những Item makeup nhà Etude House giá hạt dẻ, chất miễn đùa
                       </a>
                        <p class="new-item__time"> Ngày đăng: 27/5/2020</p>
                        <p class="new-item__description">Những Item makeup nhà Etude House giá hạt dẻ, chất miễn đùa Không phải là những item makeup mới. Thậm chí nếu không nói là lâu đời. Nhưng ở thời điểm hiện tại, chúng vẫn không lỗi thời. Rất lì lợm. Bao nhiêu dòng makeup mới ra
                            vẫn không làm chúng ngao ngán. Và tất nhiên, nàng nào muốn Những Item makeup nhà Etude House giá hạt dẻ, chất miễn đùa Không phải là những item makeup mới. Thậm chí nếu không nói là lâu đời. Nhưng ở thời điểm hiện tại, chúng
                            vẫn không lỗi thời. Rất lì lợm. Bao nhiêu dòng makeup mới ra vẫn không làm chúng ngao ngán. Và tất nhiên, nàng nào muốn Những Item makeup nhà Etude House giá hạt dẻ, chất miễn đùa Không phải là những item makeup mới. Thậm chí
                            nếu không nói là lâu đời. Nhưng ở thời điểm hiện tại, chúng vẫn không lỗi thời. Rất lì lợm. Bao nhiêu dòng makeup mới ra vẫn không làm chúng ngao ngán. Và tất nhiên, nàng nào muốn Những Item makeup nhà Etude House giá hạt dẻ,
                            chất miễn đùa Không phải là những item makeup mới. Thậm chí nếu không nói là lâu đời. Nhưng ở thời điểm hiện tại, chúng vẫn không lỗi thời. Rất lì lợm. Bao nhiêu dòng makeup mới ra vẫn không làm chúng ngao ngán. Và tất nhiên,
                            nàng nào muốn đep chuẩn mực thì mời vào team.Không khác biệt nhiều so với các dòng makeup Hàn Quốc khác</p>
                            <a  href="#" class="btn btn--default">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
@endsection