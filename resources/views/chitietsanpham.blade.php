<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <!-- Font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon fontanwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Reset css & grid sytem -->
    <link rel="stylesheet" href="{{ asset('css/library.css')}}">
    <link href="{{ asset('owlCarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <!-- Layout -->
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    <!-- index -->
    <link href="{{ asset('css/home.css')}}" rel="stylesheet" />
    <!-- Chi tiết sản phẩm -->
    <link rel="stylesheet" href="{{ asset('css/chitietsanpham.css')}}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl caroucel Js-->
    <script src="{{ asset('owlCarousel/owl.carousel.min.js')}}"></script>
</head>

<body>
    <div class="container">
        @foreach ($data as $row)
        <div class="product-detail">
            <div class="product-detail__image">
                <img src="{{asset('img/product/' . $row->hinh)}}" alt="Product Image">
            </div>
            <div class="product-detail__info">
                <h2 class="product-detail__name">{{ $row->ten }}</h2>
                <div class="product-detail__price">Giá: {{ $row->gia }}</div>
                <div class="product-detail__description">
                    {{ $row->mota }}
                </div>
                <div class="product-detail__stock">
                    Số lượng kho: {{ $row->soluongtrongkho }}
                </div>
                <div class="product-detail__sold">
                    Số lượng đã bán: {{ $row->soluongdaban }}
                </div>
                <div class="button">
                    <button class="add-to-cart-btn">Thêm vào giỏ hàng</button>
                    <button class="buy-now-btn">Mua ngay</button>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</body>

</html>