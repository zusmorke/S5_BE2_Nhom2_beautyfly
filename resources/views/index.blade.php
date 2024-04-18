@extends('layout')

@section('main')
<!--Slide -->
<div class="slider-area pos-rltv carosule-pagi cp-line">
    @include('slide')
</div>

            <div class="grid wide">
                <!-- Tab items -->
                <div class="tabs">
                    <div class="tab-item active" style="color: green;">
                        Bán Chạy
                    </div>
                    <div class="tab-item" style="color: green;">
                        Giá tốt
                    </div>
                    <div class="tab-item" style="color: green;">
                        Mới Nhập
                    </div>
                    <div class="line" style="background-color: green;"></div>
                </div>
                <!-- Tab content -->
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="row">
                            @foreach($data as $row)
                            <div class="col l-2 m-4 s-6">
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

            </div>
        </div>

        <!-- HightLight  -->
        <div class="main__frame" style="background: #f2fbf7;">
            <div class="grid wide">
                <h3 class="category__title">Nhóm 2 Cometics</h3>
                <h3 class="category__heading">SẢN PHẨM NỔI BẬT</h3>
                <div class="owl-carousel hight owl-theme" id="productCarousel">
                    @foreach($data as $index => $row)
                    <div class="product">
                        <div class="product__avt">
                        <img src="{{asset('img/product/' . $row->hinh)}}" alt="" class="product__image">
                        </div>
                        <div class="product__info">
                            <h3 class="product__name"><a href="{{url('listProduct')}}" style="color:#0daf74">{{$row->ten}}</a></h3>
                            <div class="product__price">
                                <div class="price__new" style="color: red">{{ $row->gia }}<span class="price__unit">đ</span></div>
                            </div>
                            <div class="product__sale">
                                <span class="product__sale-percent">23</span>
                                <span class="product__sale-text">Giảm</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Sales Policy -->
        <div class="main__policy">
            <div class="row">
                <div class="col l-3 m-6">
                    <div class="policy bg-1">
                        <img src="{{asset('img/policy/policy1.png')}}" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">GIAO HÀNG MIỄN PHÍ</h3>
                            <p class="policy__description">Cho đơn hàng từ 300K</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6">
                    <div class="policy bg-2" style="background: #0daf74;">
                        <img src="{{asset('img/policy/policy2.png')}}" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">ĐỔI TRẢ HÀNG</h3>
                            <p class="policy__description">Trong 3 ngày đầu tiên</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6">
                    <div class="policy bg-1">
                        <img src="{{asset('img/policy/policy3.png')}}" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">HÀNG CHÍNH HÃNG</h3>
                            <p class="policy__description">Cam kết chất lượng</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6">
                    <div class="policy bg-2" style="background: #0daf74;">
                        <img src="{{asset('img/policy/policy4.png')}}" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">TƯ VẤN 24/24</h3>
                            <p class="policy__description">Giải đáp mọi thắc mắc</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- News -->
        <div class="main__frame bg-3">
            <div class="grid wide">
                <h3 class="category__title">Nhóm 2 Cometics</h3>
                <h3 class="category__heading">Tin Tức</h3>
                <div class="owl-carousel news owl-theme">
                    <a href="{{url('news')}}" class="news">
                        <div class="news__img">
                            <img src="{{asset('img/news/news1.jpg')}}" alt="">
                        </div>
                        <div class="news__body">
                            <h3 class="news__body-title">Trang điểm đúng cách</h3>
                            <div class="new__body-date">13/6/2021</div>
                            <p class="news__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In sit molestiae aperiam modi cum deserunt, maxime blanditiis voluptate officiis accusantium minima pariatur harum tenetur quo iste iusto commodi. Modi, culpa?
                            </p>
                        </div>
                    </a>
                    <a href="{{url('news')}}" class="news">
                        <div class="news__img">
                            <img src="{{asset('img/news/news1.jpg')}}" alt="">
                        </div>
                        <div class="news__body">
                            <h3 class="news__body-title">Trang điểm đúng cách</h3>
                            <div class="new__body-date">13/6/2021</div>
                            <p class="news__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In sit molestiae aperiam modi cum deserunt, maxime blanditiis voluptate officiis accusantium minima pariatur harum tenetur quo iste iusto commodi. Modi, culpa?
                            </p>
                        </div>
                    </a>
                    <a href="{{url('news')}}" class="news">
                        <div class="news__img">
                            <img src="{{asset('img/news/news1.jpg')}}" alt="">
                        </div>
                        <div class="news__body">
                            <h3 class="news__body-title">Trang điểm đúng cách</h3>
                            <div class="new__body-date">13/6/2021</div>
                            <p class="news__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In sit molestiae aperiam modi cum deserunt, maxime blanditiis voluptate officiis accusantium minima pariatur harum tenetur quo iste iusto commodi. Modi, culpa?
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="line1"></div>
        <div class="main__bands">
            <div class="grid wide">
                <div class="owl-carousel bands">
                    <a href="{{url('listProduct')}}" class="band__item" style="background-image: url(img/band/band1.png);"></a>
                    <a href="{{url('listProduct')}}" class="band__item" style="background-image: url(img/band/band2.png)"></a>
                    <a href="{{url('listProduct')}}" class="band__item" style="background-image: url(img/band/band3.png)"></a>
                    <a href="{{url('listProduct')}}" class="band__item" style="background-image: url(img/band/band4.png)"></a>
                    <a href="{{url('listProduct')}}" class="band__item" style="background-image: url(img/band/band5.png)"></a>
                    <a href="{{url('listProduct')}}" class="band__item" style="background-image: url(img/band/band6.png)"></a>
                    <a href="{{url('listProduct')}}" class="band__item" style="background-image: url(img/band/band7.png)"></a>
                </div>
            </div>
        </div>
        <div class="line"></div>
@endsection