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
                        @foreach($data as $row)
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="owl-carousel owl-theme" id="sync1">
                                    <div class="product__avt">
                                                    <img src="{{asset('img/product/' . $sanpham->hinh)}}" alt="" class="product__image">
                                                </div>
                                    </div>
                                <div class="product__info">
                                    <h3 class="product__name">{{$row->ten}}</h3>
                                    <div class="product__price">
                                        <div class="price__new">{{$row->gia}} <span class="price__unit">đ</span></div>
                                    </div>
                                </div>
                                <div class="product__sale">
                                    <span class="product__sale-percent">22%</span>
                                    <span class="product__sale-text">Giảm</span>
                                </div>
                                <a href="{{ asset('product')}}" class="viewDetail">Xem chi tiết</a>
                                <a href="{{ asset('cart')}}" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="pagination">
                    <ul class="pagination__list">
                        <li class="pagination__item">
                            <a href="#" class="pagination__link">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="pagination__item active">
                            <a href="#" class="pagination__link">1</a>
                        </li>
                        <li class="pagination__item">
                            <a href="#" class="pagination__link">2</a>
                        </li>
                        <li class="pagination__item">
                            <a href="#" class="pagination__link">3</a>
                        </li>
                        <li class="pagination__item">
                            <a href="#" class="pagination__link">4</a>
                        </li>
                        <li class="pagination__item">
                            <a href="#" class="pagination__link">5</a>
                        </li>
                        <li class="pagination__item">
                            <a href="#" class="pagination__link">...</a>
                        </li>
                        <li class="pagination__item active">
                            <a href="#" class="pagination__link">14</a>
                        </li>
                        <li class="pagination__item">
                            <a href="#" class="pagination__link">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
</body>
@endsection