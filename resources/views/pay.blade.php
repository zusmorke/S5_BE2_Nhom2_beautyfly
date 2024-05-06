@extends('layout')

@section('main')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('css/pay.css')}}">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl caroucel Js-->
    <script src="{{asset('owlCarousel/owl.carousel.min.js')}}"></script>
    <style>
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
        display: none;
    }

    .message-container {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 50px; /* Điều chỉnh kích thước của thông báo */
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        z-index: 1000;
        display: none;
    }

    .success-message {
        text-align: center;
        font-size: 24px;
        color: green; /* Màu cho thông báo thành công */
    }

    .error-message {
        text-align: center;
        font-size: 24px;
        color: red; /* Màu cho thông báo lỗi */
    }

    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        font-size: 24px;
    }
</style>


</head>

<body>
    <div class="main">
        <div class="grid wide">
            <div class="row">
            <div class="col l-7 m-12 s-12">
                    <div class="pay-information">
                        <div class="pay__heading">Thông tin thanh toán</div>
                        <div class="form-group">
                            <label for="full-name" class="form-label">Họ Tên *</label>
                            <input id="full-name" name="full-name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Địa chỉ *</label>
                            <input id="address" name="address" type="text" class="form-control">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="city" class="form-label">Tỉnh / Thành phố *</label>
                            <input id="city" name="city" type="text" class="form-control">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email *</label>
                            <input id="email" name="email" type="text" class="form-control">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Số điện thoại *</label>
                            <input id="phone" name="phone" type="text" class="form-control">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="note" class="form-label">Ghi chú cho đơn hàng</label>
                            <textarea id="note" class="form-control" name="note" cols="30" rows="20"></textarea>
                        </div>
                    </div>
                </div>




                <div class="col l-5 m-12 s-12">
                    <div class="pay-order">
                        <div class="pay__heading">Đơn hàng của bạn</div>
                        <!-- <div class="pay-info">
                            <div class="main__pay-text">
                                Azrouel dress variable</div>
                                                <div class="main__pay-price">
                            {{ isset($_GET['totalPrice']) ? $_GET['totalPrice'] : '0' }} đ
                        </div>
                        </div>
                        <div class="pay-info">
                            <div class="main__pay-text">
                                Azrouel dress variable </div>
                                                <div class="main__pay-price">
                            {{ isset($_GET['totalPrice']) ? $_GET['totalPrice'] : '0' }} đ
                        </div>
                        </div>
                        <div class="pay-info">
                            <div class="main__pay-text">
                                Azrouel dress variable </div>
                                                <div class="main__pay-price">
                            {{ isset($_GET['totalPrice']) ? $_GET['totalPrice'] : '0' }} đ
                        </div> -->
                        </div>
                        <div class="pay-info">
                            <div class="main__pay-text special">
                                Giao hàng
                            </div>
                            <div class="main__pay-text">
                                Giao hàng miễn phí
                            </div>

                        </div>
                        <div class="pay-info">
                            <div class="main__pay-text special">
                                Tổng thành tiền</div>
                            <div class="main__pay-price">
                            {{ isset($_GET['totalPrice']) ? $_GET['totalPrice'] : '0' }} đ
                            </div>
                        </div>
                        <div class="btn btn--default" id="order-btn">Đặt hàng</div>

                        <!-- Overlay -->
                        <div class="overlay" id="overlay"></div>

                        <!-- Message container -->
                        <div class="message-container" id="message-container">
                            <div class="close-button" id="close-button">×</div>
                            <div class="success-message" id="success-message" style="display: none;">
                                Bạn đã đặt hàng thành công.
                            </div>
                            <div class="error-message" id="error-message" style="display: none;">
                                Bạn cần nhập đầy đủ thông tin thanh toán.
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>

                </div>

                

            </div>
        </div>
    </div>
    <script>
       document.getElementById('order-btn').addEventListener('click', function(event) {
            var fullName = document.getElementById('full-name').value.trim();
            var address = document.getElementById('address').value.trim();
            var city = document.getElementById('city').value.trim();
            var email = document.getElementById('email').value.trim();
            var phone = document.getElementById('phone').value.trim();

            if (fullName === '' || address === '' || city === '' || email === '' || phone === '') {
                document.getElementById('error-message').style.display = 'block';
                document.getElementById('success-message').style.display = 'none';
            } else {
                document.getElementById('error-message').style.display = 'none';
                document.getElementById('success-message').style.display = 'block';
            }

            // Hiển thị overlay và message container
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('message-container').style.display = 'block';
        });

        document.getElementById('close-button').addEventListener('click', function(event) {
            // Ẩn overlay và message container khi người dùng nhấp vào nút thoát
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('message-container').style.display = 'none';
        });
                // Lấy giá trị tổng tiền từ session
            $totalPrice = session('totalPrice');
    </script>
</body>
@endsection