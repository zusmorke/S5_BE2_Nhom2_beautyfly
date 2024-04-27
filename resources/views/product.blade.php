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
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl caroucel Js-->
    <script src="{{asset('owlCarousel/owl.carousel.min.js')}}"></script>

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
</head>

<body>
    <div class="main">
        <div class="grid wide">
            <div class="productInfo">
                <div class="row">
                    @if(isset($sanpham))
                    <div class="col l-5 m-12 s-12">
                        <div class="owl-carousel owl-theme" id="sync1">
                            <div class="product__avt">
                                <img src="{{ asset('img/product/' . $sanpham->hinh) }}" alt="" class="product__image">
                            </div>
                        </div>
                    </div>
                    <div class="col l-7 m-12s s-12 pl">
                        <h3 class="productInfo__name">
                            {{$sanpham->ten}}
                        </h3>
                        @php
                        $giaMoi = $sanpham->gia - $sanpham->sale;
                        @endphp
                        <div class="productInfo__price" style="color:red">
                            {{$giaMoi}} <span class="priceInfo__unit"></span>
                        </div>
                        <div class="productInfo__description">
                            <span>{{$sanpham->ten}}</span> {{$sanpham->mota}}
                        </div>

                        <div class="productInfo__addToCart">
                            <div class="buttons_added">
                                <input class="minus is-form" type="button" value="-" onclick="minusProduct()">
                                <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                                <input class="plus is-form" type="button" value="+" onclick="plusProduct()">
                            </div>

                            <form method="post" action="{{ route('cart.add') }}">
                                @csrf
                                <input type="hidden" value="{{ $sanpham->sanpham_id }}" name='sanpham_id'>

                                <button type="submit" class=" btn btn--default orange ">Thêm vào giỏ</button>
                            </form>


                        </div>
                        <div class="productIndfo__policy ">
                            <div class="policy bg-1 ">
                                <img src="{{asset('img/policy/policy1.png')}}" class="policy__img"></img>
                                <div class="productIndfo__policy-info ">
                                    <h3 class="productIndfo__policy-title ">Giao hàng miễn phí</h3>
                                    <p class="productIndfo__policy-description ">Cho đơn hàng từ 300K</p>
                                </div>
                            </div>
                            <div class="policy bg-2 ">
                                <img src="{{asset('img/policy/policy1.png')}}" class="policy__img"></img>
                                <div class="productIndfo__policy-info ">
                                    <h3 class="productIndfo__policy-title ">Giao hàng miễn phí</h3>
                                    <p class="productIndfo__policy-description ">Cho đơn hàng từ 300K</p>
                                </div>
                            </div>
                            <div class="policy bg-1 ">
                                <img src="{{asset('img/policy/policy1.png')}}" class="policy__img"></img>
                                <div class="productIndfo__policy-info ">
                                    <h3 class="productIndfo__policy-title ">Giao hàng miễn phí</h3>
                                    <p class="productIndfo__policy-description ">Cho đơn hàng từ 300K</p>
                                </div>
                            </div>
                            <div class="policy bg-2 ">
                                <img src="{{asset('img/policy/policy1.png')}}" class="policy__img"></img>
                                <div class="productIndfo__policy-info ">
                                    <h3 class="productIndfo__policy-title ">Giao hàng miễn phí</h3>
                                    <p class="productIndfo__policy-description ">Cho đơn hàng từ 300K</p>
                                </div>
                            </div>
                        </div>
                        <div class="productIndfo__category ">
                            <p class="productIndfo__category-text"> Danh mục : <a href="# " class="productIndfo__category-link ">{{$sanpham->danhmucsp_id}}</a></p>

                            <p class="productIndfo__category-text"> Số lượng đã bán : <span>{{$sanpham->soluongdaban }}</span> </p>
                            <p class="productIndfo__category-text"> Số lượng trong kho : <span>{{$sanpham->soluongtrongkho}}</span> </p>
                        </div>
                    </div>
                    <br>
                </div>
                @else
                <p>Sản phẩm không tồn tại.</p>
                @endif
            </div>
            <div class="productDetail ">
                <div class="main__tabnine ">
                    <div class="grid wide ">
                        <!-- Tab items -->
                        <div class="tabs ">
                            <div class="tab-item active ">
                                Mô tả
                            </div>
                            <div class="tab-item ">
                                Đánh giá
                            </div>
                            <div class="line "></div>
                        </div>
                        <!-- Tab content -->
                        <div class="tab-content ">
                            <div class="tab-pane active ">
                                <div class="productDes ">

                                    <div class="productDes__title ">Lorem Ipsum là gì?</div>
                                    <p class="productDes__text "> <a href="# " class="productDes__link ">Lorem Ipsum </a> chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành
                                        công nghiệp in ấn từ những năm 1500, khi một họa sĩ vô danh ghép nhiều đoạn văn bản với nhau để tạo thành một bản mẫu văn bản. Đoạn văn bản này không những đã tồn tại năm thế kỉ, mà khi được áp dụng vào tin học
                                        văn phòng, nội dung của nó vẫn không hề bị thay đổi. Nó đã được phổ biến trong những năm 1960 nhờ việc bán những bản giấy Letraset in những đoạn Lorem Ipsum, và gần đây hơn, được sử dụng trong các ứng dụng dàn trang,
                                        như Aldus PageMaker.
                                    </p>
                                    <div class="productDes__title ">Lorem Ipsum là gì?</div>
                                    <p class="productDes__text "> <a href="# " class="productDes__link ">Lorem Ipsum </a> chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành
                                        công nghiệp in ấn từ những năm 1500, khi một họa sĩ vô danh ghép nhiều đoạn văn bản với nhau để tạo thành một bản mẫu văn bản. Đoạn văn bản này không những đã tồn tại năm thế kỉ, mà khi được áp dụng vào tin học
                                        văn phòng, nội dung của nó vẫn không hề bị thay đổi. Nó đã được phổ biến trong những năm 1960 nhờ việc bán những bản giấy Letraset in những đoạn Lorem Ipsum, và gần đây hơn, được sử dụng trong các ứng dụng dàn trang,
                                        như Aldus PageMaker.
                                    </p>
                                </div>

                            </div>
                            <div class="tab-pane ">
                                <div class="productDes__ratting ">
                                    <div class="productDes__ratting-title ">Đánh giá của bạn</div>
                                    <div class="productDes__ratting-wrap">
                                        <div id="rating">
                                            <input type="radio" id="star5" name="rating" value="5" />
                                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>

                                            <input type="radio" id="star4" name="rating" value="4" />
                                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>

                                            <input type="radio" id="star3" name="rating" value="3" />
                                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>

                                            <input type="radio" id="star2" name="rating" value="2" />
                                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>

                                            <input type="radio" id="star1" name="rating" value="1" />
                                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>

                                            <input type="radio" id="starhalf" name="rating" value="half" />
                                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                        </div>
                                        <textarea class="ratecomment" name=" " id=" " cols="30 " rows="1" placeholder="Vui lòng viết đánh giá của bạn "></textarea>
                                    </div>
                                    <button type="submit " class="btn btn--default">Đánh giá</button>
                                </div>

                                @if(isset($danhgia))
                                @foreach($danhgia as $row)
                                <ul class="rate__list">
                                    <li class="rate__item">
                                        <div class="rate__info">
                                            <img src="https://lh3.googleusercontent.com/ogw/ADGmqu9PFgn_rHIm9i3eIlVr5RwzwY2w8EystHF213wj=s32-c-mo" alt="">
                                            <h3 class="rate__user">Giang Tuấn Phương</h3>
                                            <div class="rate__star">
                                                <div class="group-star">
                                                    {{$row->sao}}
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rate__comment">{{$row->binhluan}}</div>
                                    </li>
                                </ul>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            @yield('content')
            <!-- Messenger Plugin chat Code -->
            <div id="fb-root"></div>

            <!-- Your Plugin chat code -->
            <div id="fb-customer-chat" class="fb-customerchat">
            </div>

            <script>
                function minusProduct() {
                    var inputQty = document.querySelector('.input-qty');
                    var currentValue = parseInt(inputQty.value);
                    if (currentValue > 1) {
                        inputQty.value = currentValue - 1;
                        updateCartQuantity(currentValue - 1);
                    }
                }

                function plusProduct() {
                    var inputQty = document.querySelector('.input-qty');
                    var currentValue = parseInt(inputQty.value);
                    var maxValue = parseInt(inputQty.getAttribute('max'));
                    if (currentValue < maxValue) {
                        inputQty.value = currentValue + 1;
                        updateCartQuantity(currentValue + 1);
                    }
                }
            </script>

            <script>
                var chatbox = document.getElementById('fb-customer-chat');
                chatbox.setAttribute("page_id", "105913298384666");
                chatbox.setAttribute("attribution", "biz_inbox");
                window.fbAsyncInit = function() {
                    FB.init({
                        xfbml: true,
                        version: 'v10.0'
                    });
                };

                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
            <script>
                $(document).ready(function() {
                    var sync1 = $("#sync1 ");
                    var sync2 = $("#sync2 ");
                    var slidesPerPage = 4;
                    var syncedSecondary = true;
                    sync1.owlCarousel({
                        items: 1,
                        loop: true,
                        margin: 20,
                        nav: true,
                        dots: false,
                        autoplay: true,
                        autoplayTimeout: 4000,
                        autoplayHoverPause: true
                    })
                    sync2
                        .on('initialized.owl.carousel', function() {
                            sync2.find(".owl-item ").eq(0).addClass("current ");
                        })
                        .owlCarousel({
                            items: 4,
                            dots: false,
                            nav: false,
                            margin: 30,
                            smartSpeed: 200,
                            slideSpeed: 500,
                            slideBy: 4,
                            responsiveRefreshRate: 100
                        }).on('changed.owl.carousel', syncPosition2);

                    function syncPosition(el) {
                        var count = el.item.count - 1;
                        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

                        if (current < 0) {
                            current = count;
                        }
                        if (current > count) {
                            current = 0;
                        }

                        //end block

                        sync2
                            .find(".owl-item ")
                            .removeClass("current ")
                            .eq(current)
                            .addClass("current ");
                        var onscreen = sync2.find('.owl-item.active').length - 1;
                        var start = sync2.find('.owl-item.active').first().index();
                        var end = sync2.find('.owl-item.active').last().index();

                        if (current > end) {
                            sync2.data('owl.carousel').to(current, 100, true);
                        }
                        if (current < start) {
                            sync2.data('owl.carousel').to(current - onscreen, 100, true);
                        }
                    }

                    function syncPosition2(el) {
                        if (syncedSecondary) {
                            var number = el.item.index;
                            sync1.data('owl.carousel').to(number, 100, true);
                        }
                    }

                    sync2.on("click ", ".owl-item ", function(e) {
                        e.preventDefault();
                        var number = $(this).index();
                        sync1.data('owl.carousel').to(number, 300, true);
                    });
                });

                $('.owl-carousel.hight').owlCarousel({
                    loop: true,
                    margin: 20,
                    nav: true,
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 2
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 6
                        }
                    }
                })
            </script>

            <!-- Script common -->
            <script src="{{asset('js/commonscript.js')}} ">
            </script>
            <script>
                function calcRate(r) {
                    const f = ~~r, //Tương tự Math.floor(r)
                        id = 'star' + f + (r % f ? 'half' : '')
                    id && (document.getElementById(id).checked = !0)
                }
            </script>
</body>

</html>
@endsection