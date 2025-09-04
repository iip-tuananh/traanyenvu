@extends('site.layouts.master')
@section('title'){{ $category ? $category->name : "Sản phẩm" }} - {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')
    <link href="/site/assets/breadcrumb_style.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all"/>

    <link href="/site/assets/collection_style.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all"/>

@endsection


@section('content')
    <div class="bodywrap" ng-controller="productList">
        <div class="layout-collection">
            <section class="bread-crumb">
                <div class="container">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a href="{{ route('front.home-page') }}" title="Trang chủ"><span>Trang chủ</span></a>
                            <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                           data-icon="chevron-right" role="img"
                                                           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                           class="svg-inline--fa fa-chevron-right fa-w-10"><path
                                        fill="currentColor"
                                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                        class=""></path></svg>&nbsp;</span>
                        </li>


                        <li><strong><span>{{ $category->name ?? 'Sản phẩm'}} </span></strong></li>


                    </ul>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    @if($category)
                        <div class="col-12 col-banner">
                            <a href="#" title="click xem ngay" class="duration-300 has-aspect-1">
                                <picture>
                                    <source
                                        media="(max-width: 480px)"
                                        srcset="{{ $category->banner->path ?? '' }}">
                                    <img alt="Banner top" width="1250" height="306" class="lazyload"
                                         data-src="{{ $category->banner->path ?? '' }}"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                                </picture>


                            </a>
                        </div>
                    @endif

                    <div class="col-12">
                        <div class="col-title">
                            <h1>{{ $category->name ?? 'Sản phẩm' }}</h1>
                            <div class="title-separator">
                                <div class="separator-center"></div>
                            </div>
                        </div>


                    </div>

                    <div class="block-collection col-lg-12 col-12">
                        <div class="category-products products-view products-view-grid list_hover_pro">
                            <div class="filter-containers">

                                <div class="sort-cate clearfix">


                                    <div class="sort-cate-right">
                                        <h3>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                                <path
                                                    d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                            </svg>
                                            Xếp theo
                                        </h3>
                                        <ul>
                                            @php
                                                $currentSort = request('sort', 'date_desc');
                                            @endphp


                                            <li class="btn-quick-sort default {{ $currentSort==='date_desc' ? 'active' : '' }}">
                                                <a href="{{ request()->fullUrlWithQuery(['sort'=>'date_desc','page'=>1]) }}"
                                                   title="Mặc định"><i></i>Mặc định</a>
                                            </li>
                                            <li class="btn-quick-sort alpha-asc {{ $currentSort==='name_asc' ? 'active' : '' }}">
                                                <a href="{{ request()->fullUrlWithQuery(['sort'=>'name_asc','page'=>1]) }}"
                                                   title="Tên A-Z"><i></i>Tên A-Z</a>
                                            </li>
                                            <li class="btn-quick-sort alpha-desc {{ $currentSort==='name_desc' ? 'active' : '' }}">
                                                <a href="{{ request()->fullUrlWithQuery(['sort'=>'name_desc','page'=>1]) }}"
                                                   title="Tên Z-A"><i></i>Tên Z-A</a>
                                            </li>
                                            <li class="btn-quick-sort position-desc {{ $currentSort==='date_desc' ? 'active' : '' }}">
                                                <a href="{{ request()->fullUrlWithQuery(['sort'=>'date_desc','page'=>1]) }}"
                                                   title="Hàng mới"><i></i>Hàng mới</a>
                                            </li>
                                            <li class="btn-quick-sort price-asc {{ $currentSort==='price_asc' ? 'active' : '' }}">
                                                <a href="{{ request()->fullUrlWithQuery(['sort'=>'price_asc','page'=>1]) }}"
                                                   title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                                            </li>
                                            <li class="btn-quick-sort price-desc {{ $currentSort==='price_desc' ? 'active' : '' }}">
                                                <a href="{{ request()->fullUrlWithQuery(['sort'=>'price_desc','page'=>1]) }}"
                                                   title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <script>
                                    function countFilterItem() {
                                        var countFilter = $('.filter-container__selected-filter-list ul li').length;
                                        $(".count-filter-val").text(countFilter);
                                    }

                                    countFilterItem();
                                </script>

                            </div>


                            <div class="products-view products-view-grid list_hover_pro">
                                <div class="row">

                                    @foreach($products as $product)
                                        <div class="col-6 col-md-3">
                                            <div class="item_product_main">

                                                <form
                                                    class="variants product-action item-product-main duration-300"
                                                    data-cart-form data-id="product-actions-34619470"
                                                    enctype="multipart/form-data">
                                                    @if($product->price > 0 && $product->base_price > 0)
                                                        <span class="flash-sale">- {{ $product->percent_discount }}%
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
                                                            <input type="hidden" name="variantId" value="110199762"/>
                                                            <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                                    title="Thêm vào giỏ hàng" ng-click="addToCart({{ $product->id }})">
                                                                <span>Thêm vào giỏ</span>
                                                                <svg enable-background="new 0 0 32 32" height="512"
                                                                     viewBox="0 0 32 32" width="512"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <g>
                                                                        <g>
                                                                            <path
                                                                                d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z"/>
                                                                        </g>
                                                                        <g>
                                                                            <path
                                                                                d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z"/>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </button>
                                                            <a href="javascript:void(0)" ng-click="addToMyHeart({{ $product->id }})"
                                                               class="setWishlist btn-views btn-circle"
                                                               tabindex="0" title="Thêm vào yêu thích">
                                                                <img width="25" height="25"
                                                                     src="/site/assets/heartd27c.png?1739018973665"
                                                                     alt="Thêm vào yêu thích"/>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    @endforeach


                                </div>
                            </div>
                            <div class="pagenav">
                                {{ $products->links('site.pagination.paginate2') }}

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var colName = "Cao hắc sâm";

            var colId = 3271511;

            var selectedViewData = "data";
        </script>
        <div id="js-global-alert" class="alert alert-success" role="alert">
            <button type="button" class="close"><span aria-hidden="true"><span aria-hidden="true">&times;</span></span>
            </button>
            <h5 class="alert-heading"></h5>
            <p class="alert-content"></p>
        </div>


        <style>
            /* Backdrop mờ toàn màn hình */
            .backdrop__body-backdrop___1rvky{
                position: fixed;
                inset: 0;                 /* top:0;right:0;bottom:0;left:0 */
                background: rgba(0,0,0,.45);
                z-index: 1000;            /* THẤP HƠN modal */
                opacity: 0;
                visibility: hidden;
                transition: opacity .2s;
            }

            /* Modal giỏ hàng */
            .popup-cart-mobile{
                position: fixed;
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                z-index: 1001;            /* CAO HƠN backdrop */
                background: #fff;
                width: min(92vw, 480px);
                max-height: 80vh;
                overflow: auto;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(0,0,0,.2);

                opacity: 0;
                visibility: hidden;
                transition: opacity .2s;
            }

            /* Khi bật */
            .backdrop__body-backdrop___1rvky.active{ opacity:1; visibility:visible; }
            .popup-cart-mobile.active{ opacity:1; visibility:visible; }

            /* (tuỳ chọn) khoá scroll nền khi mở modal */
            body.modal-open{ overflow:hidden; }

        </style>
        @include('site.partials.popup_cart')
    </div>

@endsection

@push('scripts')
    <link rel="preload" as="script" href="/site/assets/cold27c.js?1739018973665" />
    <script src="/site/assets/cold27c.js?1739018973665" type="text/javascript"></script>

    <script>
        app.controller('productList', function ($rootScope, $scope, cartItemSync, loveItemSync, $interval) {
            $scope.cart = cartItemSync;
            console.log($scope.cart)

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
