@extends('layout')

@section('main')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Tin tức</title>
    <!-- Font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon fontanwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Reset css & grid sytem -->
    <link rel="stylesheet" href="{{asset('css/library.css')}}">
    <!-- Owl Slider css -->
    <link rel="stylesheet" href="{{asset('owlCarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owlCarousel/assets/owl.theme.default.min.css')}}">
    <!-- Layout -->
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <!-- index -->
    
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl caroucel Js-->
    <script src="{{asset('owlCarousel/owl.carousel.min.js')}}"></script>
</head>
<link rel="stylesheet" type="text/css" href="{{asset('css/cart.css')}}">
<body>
    
    <div class="main">
        <div class="grid wide">
            <h3 class="main__notify">
                <div class="main__notify-icon">
                    <i class="fas fa-check"></i>
                    <!-- <i class="fas fa-times"></i> -->
                </div>
                <div class="main__notify-text">Giỏ hàng đã được cập nhật.</div>
            </h3>
            <div class="row">
                <div class="col l-8 m-12 s-12">
                    <div class="main__cart">
                        <div class="row title">
                            <div class="col l-1 m-1 s-0">Chọn</div>
                            <div class="col l-4 m-4 s-8">Sản phẩm</div>
                            <div class="col l-2 m-2 s-0">Giá</div>
                            <div class="col l-2 m-2 s-0">Số lượng</div>
                            <div class="col l-2 m-2 s-4">Tổng</div>
                            <div class="col l-1 m-1 s-0">Xóa</div>
                        </div>
                        <div class="row item">
                            <div class="col l-1 m-1 s-0">
                                <input type="checkbox" name="a">
                            </div>
                            <div class="col l-4 m-4 s-8">
                                <div class="main__cart-product">
                                    <img src="img/product/product2.jpg" alt="">
                                    <div class="name">Azrouel dress variable Azrouel dress variable</div>
                                </div>
                            </div>
                            <div class="col l-2 m-2 s-0">
                                <div class="main__cart-price">476.000 đ</div>
                            </div>
                            <div class="col l-2 m-2 s-0">
                                <div class="buttons_added">
                                    <input class="minus is-form" type="button" value="-" onclick="minusProduct()">
                                    <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                                    <input class="plus is-form" type="button" value="+" onclick="plusProduct()">
                                </div>
                            </div>
                            <div class="col l-2 m-2 s-4">
                                <div class="main__cart-price">476.000 đ</div>
                            </div>
                            <div class="col l-1 m-1 s-0">
                                <span class="main__cart-icon">
                                <i class="far fa-times-circle "></i>
                            </span>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col l-1 m-1 s-0">
                                <input type="checkbox" name="a">
                            </div>
                            <div class="col l-4 m-4 s-8">
                                <div class="main__cart-product">
                                    <img src="img/product/product2.jpg" alt="">
                                    <div class="name">Azrouel dress variable Azrouel dress variable</div>
                                </div>
                            </div>
                            <div class="col l-2 m-2 s-0">
                                <div class="main__cart-price">476.000 đ</div>
                            </div>
                            <div class="col l-2 m-2 s-0">
                                <div class="buttons_added">
                                    <input class="minus is-form" type="button" value="-" onclick="minusProduct()">
                                    <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                                    <input class="plus is-form" type="button" value="+" onclick="plusProduct()">
                                </div>
                            </div>
                            <div class="col l-2 m-2 s-4">
                                <div class="main__cart-price">476.000 đ</div>
                            </div>
                            <div class="col l-1 m-1 s-0">
                                <span class="main__cart-icon">
                                <i class="far fa-times-circle "></i>
                            </span>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col l-1 m-1 s-0">
                                <input type="checkbox" name="a">
                            </div>
                            <div class="col l-4 m-4 s-8">
                                <div class="main__cart-product">
                                    <img src="img/product/product2.jpg" alt="">
                                    <div class="name">Azrouel dress variable Azrouel dress variable</div>
                                </div>
                            </div>
                            <div class="col l-2 m-2 s-0">
                                <div class="main__cart-price">476.000 đ</div>
                            </div>
                            <div class="col l-2 m-2 s-0">
                                <div class="buttons_added">
                                    <input class="minus is-form" type="button" value="-" onclick="minusProduct()">
                                    <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                                    <input class="plus is-form" type="button" value="+" onclick="plusProduct()">
                                </div>
                            </div>
                            <div class="col l-2 m-2 s-4">
                                <div class="main__cart-price">476.000 đ</div>
                            </div>
                            <div class="col l-1 m-1 s-0">
                                <span class="main__cart-icon">
                                <i class="far fa-times-circle "></i>
                            </span>
                            </div>
                        </div>
                        <div class="btn btn--default">
                            Cập nhật giỏ hàng
                        </div>
                    </div>
                </div>
                <div class="col l-4 m-12 s-12">
                    <div class="main__pay">
                        <div class="main__pay-title">Tổng số lượng</div>
                        <div class="pay-info">
                            <div class="main__pay-text">
                                Tổng phụ</div>
                            <div class="main__pay-price">
                                1,120,000 ₫
                            </div>
                        </div>
                        <div class="pay-info">
                            <div class="main__pay-text">
                                Giao hàng
                            </div>
                            <div class="main__pay-text">
                                Giao hàng miễn phí
                            </div>

                        </div>
                        <div class="pay-info">
                            <div class="main__pay-text">
                                Tổng thành tiền</div>
                            <div class="main__pay-price">
                                1,120,000 ₫
                            </div>
                        </div>
                        <div class="btn btn--default orange">Tiến hành thanh toán</div>
                        <div class="main__pay-title">Phiếu ưu đãi</div>
                        <input type="text" class="form-control">
                        <div class="btn btn--default">Áp dụng</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script common -->
    <script src="js/commonscript.js"></script>

</body>
@endsection