@extends('site.layouts.master')
@section('title'){{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')
    <link rel="preload" as='style' type="text/css"
          href="/site/assets/index.scss75d3.css?1719476197344">
    <link href="/site/assets/index.scss75d3.css?1719476197344" rel="stylesheet"
          type="text/css" media="all"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        /* tinh chỉnh nhẹ để cảm giác mượt */
        .wow{ will-change: transform, opacity; }

        /* tôn trọng cài đặt hệ điều hành */
        @media (prefers-reduced-motion: reduce){
            .wow{ animation: none !important; visibility: visible !important; }
        }
    </style>
@endsection

@section('content')
    <div class="bodywrap" ng-controller="homePage">
        <div class="section_slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">


                    @foreach($banners as $banner)
                        <div class="swiper-slide">
                            <a href="#" class="clearfix" title="Slider 1">
                                <picture>
                                    <source
                                        media="(min-width: 1200px)"
                                        srcset="{{ $banner->image->path ?? '' }}">
                                    <source
                                        media="(min-width: 992px)"
                                        srcset="{{ $banner->image->path ?? '' }}">
                                    <source
                                        media="(min-width: 569px)"
                                        srcset="{{ $banner->image->path ?? '' }}">
                                    <source
                                        media="(max-width: 480px)"
                                        srcset="{{ $banner->image->path ?? '' }}">
                                    <img width="1920" height="600"
                                         src="{{ $banner->image->path ?? '' }}"
                                         alt="Slider 1" class="img-responsive center-block duration-300"/>
                                </picture>
                            </a>
                        </div>

                    @endforeach



                </div>
                <div class="swiper-button-prev">
                    <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)"
                              stroke="black"
                              fill="#fff" stroke-width="2"/>
                        <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                        <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)"
                              stroke="black"
                              fill="#fff" stroke-width="2"/>
                        <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                        <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-progress-bar">
                    <div class="progress"></div>
                </div>
            </div>
        </div>
        <script>
            let swiperSlider = null;
            let progressBarInterval;

            function initProgressBar() {
                const progressBar = document.querySelector('.section_slider .swiper-progress-bar .progress');
                progressBar.style.width = 0;
            }

            function startProgressBar() {
                const progressBar = document.querySelector('.section_slider .swiper-progress-bar .progress');
                const duration = 8000;
                progressBarInterval = setInterval(function () {
                    let progress = parseFloat(progressBar.style.width) || 0;
                    progress += (100 / duration) * (1000 / 60);
                    progressBar.style.width = Math.min(progress, 100) + '%';
                }, 1000 / 60);
            }

            function resetProgressBar() {
                clearInterval(progressBarInterval);
                initProgressBar();
            }

            function initSwiperSlider() {
                swiperSlider = new Swiper('.section_slider .swiper-container', {
                    speed: 1000,
                    spaceBetween: 14,
                    effect: 'fade',
                    navigation: {
                        nextEl: '.section_slider .swiper-container .swiper-button-next',
                        prevEl: '.section_slider .swiper-container .swiper-button-prev',
                    },
                    autoplay: {
                        delay: 8000,
                        disableOnInteraction: false,
                    },
                    on: {
                        init: function () {
                            initProgressBar();
                            startProgressBar();
                        },
                        slideChangeTransitionStart: function () {
                            resetProgressBar();
                        },
                        slideChangeTransitionEnd: function () {
                            startProgressBar();
                        },
                    },
                    pagination: {
                        el: '.section_slider .swiper-container .swiper-pagination',
                        clickable: true,
                    },
                });
            }

            initSwiperSlider();

        </script>



        <div class="section_services">
            <div class="container">
                <div class="bg-container">
                    <div class="wire-left"></div>
                    <div class="wire-right"></div>
                    <div class="services-border">
                        <div class="row promo-box">


                            <div class="col-lg-3 col-md-3 col-sm-6 col-6 promo-item duration-300">
                                <div class="icon aspect-1">
                                    <img width="50" height="50" class="lazyload"
                                         data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/ser_1.png?1739018973665"
                                         alt="Sudes Nest"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                                </div>
                                <div class="info">
                                    <h3>
                                        Giao hàng siêu tốc
                                    </h3>
                                    <span>
								Giao hàng trong 24h
							</span>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-6 col-6 promo-item duration-300">
                                <div class="icon aspect-1">
                                    <img width="50" height="50" class="lazyload"
                                         data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/ser_2.png?1739018973665"
                                         alt="Sudes Nest"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                                </div>
                                <div class="info">
                                    <h3>
                                        Tư vấn miễn phí
                                    </h3>
                                    <span>
								Đội ngũ tư vấn tận tình
							</span>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-6 col-6 promo-item duration-300">
                                <div class="icon aspect-1">
                                    <img width="50" height="50" class="lazyload"
                                         data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/ser_3.png?1739018973665"
                                         alt="Sudes Nest"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                                </div>
                                <div class="info">
                                    <h3>
                                        Thanh toán
                                    </h3>
                                    <span>
								Thanh toán an toàn
							</span>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-6 col-6 promo-item duration-300">
                                <div class="icon aspect-1">
                                    <img width="50" height="50" class="lazyload"
                                         data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/ser_4.png?1739018973665"
                                         alt="Sudes Nest"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                                </div>
                                <div class="info">
                                    <h3>
                                        Giải pháp quà tặng
                                    </h3>
                                    <span>
								Dành cho doanh nghiệp
							</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <style>
            .section-index .section-title h2.sub-1 {
                font-size: 5.2rem;
                font-weight: 400;
                font-family: "UTMYenTu", serif; !important;
                text-transform: none;
            }

        </style>


        <style>
            /* ----- Section title + round logo ----- */
            .section-title.with-logo{
                text-align:center;
                padding: 10px 0 0;
            }

            .section-title .sub-1{
                /*margin: 8px 0 0;*/
                font-weight:400;
                line-height:1.2;
                /* nếu bạn đã load UTMYenTu thì ưu tiên dùng */
                font-family: "UTMYenTu","Dancing Script",cursive;
                font-size: clamp(22px, 3.6vw, 42px);
            }


            /* Hình tròn */
            .title-logo{
                width: 150px;
                height: 150px;
                margin: 0 auto 8px;
                border-radius: 50%;
                /*background: #d9ead7;                */
                /*border: 3px solid #b7d0b2;          */
                display: grid;
                place-items: center;
                /*box-shadow: 0 8px 22px rgba(0,0,0,.06);*/
                overflow:hidden;                      /* nếu logo vuông vẫn tròn gọn */
            }
            .title-logo img{
                /*width: 78%;*/
                /*height: 78%;*/
                object-fit: contain;
                border-radius: 50%;
            }

            /* Responsive nhỏ hơn ở mobile */
            @media (max-width: 576px){
                .title-logo{ width: 74px; height: 74px; margin-bottom: 6px; }
                .section-title .sub-1{ font-size: clamp(20px, 5vw, 30px); }
            }

        </style>

        <section class="section-index section_about"    data-wow-offset="120">
            <div class="section-title with-logo " >
                <!-- LOGO TRÒN -->
                <figure class="title-logo wow animate__fadeInUp"  data-wow-delay=".35s"
                        data-wow-duration="2.2s">
                    <img src="{{ $about->logo->path ?? '' }}" alt="">
                </figure>

                <h2 class="sub-1 wow animate__fadeInUp"  data-wow-delay=".35s"
                    data-wow-duration="2.2s">
                    <a href="#" title="">
                        {{ $about->service_title }}
                    </a>
                </h2>
            </div>




            <div class="bg-banner wow animate__fadeInUp" data-wow-delay=".35s"
                 data-wow-duration="2.2s">
                <div class="container">



                    <div class="row">
                        <div class="col-12 col-lg-6 col-md-12 col-left">
                            <div class="product-content">
                                <div class="section-title">

							<span class="sub-title">
								{{ $about->sub_title }}
							</span>

                                    <h2>
                                        {{ $about->title }}
                                    </h2>
                                    <div class="title-separator">
                                        <div class="separator-center"></div>
                                    </div>
                                </div>

                                <div class="desc">
                                    {!! $about->intro !!}
                                </div>


                                <a href="{{ route('front.abouts') }}" title="Tìm hiểu thêm" class="show-more btn btn-extent frame">
                                    <svg width="14" height="32" viewBox="0 0 14 32" fill="none"
                                         xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-left">
                                        <path
                                            d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                            fill="none"/>
                                        <path
                                            d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                            stroke="white"/>
                                    </svg>
                                    Tìm hiểu thêm
                                    <svg width="14" height="32" viewBox="0 0 14 32" fill="none"
                                         xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-right">
                                        <path
                                            d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                            fill="none"/>
                                        <path
                                            d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                            stroke="white"/>
                                    </svg>
                                </a>

                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-12 col-right">
                            <div class="banner-product">
                                <img width="600" height="371"
                                     src="{{ $about->image->path ?? '' }}"
                                     data-src="{{ $about->image->path ?? '' }}"
                                     alt="Sudes Banner" class="img-responsive center-block lazyload"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @foreach($categoriesSpecial as $cateSpecial)
            <section class="section-index section_flash_sale  wow animate__fadeInLeft" data-wow-delay=".25s"
                     data-wow-duration="1.2s"   data-wow-offset="120">
                <div class="container">
                    <div class="section-title">

			<span class="sub-title">
				{{ $config->short_name_company }}
			</span>

                        <h2 class="sub-1">
                            <a href="#" title=" {{ $cateSpecial->name }}">
                               {{ $cateSpecial->name }}
                            </a>
                        </h2>
                        <div class="title-separator">
                            <div class="separator-center"></div>
                        </div>
                    </div>
                    <div class="block-product-sale ">


                        <div class="swiper_sale swiper-container">
                            <div class="swiper-wrapper load-after" data-section="section_flash_sale">


{{--                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">--}}
{{--                                    <div class="item_product_main">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">--}}
{{--                                    <div class="item_product_main">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">--}}
{{--                                    <div class="item_product_main">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">--}}
{{--                                    <div class="item_product_main">--}}
{{--                                    </div>--}}
{{--                                </div>--}}




                                    @foreach($cateSpecial->products as $product)
                                        <div class="swiper-slide">
                                            <div class="item_product_main">

                                                <form
                                                      class="variants product-action item-product-main product-flash-sale duration-300"
                                                      >
                                                    @if($product->base_price > 0 )
                                                        <span class="flash-sale">-{{ $product->percent_discount }}%
                                                            </span>
                                                    @endif



                                                    <div class="product-thumbnail">
                                                        <a class="image_thumb scale_hover"
                                                           href="{{ route('front.getProductDetail', $product->slug) }}"
                                                           title="{{ $product->name }}">
                                                            <img class="lazyload duration-300"
                                                                 src="{{ $product->image->path ?? '' }}"
                                                                 data-src="{{ $product->image->path ?? '' }}"
                                                                 alt="{{ $product->name }}">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="name-price">
                                                            <h3 class="product-name line-clamp-2-new">
                                                                <a href="{{ route('front.getProductDetail', $product->slug) }}"
                                                                   title="{{ $product->name }}">{{ $product->name }}</a>
                                                            </h3>
                                                            <div class="product-price-cart">
                                                                @if($product->price > 0)
                                                                    @if($product->base_price > 0)
                                                                        <span class="compare-price">{{ formatCurrency($product->base_price) }}₫</span>
                                                                    @endif

                                                                    <span class="price">{{ formatCurrency($product->price) }}₫</span>
                                                                @else
                                                                    <span class="price">Liên hệ</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="product-button">
                                                            <button class="btn-cart btn-views btn btn-primary " ng-click="addToCart({{ $product->id }})"
                                                                    title="Thêm vào giỏ hàng">
                                                                <span>Thêm vào giỏ</span>
                                                                <svg enable-background="new 0 0 32 32" height="512"
                                                                     viewBox="0 0 32 32" width="512"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <g>
                                                                        <g>
                                                                            <path d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z"/>
                                                                        </g>
                                                                        <g>
                                                                            <path d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z"/>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </button>

                                                            <a href="javascript:void(0)" ng-click="addToMyHeart({{ $product->id }})"
                                                               class="btn-views btn-circle"
                                                               tabindex="0" title="Thêm vào yêu thích">
                                                                <img width="25" height="25"
                                                                     src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/heart.png?1739018973665"
                                                                     alt="Thêm vào yêu thích"/>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    @endforeach




                            </div>
                            <div class="swiper-button-prev">
                                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)"
                                          stroke="black" fill="#fff" stroke-width="2"/>
                                    <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)"
                                          fill="black"/>
                                    <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="swiper-button-next">
                                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)"
                                          stroke="black" fill="#fff" stroke-width="2"/>
                                    <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)"
                                          fill="black"/>
                                    <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>

                        <div class="view-more clearfix">
                            <a href="{{ route('front.getProductList') }}" title="Xem tất cả" class="btn btn-primary frame">
                                <svg width="14" height="32" viewBox="0 0 14 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                                     class="border-svg border-svg-left">
                                    <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                          fill="none"/>
                                    <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                          stroke="white"/>
                                </svg>
                                Xem tất cả
                                <svg width="14" height="32" viewBox="0 0 14 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                                     class="border-svg border-svg-right">
                                    <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                          fill="none"/>
                                    <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                          stroke="white"/>
                                </svg>
                            </a>
                        </div>


                    </div>
                </div>
            </section>

        @endforeach


        <script>
            $(document).ready(function ($) {
                function runSwiperSale() {
                    var swiper_sale = null;

                    function initSwiperSale() {
                        swiper_sale = new Swiper('.swiper_sale', {
                            slidesPerView: 4,
                            spaceBetween: 20,
                            slidesPerGroup: 1,
                            navigation: {
                                nextEl: '.swiper_sale .swiper-button-next',
                                prevEl: '.swiper_sale .swiper-button-prev',
                            },
                            breakpoints: {
                                768: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                },
                                992: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                },
                                1024: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                }
                            }
                        });
                    }

                    function destroySwiperSale() {
                        if (swiper_sale) {
                            swiper_sale.destroy(true, true);
                            swiper_sale = null;
                        }
                    }

                    function toggleSwiperSale() {
                        if ($(window).width() <= 767 && swiper_sale) {
                            destroySwiperSale();
                        } else if ($(window).width() > 767 && !swiper_sale) {
                            initSwiperSale();
                        }
                    }

                    toggleSwiperSale();
                    $(window).resize(toggleSwiperSale);
                }

                lazyBlockProduct('section_flash_sale', '0px 0px -250px 0px', runSwiperSale);
            });

            (function ($) {
                "user strict";
                $.fn.Dqdt_CountDown = function (options) {
                    return this.each(function () {
                        new $.Dqdt_CountDown(this, options);
                    });
                }
                $.Dqdt_CountDown = function (obj, options) {
                    this.options = $.extend({
                        autoStart: true,
                        LeadingZero: true,
                        DisplayFormat: "<div><span>%%D%%</span> Days</div><div><span>%%H%%</span> Hours</div><div><span>%%M%%</span> Mins</div><div><span>%%S%%</span> Secs</div>",
                        FinishMessage: "Háº¿t háº¡n",
                        CountActive: true,
                        TargetDate: null
                    }, options || {});
                    if (this.options.TargetDate == null || this.options.TargetDate == '') {
                        return;
                    }
                    this.timer = null;
                    this.element = obj;
                    this.CountStepper = -1;
                    this.CountStepper = Math.ceil(this.CountStepper);
                    this.SetTimeOutPeriod = (Math.abs(this.CountStepper) - 1) * 1000 + 990;
                    var dthen = new Date(this.options.TargetDate);
                    var dnow = new Date();
                    if (this.CountStepper > 0) {
                        ddiff = new Date(dnow - dthen);
                    } else {
                        ddiff = new Date(dthen - dnow);
                    }
                    gsecs = Math.floor(ddiff.valueOf() / 1000);
                    this.CountBack(gsecs, this);
                };
                $.Dqdt_CountDown.fn = $.Dqdt_CountDown.prototype;
                $.Dqdt_CountDown.fn.extend = $.Dqdt_CountDown.extend = $.extend;
                $.Dqdt_CountDown.fn.extend({
                    calculateDate: function (secs, num1, num2) {
                        var s = ((Math.floor(secs / num1)) % num2).toString();
                        if (this.options.LeadingZero && s.length < 2) {
                            s = "0" + s;
                        }
                        return "<b>" + s + "</b>";
                    },
                    CountBack: function (secs, self) {
                        if (secs < 0) {
                            self.element.innerHTML = '<div class="lof-labelexpired"> ' + self.options.FinishMessage + "</div>";
                            return;
                        }
                        clearInterval(self.timer);
                        DisplayStr = self.options.DisplayFormat.replace(/%%D%%/g, self.calculateDate(secs, 86400, 100000));
                        DisplayStr = DisplayStr.replace(/%%H%%/g, self.calculateDate(secs, 3600, 24));
                        DisplayStr = DisplayStr.replace(/%%M%%/g, self.calculateDate(secs, 60, 60));
                        DisplayStr = DisplayStr.replace(/%%S%%/g, self.calculateDate(secs, 1, 60));
                        self.element.innerHTML = DisplayStr;
                        if (self.options.CountActive) {
                            self.timer = null;
                            self.timer = setTimeout(function () {
                                self.CountBack((secs + self.CountStepper), self);
                            }, (self.SetTimeOutPeriod));
                        }
                    }
                });
                $(document).ready(function () {
                    $('[data-countdown="countdown"]').each(function (index, el) {
                        var $this = $(this);
                        var $date = $this.data('date').split("-");
                        $this.Dqdt_CountDown({
                            TargetDate: $date[0] + "/" + $date[1] + "/" + $date[2] + " " + $date[3] + ":" + $date[4] + ":" + $date[5],
                            DisplayFormat: "<div class=\"block-timer\"><p>%%D%%</p><span>Ngày</span></div><div class=\"block-timer\"><p>%%H%%</p><span>Giờ</span></div><div class=\"block-timer\"><p>%%M%%</p><span>Phút</span></div><div class=\"block-timer\"><p>%%S%%</p><span>Giây</span></div>",
                            FinishMessage: "Chương trình đã hết hạn"
                        });
                    });
                });
            })(jQuery);

        </script>





        <style>
            .section_about .bg-banner {
                padding: 80px 0;
                overflow: hidden;
                background: var(--mainColor) url({{ $about->banner->path ?? '' }}) bottom left / cover no-repeat;
                border-top: 4px solid var(--hover);
                border-bottom: 4px solid var(--hover);
            }
        </style>








        <section class="section-index section_why_choise wow animate__fadeInRight" data-wow-delay=".25s"
                 data-wow-duration="1.2s"   data-wow-offset="120" >
            <div class="container">
                <div class="section-title">

			<span class="sub-title">
				{{ $config->short_name_company }}
			</span>

                    <h2 class="sub-1">
                        Vì sao chọn chúng tôi
                    </h2>
                    <div class="title-separator">
                        <div class="separator-center"></div>
                    </div>
                </div>
                <div class="wrap-choise row">
                    <div class="col col-left col-md-4 col-xs-12 col-12">
                        <div class="wrap-choise-mb">

                            <div class="choise_item">
                                <div class="img_choise">
                                    <img class="lazyload" alt="Nguyên liệu cao cấp"
                                         data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_1_icon.png?1739018973665"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                                </div>
                                <div class="text_choise">
                                    <h3>Nguyên liệu cao cấp</h3>
                                    <div class="content_choise">Hoàn toàn được gia công</div>
                                </div>
                            </div>


                            <div class="choise_item">
                                <div class="img_choise">
                                    <img class="lazyload" alt="Chất lượng tuyệt đối"
                                         data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_2_icon.png?1739018973665"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                                </div>
                                <div class="text_choise">
                                    <h3>Chất lượng tuyệt đối</h3>
                                    <div class="content_choise">100% tự nhiên</div>
                                </div>
                            </div>


                            <div class="choise_item">
                                <div class="img_choise">
                                    <img class="lazyload" alt="Sản phẩm"
                                         data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_3_icon.png?1739018973665"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                                </div>
                                <div class="text_choise">
                                    <h3>Sản phẩm</h3>
                                    <div class="content_choise">Đạt chuẩn ATVSTP</div>
                                </div>
                            </div>


                            <div class="choise_item d-md-none">
                                <div class="img_choise">
                                    <img class="lazyload" alt="Giá cả hợp lý"
                                         data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_4_icon.png?1739018973665"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                                </div>
                                <div class="text_choise">
                                    <h3>Giá cả hợp lý</h3>
                                    <div class="content_choise">Không qua trung gian</div>
                                </div>
                            </div>


                            <div class="choise_item d-md-none">
                                <div class="img_choise">
                                    <img class="lazyload" alt="Giao hàng"
                                         data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_5_icon.png?1739018973665"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                                </div>
                                <div class="text_choise">
                                    <h3>Giao hàng</h3>
                                    <div class="content_choise">Siêu tốc trong 24h</div>
                                </div>
                            </div>


                            <div class="choise_item d-md-none">
                                <div class="img_choise">
                                    <img class="lazyload" alt="Thanh toán"
                                         data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_6_icon.png?1739018973665"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                                </div>
                                <div class="text_choise">
                                    <h3>Thanh toán</h3>
                                    <div class="content_choise">Đa dạng và an toàn</div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-center col-md-4 col-xs-12 col-12">
                        <div class="banner-product">
                            <img width="429" height="499" alt="Vì sao chọn chúng tôi"
                                 data-src="{{ $whyBlock->image->path ?? '' }}"
                                 src="{{ $whyBlock->image->path ?? '' }}"
                                 class="lazyload"/>
                        </div>
                    </div>
                    <div class="col col-right col-md-4 col-xs-12 col-12">

                        <div class="choise_item">
                            <div class="img_choise">
                                <img class="lazyload" alt="Giá cả hợp lý"
                                     data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_4_icon.png?1739018973665"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                            </div>
                            <div class="text_choise">
                                <h3>Giá cả hợp lý</h3>
                                <div class="content_choise">Không qua trung gian</div>
                            </div>
                        </div>


                        <div class="choise_item">
                            <div class="img_choise">
                                <img class="lazyload" alt="Giao hàng"
                                     data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_5_icon.png?1739018973665"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                            </div>
                            <div class="text_choise">
                                <h3>Giao hàng</h3>
                                <div class="content_choise">Siêu tốc trong 24h</div>
                            </div>
                        </div>


                        <div class="choise_item">
                            <div class="img_choise">
                                <img class="lazyload" alt="Thanh toán"
                                     data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_6_icon.png?1739018973665"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                            </div>
                            <div class="text_choise">
                                <h3>Thanh toán</h3>
                                <div class="content_choise">Đa dạng và an toàn</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>








        <section class="section-index section_feedback wow animate__fadeInUp" data-wow-delay=".25s"
                 data-wow-duration="1.2s"   data-wow-offset="120">
            <div class="bg-section">
                <div class="container">
                    <div class="section-title">

				<span class="sub-title">
					{{ $config->short_name_company }}
				</span>

                        <h2>
                            Khách hàng nói về chúng tôi
                        </h2>


                        <div class="title-separator">
                            <div class="separator-center"></div>
                        </div>
                    </div>
                    <div class="swiper_feedback swiper-container control-top">
                        <div class="swiper-wrapper">

                            @foreach($feedbacks as $feedback)
                                <div class=" swiper-slide">
                                    <div class="avatar">
                                        <img
                                            data-src="{{ $feedback->image->path ?? '' }}"
                                            alt="" width="200" height="200" class="lazyload"
                                            src="{{ $feedback->image->path ?? '' }}"/>
                                    </div>
                                    <div class="feedback-item">
                                        <div class="block-content">
                                            <b>
                                              {{ $feedback->name }}
                                            </b>
                                            <span>
									  {{ $feedback->position }}
								</span>
                                            <div class="feedback-content">
                                                {!! $feedback->message !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                        <div class="swiper-button-prev">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)"
                                      stroke="black" fill="#fff" stroke-width="2"/>
                                <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)"
                                      fill="black"/>
                                <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)"
                                      stroke="black" fill="#fff" stroke-width="2"/>
                                <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)"
                                      fill="black"/>
                                <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <script>
            var swiper_feedback = null;

            function initSwiperFeedback() {
                swiper_feedback = new Swiper('.swiper_feedback', {
                    slidesPerView: 3,
                    spaceBetween: 20,
                    watchOverflow: true,
                    slidesPerGroup: 1,
                    grabCursor: true,
                    navigation: {
                        nextEl: '.section_feedback .swiper-button-next',
                        prevEl: '.section_feedback .swiper-button-prev',
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 14
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 14
                        },
                        992: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        1024: {
                            slidesPerView: 2.5,
                            spaceBetween: 20
                        },
                        1200: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        }
                    }
                });
            }

            function destroySwiperFeedback() {
                if (swiper_feedback) {
                    swiper_feedback.destroy(true, true);
                    swiper_feedback = null;
                }
            }

            function toggleSwiperFeedback() {
                if ($(window).width() <= 767 && swiper_feedback) {
                    destroySwiperFeedback();
                } else if ($(window).width() > 767 && !swiper_feedback) {
                    initSwiperFeedback();
                }
            }

            toggleSwiperFeedback();
            $(window).on('resize', function () {
                toggleSwiperFeedback();
            });
        </script>


        <section class="section-index section_blog wow animate__fadeInLeft" data-wow-delay=".25s"
                 data-wow-duration="1.2s"   data-wow-offset="120">
            <div class="container">
                <div class="section-title">

			<span class="sub-title">
				{{ $config->short_name_company }}
			</span>

                    <h2>
                        <a href="{{ route('front.blogs') }}" title="Tin tức">
                            Tin tức
                        </a>
                    </h2>
                    <div class="title-separator">
                        <div class="separator-center"></div>
                    </div>
                </div>

                <div class="content-group3 row">
                    @if($blogs->count())
                        @php
                            $firstBlog = $blogs->first();
                            $blogs = $blogs->slice(1)->values();

                        @endphp
                    <div class="col-lg-4 col-md-12 big-news">

                        <a href="{{ route('front.blogDetail', $firstBlog->slug) }}"
                           title="{{ $firstBlog->title }}"
                           class="news-top_item_img clearfix">
                            <div class="grow-0">
                                <div class="item-img">

                                    <img
                                        src="{{ $firstBlog->image->path ?? '' }}"
                                        data-src="{{ $firstBlog->image->path ?? '' }}"
                                        alt="{{ $firstBlog->name }}"
                                        class="lazyload duration-300"/>

                                </div>
                            </div>
                            <div class="item-img-content">
                                <h3>{{ $firstBlog->name }}</h3>

                                <div class="content-des d-md-block d-lg-none line-clamp line-clamp-3">
                                    {{ $firstBlog->intro }}
                                </div>

                                <p class="time-post">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <span>
								{{ \Carbon\Carbon::parse($firstBlog->created_at)->format('d/m/Y') }}
							</span>
                                </p>
                            </div>
                        </a>

                    </div>



                    <div class="col-lg-8 col-md-12 list-news">
                        <div class="swapper-articles">

                            @foreach($blogs as $blog)
                                <a href="{{ route('front.blogDetail', $blog->slug) }}l"
                                   title="{{ $blog->name }}"
                                   class="news-top_item_img">
                                    <div class="grow-0">
                                        <div class="item-img">

                                            <img
                                                src="{{ $blog->image->path ?? '' }}"
                                                data-src="{{ $blog->image->path ?? '' }}"
                                                alt="{{ $blog->name }}"
                                                class="lazyload duration-300"/>

                                        </div>
                                    </div>
                                    <div class="item-img-content">
                                        <h3 class="line-clamp-2-new">{{ $blog->name }}</h3>
                                        <p class="time-post">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor"
                                                 class="bi bi-clock" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                                <path
                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                            </svg>
                                            <span>
								{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}
								</span>
                                        </p>
                                    </div>
                                </a>
                            @endforeach



                        </div>

                    </div>



                    <div class="col-12 col-xs-12 view-more">
                        <a class="btn btn-primary frame" href="{{ route('front.blogs') }}" title="Xem thêm">
                            <svg width="14" height="32" viewBox="0 0 14 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 class="border-svg border-svg-left">
                                <path
                                    d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                    fill="none"/>
                                <path
                                    d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                    stroke="white"/>
                            </svg>
                            Xem thêm
                            <svg width="14" height="32" viewBox="0 0 14 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 class="border-svg border-svg-right">
                                <path
                                    d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                    fill="none"/>
                                <path
                                    d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                    stroke="white"/>
                            </svg>
                        </a>
                    </div>
                    @endif
                </div>

            </div>
        </section>





        <div id="js-global-alert" class="alert alert-success" role="alert">
            <button type="button" class="close"><span aria-hidden="true"><span aria-hidden="true">&times;</span></span>
            </button>
            <h5 class="alert-heading"></h5>
            <p class="alert-content"></p>
        </div>

        @include('site.partials.popup_cart')

    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        // animate.css v4 dùng prefix animate__*
        new WOW({
            boxClass: 'wow',
            animateClass: 'animate__animated',
            offset: 80,          // bắt đầu sớm một chút trước khi vào viewport
            mobile: true,        // bật cho mobile; nếu muốn tắt, đổi thành false
            live: true,
            resetAnimation: false // chỉ chạy 1 lần (tránh lặp khi cuộn)
        }).init();
    </script>

    <script>
        app.controller('homePage', function ($rootScope, $scope, cartItemSync, loveItemSync, $interval) {
            $scope.cart = cartItemSync;

            $scope.addToCart = function (productId) {
                url = "{{route('cart.add.item', ['productId' => 'productId'])}}";
                url = url.replace('productId', productId);

                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: {
                        'qty': 1
                    },
                    success: function (response) {
                        if (response.success) {
                            $interval.cancel($rootScope.promise);
                            $rootScope.promise = $interval(function () {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);

                            $('.popup-cart-mobile, .backdrop__body-backdrop___1rvky').addClass('active');
                        }
                    },
                    error: function () {
                        theme.alert.new('Lỗi hệ thống', 'Có lỗi xảy ra. Vui lòng thử lại sau', 3000, 'alert-warning');

                    },
                    complete: function () {
                        $scope.$applyAsync();
                    }
                });
            }

            $scope.addToMyHeart = function (productId) {
                url = "{{route('love.add.item', ['productId' => 'productId'])}}";
                url = url.replace('productId', productId);
                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: {
                        'qty': 1
                    },
                    success: function (response) {
                        if (response.success) {
                            $interval.cancel($rootScope.promise);

                            $rootScope.promise = $interval(function () {
                                loveItemSync.items = response.wishlistItems;
                                loveItemSync.count = response.count;
                            }, 1000);
                            theme.alert.new('Thêm vào danh sách yêu thích', 'Sản phẩm của bạn đã thêm vào danh sách yêu thích thành công.', 3000, 'alert-success');
                        } else {
                            theme.alert.new('Thêm vào danh sách yêu thích', 'Sản phẩm của bạn đã thêm vào danh sách yêu thích thành công.', 3000, 'alert-success');
                        }
                    },
                    error: function () {
                        theme.alert.new('Lỗi hệ thống', 'Có lỗi xảy ra. Vui lòng thử lại sau', 3000, 'alert-warning');
                    },
                    complete: function () {
                        $scope.$applyAsync();
                    }
                });
            }

        })
    </script>
@endpush
