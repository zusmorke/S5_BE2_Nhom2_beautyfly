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
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
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
                        <a href="{{asset('/')}}" class="breadcrumb__link">Trang chủ</a>
                    </div>
                    <div class="breadcrumb__item">
                        <a href="{{asset('listProduct')}}" class="breadcrumb__link">Cửa hàng</a>
                    </div>
                    <!-- <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Hãng DHC</a>
                    </div> -->
                </div>
                <div class="main__sort">
                    <h3 class="sort__title">
                        Hiển thị kết quả theo
                    </h3>
                    <select class="sort__select"> name="" id="">
                        <option value="1">Thứ tự mặc định</option>
                        <option value="2">Giá : Cao đến thấp</option>
                        <option value="3">Giá : Thấp đến cao</option>
                    </select>
                </div>
                
            </div>
            <div class="productList">
                <div class="listProduct">
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <div class="row">
                                @foreach($phanTrang as $row) <!-- Đảm bảo rằng bạn đã đổi tên biến thành $products -->
                                <div class="col l-2 m-4 s-6 custom-padding">
                                    <div class="product">
                                        <div class="product__avt">
                                            <img src="{{asset('img/product/' . $row->hinh)}}" alt="" class="product__image">
                                        </div>
                                        <div class="product__info">
                                            <h3 class="product__name"><a href="{{url('product/' . $row->sanpham_id)}}" style="color:#0daf74">{{$row->ten}}</a></h3>
                                            <div class="product__price">
                                                <div class="price__new" style="text-align: right; color: red;">{{ $row->gia}} <span class="price__unit">đ</span></div>
                                            </div>
                                            <div class="product__sale">
                                                <span class="product__sale-percent">24%%</span>
                                                <span class="product__sale-text">Giảm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="pagination">
                        <!-- Hiển thị liên kết đến trang trước nếu có -->
                        @if ($phanTrang->previousPageUrl())
                        <a href="{{ $phanTrang->previousPageUrl() }}" class="page-link">&laquo; Trang trước</a>
                        @endif 
                        <!-- Hiển thị số trang -->
                        Trang {{ $phanTrang->currentPage() }}/{{ $phanTrang->lastPage() }}
                        <!-- Hiển thị liên kết đến trang kế tiếp nếu có -->
                        @if ($phanTrang->nextPageUrl())
                        <a href="{{ $phanTrang->nextPageUrl() }}" class="page-link">Trang sau &raquo;</a>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</body>
@endsection