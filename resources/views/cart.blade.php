@extends('layout')

@section('main')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gio hang</title>
        <!-- Font roboto -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <!-- Icon fontanwesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <!-- Reset css & grid sytem -->
        <link rel="stylesheet" href="{{ asset('css/library.css') }}">
        <!-- Owl Slider css -->
        <link rel="stylesheet" href="{{ asset('owlCarousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('owlCarousel/assets/owl.theme.default.min.css') }}">
        <!-- Layout -->
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        <!-- index -->

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Owl caroucel Js-->
        <script src="{{ asset('owlCarousel/owl.carousel.min.js') }}"></script>
    </head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}">

    <body>

        <div class="main">
            <div class="grid wide">
                <h3 class="main__notify">

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
                            @php
                                $totalPrice = 0; // Khởi tạo biến tổng giá trị của giỏ hàng
                            @endphp

                            @if (isset($cart) && is_array($cart) && count($cart) > 0)
                                @foreach ($cart as $id => $item)
                                    <div class="row item">
                                        <div class="col l-1 m-1 s-0">
                                            <input type="checkbox" name="a">
                                        </div>
                                        <div class="col l-4 m-4 s-8">
                                            <div class="main__cart-product">
                                                <img src="img/product/{{ $item['img'] }}" alt="">
                                                <div class="name">{{ $item['name'] }}</div>
                                            </div>
                                        </div>
                                        <div class="col l-2 m-2 s-0">
                                            <div class="main__cart-price" style="color: red;">{{ $item['price'] }} đ</div>
                                        </div>
                                        <div class="col l-2 m-2 s-0">
                                            <div class="buttons_added">
                                                <input class="minus is-form" type="button" value="-"
                                                    data-product-id="{{ $id }}">
                                                <span class="quantity"
                                                    style="font-size:20px">{{ $item['quantity'] }}</span>
                                                <input class="plus is-form" type="button" value="+"
                                                    data-product-id="{{ $id }}">
                                            </div>
                                        </div>

                                        <div class="col l-2 m-2 s-4">
                                            <div class="main__cart-price">
                                                @php
                                                    $subtotal = $item['price'] * $item['quantity']; // Tính tổng giá trị của mỗi mặt hàng
                                                    $totalPrice += $subtotal; // Cộng dồn vào tổng giá trị của giỏ hàng
                                                @endphp
                                                {{ $subtotal }}
                                            </div>
                                        </div>
                                        <div class="col l-1 m-1 s-0">
                                            <span class="main__cart-icon">
                                                <form method="POST" action="{{ route('cart.remove') }}">
                                                    @csrf
                                                    <input type="hidden" value="{{ $id }}" name="sanpham_id">
                                                    <button class="btn btn-primary" type="submit"><i
                                                            class="far fa-times-circle "></i></button>
                                                </form>
                                                {{-- <i class="far fa-times-circle "></i> --}}
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <!-- Xử lý khi không có giỏ hàng hoặc giỏ hàng rỗng -->
                            @endif
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
                                    {{ $totalPrice }} đ
                                </div>
                            </div>
                            <div class="pay-info">
                                <div class="main__pay-text">
                                    Tổng thành tiền
                                </div>
                                <div class="main__pay-price" id="totalPrice">
                                    {{ $totalPrice }} đ
                                </div>
                            </div>

                            <div class="pay-info">
                                <div class="main__pay-text">
                                    Tổng thành tiền</div>
                                <div class="main__pay-price">
                                    {{ $totalPrice }} đ
                                </div>
                            </div>
                            <button id="proceedToCheckoutBtn" type="submit" class="btn btn--default">Tiến hành thanh
                                toán</button>

                            <div class="main__pay-title">Phiếu ưu đãi</div>
                            <form method="POST" action="{{ route('discount.apply') }}">
                                @csrf
                                <input type="text" name="discount_amount" class="form-control">
                                <button type="submit" class="btn btn--default">Áp dụng</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Script common -->
        <script>
            // Lắng nghe sự kiện click trên nút tăng/giảm số lượng
            $('.plus, .minus').on('click', function() {
                var productId = $(this).data('product-id');
                var quantityElement = $(this).siblings('.quantity');
                var currentQuantity = parseInt(quantityElement.text());
                var newQuantity = currentQuantity;

                if ($(this).hasClass('plus')) {
                    newQuantity = currentQuantity + 1;
                } else if ($(this).hasClass('minus') && currentQuantity > 1) {
                    newQuantity = currentQuantity - 1;
                }
                // Gửi yêu cầu cập nhật giỏ hàng bằng Ajax
                $.ajax({
                    url: '/cart/update',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        product_id: productId,
                        quantity: newQuantity
                    },
                    success: function(response) {
                        // Nếu cập nhật thành công, cập nhật giá tiền sản phẩm và tổng giá tiền
                        var newPrice = response.price; // Giả sử server trả về giá mới của sản phẩm
                        var subtotal = newPrice * parseInt(quantityElement.text());
                        var totalPrice = 0;
                        $('.main__cart-price').each(function() {
                            var productId = $(this).closest('.item').find('.plus, .minus').data(
                                'product-id');
                            var price = response.prices[
                            productId]; // Lấy giá mới của sản phẩm từ phản hồi của server
                            $(this).text(price + ' đ'); // Cập nhật giá tiền của sản phẩm
                            totalPrice += parseInt(price) * parseInt($(this).siblings(
                                '.col.l-2.m-2.s-0').find('.quantity').text());
                        });
                        $('#totalPrice').text(totalPrice + ' đ'); // Cập nhật tổng giá tiền
                    },
                    error: function(xhr, status, error) {
                        // Xử lý lỗi nếu có
                        console.error('Lỗi khi cập nhật giỏ hàng: ' + error);
                    }
                });
            });
            $(document).ready(function() {
                // Lắng nghe sự kiện click trên nút "Tiến hành thanh toán"
                $('#proceedToCheckoutBtn').on('click', function() {
                    // Chuyển hướng người dùng đến trang thanh toán
                    window.location.href = "{{ route('pay') }}";
                });
            });
        </script>


        <script src="js/commonscript.js"></script>

    </body>
@endsection
