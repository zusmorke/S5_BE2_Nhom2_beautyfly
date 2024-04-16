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
    <title>Chi tiêt sản phẩm</title>
    <!-- Font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon fontanwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Reset css & grid sytem -->
    <link rel="stylesheet" href="{{asset('css/library.css')}}">
    <!-- Owl Slider css -->
    <link rel="stylesheet" href="{{ asset('owlCarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('owlCarousel/assets/owl.theme.default.min.css')}}">
    <!-- Layout -->
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <!-- index -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/product.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/productSale.css')}}">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl caroucel Js-->
    <script src="{{asset('owlCarousel/owl.carousel.min.js')}}"></script>

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
</head>

<body>
<<<<<<< HEAD

<body>
=======
    test
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
                <div class="header__account">
                    <a href="#my-Login" class="header__account-login">Đăng Nhập</a>
                    <a href="#my-Register" class="header__account-register">Đăng Kí</a>
                </div>
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
                                        <a href="{{ asset('product')}}" class="order-main-name">Áo sơ mi caro kèm belt caro kèm belt Áo sơ mi caro kèm belt</a>
                                        <div class="order-main-price">2 x 45,000 ₫</div>
                                    </div>
                                    <a href="{{ asset('product')}}" class="order-close"><i class="far fa-times-circle"></i></a>
                                </div>
                            </li>
                            <li class="item-order">
                                <div class="order-wrap">
                                    <a href="{{route('product')}}" class="order-img">
                                        <img src="img/product/product1.jpg" alt="">
                                    </a>
                                    <div class="order-main">
                                        <a href="{{ asset('product')}}" class="order-main-name">Áo sơ mi caro kèm belt caro kèm belt Áo sơ mi caro kèm belt</a>
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
                                        <a href="{{ asset('product')}}" class="order-main-name">Áo sơ mi caro kèm belt caro kèm belt Áo sơ mi caro kèm belt</a>
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
                            <a href="#my-Login" class="sub-nav__link">Đăng Nhậpppp</a>
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
                    <a href="#" class="header__nav-link">Giới Thiệu</a>
                </li>
                <li class="header__nav-item">
                    <a href="#" class="header__nav-link">Sản Phẩm</a>
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
                        <a href="#" class="breadcrumb__link">Cửa hàng</a>
                    </div>
                    <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Hãng DHC</a>
                    </div>
                </div>
                <div class="main__sort">
                    <h3 class="sort__title">
                        Hiển thị kết quả theo
                    </h3>
                    <select class="sort__select"> name="" id="">
                        <option value="1">Thứ tự mặc định</option>
                        <option value="2">Mức độ phổ biến</option>
                        <option value="3">Điểm đánh giá</option>
                        <option value="4">Mới cập nhật</option>
                        <option value="5">Giá : Cao đến thấp</option>
                        <option value="6">Giá Thấp đến cao</option>
                    </select>
                </div>
            </div>
            <div class="productList">
                <div class="listProduct">
                    <div class="row">
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
<<<<<<< HEAD
                                <div class="product__avt" style="background-image: url(assets/img/product/product1.jpg)">
=======
                                <div class="product__avt" >
                                   <img src="{{asset('img/product/' . $row->hinh)}}" alt="" class="product__image">
>>>>>>> 0a1083de38872e07658b2ed8ee7bf9013b57a239
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Framed-Sleeve Tops Group</h3>
                                    <div class="product__price">
                                        <div class="price__old">340.000 <span class="price__unit">đ</span></div>
                                        <div class="price__new">320.000 <span class="price__unit">đ</span></div>
                                    </div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">22%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                                <a href="#" class="viewDetail">Xem chi tiết</a>
                                <a href="#" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/product1.jpg)">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Framed-Sleeve Tops Group</h3>
                                    <div class="product__price">
                                        <div class="price__old">340.000 <span class="price__unit">đ</span></div>
                                        <div class="price__new">320.000 <span class="price__unit">đ</span></div>
                                    </div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">22%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                                <a href="#" class="viewDetail">Xem chi tiết</a>
                                <a href="#" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/product1.jpg)">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Framed-Sleeve Tops Group</h3>
                                    <div class="product__price">
                                        <div class="price__old">340.000 <span class="price__unit">đ</span></div>
                                        <div class="price__new">320.000 <span class="price__unit">đ</span></div>
                                    </div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">22%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                                <a href="#" class="viewDetail">Xem chi tiết</a>
                                <a href="#" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/product1.jpg)">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Framed-Sleeve Tops Group</h3>
                                    <div class="product__price">
                                        <div class="price__old">340.000 <span class="price__unit">đ</span></div>
                                        <div class="price__new">320.000 <span class="price__unit">đ</span></div>
                                    </div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">22%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                                <a href="#" class="viewDetail">Xem chi tiết</a>
                                <a href="#" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/product1.jpg)">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Framed-Sleeve Tops Group</h3>
                                    <div class="product__price">
                                        <div class="price__old">340.000 <span class="price__unit">đ</span></div>
                                        <div class="price__new">320.000 <span class="price__unit">đ</span></div>
                                    </div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">22%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                                <a href="#" class="viewDetail">Xem chi tiết</a>
                                <a href="#" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/product1.jpg)">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Framed-Sleeve Tops Group</h3>
                                    <div class="product__price">
                                        <div class="price__old">340.000 <span class="price__unit">đ</span></div>
                                        <div class="price__new">320.000 <span class="price__unit">đ</span></div>
                                    </div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">22%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                                <a href="#" class="viewDetail">Xem chi tiết</a>
                                <a href="#" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/product1.jpg)">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Framed-Sleeve Tops Group</h3>
                                    <div class="product__price">
                                        <div class="price__old">340.000 <span class="price__unit">đ</span></div>
                                        <div class="price__new">320.000 <span class="price__unit">đ</span></div>
                                    </div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">22%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                                <a href="#" class="viewDetail">Xem chi tiết</a>
                                <a href="#" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/product1.jpg)">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Framed-Sleeve Tops Group</h3>
                                    <div class="product__price">
                                        <div class="price__old">340.000 <span class="price__unit">đ</span></div>
                                        <div class="price__new">320.000 <span class="price__unit">đ</span></div>
                                    </div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">22%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                                <a href="#" class="viewDetail">Xem chi tiết</a>
                                <a href="#" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/product1.jpg)">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Framed-Sleeve Tops Group</h3>
                                    <div class="product__price">
                                        <div class="price__old">340.000 <span class="price__unit">đ</span></div>
                                        <div class="price__new">320.000 <span class="price__unit">đ</span></div>
                                    </div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">22%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                                <a href="#" class="viewDetail">Xem chi tiết</a>
                                <a href="#" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/product1.jpg)">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Framed-Sleeve Tops Group</h3>
                                    <div class="product__price">
                                        <div class="price__old">340.000 <span class="price__unit">đ</span></div>
                                        <div class="price__new">320.000 <span class="price__unit">đ</span></div>
                                    </div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">22%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                                <a href="#" class="viewDetail">Xem chi tiết</a>
                                <a href="#" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/product1.jpg)">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Framed-Sleeve Tops Group</h3>
                                    <div class="product__price">
                                        <div class="price__old">340.000 <span class="price__unit">đ</span></div>
                                        <div class="price__new">320.000 <span class="price__unit">đ</span></div>
                                    </div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">22%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                                <a href="#" class="viewDetail">Xem chi tiết</a>
                                <a href="#" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <ul class="pagination__list">
                        <li class="pagination__item">
                            <a href="listFilm.html" class="pagination__link">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="pagination__item active">
                            <a href="listFilm.html" class="pagination__link">1</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listFilm.html" class="pagination__link">2</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listFilm.html" class="pagination__link">3</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listFilm.html" class="pagination__link">4</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listFilm.html" class="pagination__link">5</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listFilm.html" class="pagination__link">...</a>
                        </li>
                        <li class="pagination__item active">
                            <a href="listFilm.html" class="pagination__link">14</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listFilm.html" class="pagination__link">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection