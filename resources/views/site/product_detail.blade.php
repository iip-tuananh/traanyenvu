@extends('site.layouts.master')
@section('title'){{ $product->name }}- {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')

    <link href="/site/assets/breadcrumb_style.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all"/>






    <link href="/site/assets/product_style.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all"/>

@endsection


@section('content')
    <div class="bodywrap" ng-controller="productDetail">


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


                    <li>
                        <a class="changeurl" href="{{ route('front.getProductList', $product->category->slug ?? '') }}" title="{{ $product->category->name ?? '' }}"><span>{{ $product->category->name ?? '' }}</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                       data-icon="chevron-right" role="img"
                                                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                       class="svg-inline--fa fa-chevron-right fa-w-10"><path
                                    fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                    class=""></path></svg>&nbsp;</span>
                    </li>

                    <li><strong><span>{{ $product->name }}</span></strong>
                    <li>

                </ul>
            </div>
        </section>
        <section class="product layout-product" itemscope itemtype="https://schema.org/Product">
            <div class="container">
                <div class="details-product">
                    <div class="bg-shadow margin-bottom-20">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12 product-detail-left product-images">
                                <div class="sticky">
                                    <div class="product-image-block relative">

                                        <div class="swiper-container gallery-top">
                                            <div class="swiper-wrapper" id="lightgallery">

                                                <a class="swiper-slide" data-hash="0"
                                                   href="{{ $product->image->path ?? '' }}"
                                                   title="Click để xem">
                                                    <img height="370" width="480"
                                                         src="{{ $product->image->path ?? '' }}"
                                                         alt="Cao Thi&#234;n S&#226;m KGC H&#224;n Quốc Extract Master Class Hộp 200g"
                                                         data-image="{{ $product->image->path ?? '' }}"
                                                         class="img-responsive mx-auto d-block swiper-lazy"/>
                                                </a>



                                                 @foreach($product->galleries as $index => $gallery)
                                                    <a class="swiper-slide" data-hash="{{ $index + 1 }}"
                                                       href="{{ $gallery->image->path ?? '' }}"
                                                       title="Click để xem">
                                                        <img height="370" width="480"
                                                             src="{{ $gallery->image->path ?? '' }}"
                                                             alt="Cao Thi&#234;n S&#226;m KGC H&#224;n Quốc Extract Master Class Hộp 200g"
                                                             data-image="{{ $gallery->image->path ?? '' }}"
                                                             class="img-responsive mx-auto d-block swiper-lazy"/>
                                                    </a>

                                                @endforeach


                                            </div>

                                        </div>

                                        <div class="swiper-container gallery-thumbs ">
                                            <div class="swiper-wrapper">

                                                <div class="swiper-slide" data-hash="0">
                                                    <div class="p-100">
                                                        <img height="80" width="80"
                                                             src="{{ $product->image->path ?? '' }}"
                                                             alt="Cao Thi&#234;n S&#226;m KGC H&#224;n Quốc Extract Master Class Hộp 200g"
                                                             data-image="{{ $product->image->path ?? '' }}"
                                                             class="swiper-lazy"/>
                                                    </div>
                                                </div>

                                                @foreach($product->galleries as $index => $gallery)
                                                    <div class="swiper-slide" data-hash="{{ $index + 1 }}">
                                                        <div class="p-100">
                                                            <img height="80" width="80"
                                                                 src="{{ $gallery->image->path ?? '' }}"
                                                                 alt="Cao Thi&#234;n S&#226;m KGC H&#224;n Quốc Extract Master Class Hộp 200g"
                                                                 data-image="{{ $gallery->image->path ?? '' }}"
                                                                 class="swiper-lazy"/>
                                                        </div>
                                                    </div>
                                                @endforeach



                                            </div>
                                            <div class="swiper-button-next">
                                            </div>
                                            <div class="swiper-button-prev">
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12 col-12 details-pro">
                                <h1 class="title-product">{{ $product->name }}</h1>
                                <div class="product-top clearfix">

                                    <div class="sku-product clearfix">
                                        <span class="d-none" itemprop="brand" itemtype="http://schema.org/Brand"
                                              itemscope>Danh mục: <strong>{{ $product->category->name ?? '' }}</strong></span>
                                        <span class="variant-sku" itemprop="sku" content="Đang cập nhật">Mã: <span
                                                class="a-sku">{{ $product->code }}</span></span>
                                        <br>
                                        <span class="d-none" itemprop="type" itemtype="http://schema.org/Type"
                                              itemscope>Tình trạng: <strong>Còn hàng</strong>
                                        </span>
                                    </div>

                                    <div class="product-review" onclick="scrollToxx();">
                                        <div class="sapo-product-reviews-badge " data-id="34619464">
                                        </div>

                                    </div>

                                </div>
                                <div class="inventory_quantity">
							<span class="mb-break">
								<span class="stock-brand-title">Danh mục:</span>
								<span class="a-vendor">

									{{ $product->category->name ?? '' }}

								</span>
							</span>
                                    <span class="line">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span class="mb-break">
								<span class="stock-brand-title">Tình trạng:</span>


								<span class="a-stock">
									Còn hàng
								</span>


							</span>
                                </div>
                                <form enctype="multipart/form-data" data-cart-form id="add-to-cart-form" class="form-inline">

                                    <div class="price-box clearfix">

                                        @if($product->price > 0)
                                            <span class="special-price">
                                            <span class="price product-price">{{ formatCurrency($product->price) }}₫</span>
                                        </span>
                                            @if($product->base_price > 0)
                                                <span class="old-price" itemprop="priceSpecification" itemscope=""
                                                      itemtype="http://schema.org/priceSpecification">
                                            <del class="price product-price-old">
                                                {{ formatCurrency($product->base_price) }}₫
                                            </del>
								            </span>
                                                <span class="sale-off">-{{ $product->percent_discount }}%
                                                 </span>
                                            @endif

                                        @else
                                            <span class="special-price">
                                            <span class="price product-price">Liên hệ</span>
                                            </span>


                                        @endif

                                    </div>


                                    <div class="form-product">
                                        <div class="block-promotion">
                                            <div class="heading-promo">
                                                Thông tin khác:
                                            </div>
                                            <div class="promo-content">
                                                {!! $product->intro !!}
                                            </div>
                                        </div>

                                        <div class="boz-form ">
                                            <div class="flex-quantity">
                                                <div class="custom custom-btn-number show">
                                                    <span>Số lượng: </span>
                                                    <div class="input_number_product">
                                                        <button class="btn_num num_1 button button_qty"
                                                                onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;"
                                                                type="button">-
                                                        </button>
                                                        <input type="text" id="qtym" name="quantity" value="1"
                                                               maxlength="3" class="form-control prd_quantity"
                                                               onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                               onchange="if(this.value == 0)this.value=1;">
                                                        <button class="btn_num num_2 button button_qty"
                                                                onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;"
                                                                type="button"><span>+</span></button>
                                                    </div>
                                                </div>
                                                <div class="btn-mua button_actions clearfix">

                                                    <button class="btn-buyNow btn btn-primary" ng-click="buyNow({{ $product->id }})">
                                                        <span class="txt-main">Mua ngay</span>
                                                    </button>
                                                    <button type="button"    ng-click="addToCart({{ $product->id }})"
                                                            class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart btn-extent">
                                                        <span class="txt-main">Thêm vào giỏ</span>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="bottom-product">

                                    <ul class="social-media" role="list">
                                        <li class="title">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                                <path
                                                    d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3"/>
                                            </svg>
                                            Chia sẻ
                                        </li>
                                        <li class="social-media__item social-media__item--facebook">
                                            <a title="Chia sẻ lên Facebook"
                                               href="https://www.facebook.com/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                               target="_blank" rel="noopener" aria-label="Chia sẻ lên Facebook">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     viewBox="0 0 155.139 155.139"
                                                     style="enable-background:new 0 0 155.139 155.139;"
                                                     xml:space="preserve">
											<g>
                                                <path id="f_1_" style="fill:#010002;" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184
																						 c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452
																						 v20.341H37.29v27.585h23.814v70.761H89.584z"/>
                                            </g>
										</svg>
                                            </a>
                                        </li>
                                        <li class="social-media__item social-media__item--pinterest">
                                            <a title="Chia sẻ lên Pinterest"
                                               href="https://pinterest.com/pin/create/button/?url={{ urlencode(request()->fullUrl()) }}"
                                               target="_blank" rel="noopener" aria-label="Pinterest">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     viewBox="0 0 511.977 511.977"
                                                     style="enable-background:new 0 0 511.977 511.977;"
                                                     xml:space="preserve">
											<g>
                                                <g>
                                                    <path d="M262.948,0C122.628,0,48.004,89.92,48.004,187.968c0,45.472,25.408,102.176,66.08,120.16
															 c6.176,2.784,9.536,1.6,10.912-4.128c1.216-4.352,6.56-25.312,9.152-35.2c0.8-3.168,0.384-5.92-2.176-8.896
															 c-13.504-15.616-24.224-44.064-24.224-70.752c0-68.384,54.368-134.784,146.88-134.784c80,0,135.968,51.968,135.968,126.304
															 c0,84-44.448,142.112-102.208,142.112c-31.968,0-55.776-25.088-48.224-56.128c9.12-36.96,27.008-76.704,27.008-103.36
															 c0-23.904-13.504-43.68-41.088-43.68c-32.544,0-58.944,32.224-58.944,75.488c0,27.488,9.728,46.048,9.728,46.048
															 S144.676,371.2,138.692,395.488c-10.112,41.12,1.376,107.712,2.368,113.44c0.608,3.168,4.16,4.16,6.144,1.568
															 c3.168-4.16,42.08-59.68,52.992-99.808c3.968-14.624,20.256-73.92,20.256-73.92c10.72,19.36,41.664,35.584,74.624,35.584
															 c98.048,0,168.896-86.176,168.896-193.12C463.62,76.704,375.876,0,262.948,0z"/>
                                                </g>
                                            </g>
										</svg>
                                            </a>
                                        </li>
                                        <li class="social-media__item social-media__item--twitter">
                                            <a title="Chia sẻ lên Twitter"
                                               href="https://twitter.com/share?url={{ urlencode(request()->fullUrl()) }}"
                                               target="_blank" rel="noopener" aria-label="Tweet on Twitter">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                     xml:space="preserve">
											<g>
                                                <g>
                                                    <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
															 c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
															 c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
															 c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
															 c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
															 c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
															 C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
															 C480.224,136.96,497.728,118.496,512,97.248z"/>
                                                </g>
                                            </g>
										</svg>
                                            </a>
                                        </li>
                                    </ul>


                                    <div class="line"></div>


                                    <div class="product-wish">
                                        <a href="javascript:void(0)" class="setWishlist btn-views"
                                          ng-click="addToMyHeart({{ $product->id }})"
                                           tabindex="0" title="Thêm vào yêu thích">
                                            <img width="25" height="25" src="/site/assets/heartd27c.png?1739018973665"
                                                 alt="Thêm vào yêu thích"/>
                                            Thêm vào yêu thích
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 margin-bottom-20">
                            <div class="bg-shadow">
                                <div class="row">
                                    <div class="col-12 product-review-details  col-lg-8">

                                        <div class="product-tab e-tabs not-dqtab">
                                            <ul class="tabs tabs-title clearfix">

                                                <li class="tab-link active" data-tab="#tab-1">
                                                    <h3>Mô tả sản phẩm</h3>
                                                </li>


                                                <li class="tab-link" data-tab="#tab-2">
                                                    <h3>Hướng dẫn mua hàng</h3>
                                                </li>




                                            </ul>
                                            <div class="tab-float">

                                                <div id="tab-1" class="tab-content active content_extab">
                                                    <div class="rte product_getcontent product-review-content">


                                                        <div class="ba-text-fpt has-height">
                                                            {!! $product->body !!}
                                                        </div>

                                                        <div class="show-more hidden-lg hidden-md hidden-sm">
                                                            <div
                                                                class="btn btn-primary btn-default btn--view-more duration-300">
						<span class="more-text">Xem thêm <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                              fill="currentColor" class="bi bi-caret-down-fill"
                                                              viewBox="0 0 16 16">
							<path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
							</svg></span>
                                                                <span class="less-text">Thu gọn <svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-caret-up-fill" viewBox="0 0 16 16">
							<path
                                d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
							</svg></span>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>


                                                <div id="tab-2" class="tab-content content_extab">
                                                    <div class="rte">

                                                        {!! $config->hdmh !!}

                                                    </div>
                                                </div>


                                                <div id="tab-3" class="tab-content content_extab">
                                                    <div class="rte">
                                                        <div
                                                            class="alert alert-info alert-dismissible margin-top-15 section"
                                                            role="alert" style="max-width: 100% !important;">
                                                            Bạn tiến hàng mua và cài app <a style="color: red"
                                                                                            target="_blank"
                                                                                            href="https://apps.sapo.vn/danh-gia-san-pham-v2"
                                                                                            title="Đánh giá sản phẩm">Đánh
                                                                giá sản phẩm</a> mới sử dụng được tính năng này!
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-4 col-12 product-sidebar">
                                        <div class="sticky-box">


                                            <div class="section-viewed-product recent-page-viewed">
                                                <h2>
                                                    <span>
                                                        Bạn đã xem
                                                    </span>
                                                </h2>
                                                <div class="product-viewed-content">
                                                    @foreach($viewedProducts as $viewedProduct)
                                                        <div class="product-view">
                                                            <a class="image_thumb" href="{{ route('front.getProductDetail', $viewedProduct->slug) }}" title="{{ $viewedProduct->name  }}">
                                                                <img width="370" height="480" class="lazyload loaded"
                                                                     src="{{ $viewedProduct->image->path ?? '' }}" data-src="{{ $viewedProduct->image->path ?? '' }}" alt="{{ $viewedProduct->name  }}" data-was-processed="true">
                                                            </a>
                                                            <div class="product-info">
                                                                <h3 class="product-name"><a href="{{ route('front.getProductDetail', $viewedProduct->slug) }}" title="{{ $viewedProduct->name  }}" class="line-clamp line-clamp-3-new">{{ $viewedProduct->name  }}</a></h3>
                                                                <div class="price-box">

                                                                    @if($viewedProduct->price > 0)
                                                                        <span class="price">{{ formatCurrency($viewedProduct->price) }}₫</span>

                                                                        @if($viewedProduct->base_price > 0)
                                                                            <span class="compare-price">{{ formatCurrency($viewedProduct->base_price) }}₫</span>
                                                                        @endif
                                                                    @else
                                                                        <span class="price">Liên hệ</span>
                                                                    @endif




                                                                </div>
                                                                <a class="view-more" href="{{ route('front.getProductDetail', $viewedProduct->slug) }}" title="Xem chi tiết">Xem chi tiết »</a>
                                                            </div>
                                                        </div>

                                                    @endforeach
                                                </div>
                                            </div>



                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 product-related product-swipers">
                            <div class="bg-shadow">
                                <h2>
                                    <a href="#" title="Sản phẩm liên quan">
                                        Sản phẩm liên quan
                                    </a>
                                </h2>
                                <div class="swiper_product_related swiper-container">
                                    <div class="swiper-wrapper">

                                        @foreach($productsLq as $productLq)
                                            <div class="swiper-slide">
                                                <div class="item_product_main">

                                                    <form
                                                          class="variants product-action item-product-main duration-300"
                                                          data-cart-form data-id="product-actions-34619470"
                                                          enctype="multipart/form-data">

                                                        @if($productLq->base_price > 0)
                                                            <span class="flash-sale">-{{ $productLq->percent_discount }}%
                                                            </span>
                                                        @endif



                                                        <div class="product-thumbnail">
                                                            <a class="image_thumb scale_hover"
                                                               href="{{ route('front.getProductDetail', $productLq->slug) }}"
                                                               title="{{ $productLq->name }}">
                                                                <img class="lazyload duration-300"
                                                                     src="{{ $productLq->image->path ?? '' }}"
                                                                     data-src="{{ $productLq->image->path ?? '' }}"
                                                                     alt="{{ $productLq->name }}">
                                                            </a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="name-price">
                                                                <h3 class="product-name line-clamp-2-new">
                                                                    <a href="{{ route('front.getProductDetail', $productLq->slug) }}"
                                                                       title="{{ $productLq->name }}">{{ $productLq->name }}</a>
                                                                </h3>
                                                                <div class="product-price-cart">
                                                                    @if($productLq->price > 0)
                                                                        @if($productLq->base_price > 0)
                                                                            <span class="compare-price">{{ formatCurrency($productLq->base_price) }}₫</span>
                                                                        @endif

                                                                        <span class="price">{{ formatCurrency($productLq->price) }}₫</span>
                                                                    @else
                                                                        <span class="price">Liên hệ</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="product-button">
                                                                <button ng-click="addToCart({{ $productLq->id }}, 1)"
                                                                    class="btn-cart btn-views add_to_cart btn btn-primary "
                                                                    title="Thêm vào giỏ hàng">
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
                                                                <a href="javascript:void(0)"
                                                                   class="setWishlist btn-views btn-circle"
                                                                   ng-click="addToMyHeart({{ $productLq->id }}, 1)"
                                                                   data-wish="{{ $productLq->name }}"
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
                                    <div class="swiper-button-next">
                                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="2.13003" y="29" width="38" height="38"
                                                  transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff"
                                                  stroke-width="2"/>
                                            <rect x="8" y="29.2133" width="30" height="30"
                                                  transform="rotate(-45 8 29.2133)" fill="black"/>
                                            <path d="M18.5 29H39.5" stroke="white" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="2.13003" y="29" width="38" height="38"
                                                  transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff"
                                                  stroke-width="2"/>
                                            <rect x="8" y="29.2133" width="30" height="30"
                                                  transform="rotate(-45 8 29.2133)" fill="black"/>
                                            <path d="M18.5 29H39.5" stroke="white" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            var swiper_related = null;

                            function initSwiperRelated() {
                                swiper_related = new Swiper('.swiper_product_related', {
                                    slidesPerView: 4,
                                    spaceBetween: 20,
                                    slidesPerGroup: 1,
                                    navigation: {
                                        nextEl: '.swiper_product_related .swiper-button-next',
                                        prevEl: '.swiper_product_related .swiper-button-prev',
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

                            function destroySwiperRelated() {
                                if (swiper_related) {
                                    swiper_related.destroy(true, true);
                                    swiper_related = null;
                                }
                            }

                            function toggleSwiperRelated() {
                                if ($(window).width() <= 767 && swiper_related) {
                                    destroySwiperRelated();
                                } else if ($(window).width() > 767 && !swiper_related) {
                                    initSwiperRelated();
                                }
                            }

                            toggleSwiperRelated();
                            $(window).resize(toggleSwiperRelated);
                        </script>
                    </div>
                </div>
            </div>
        </section>


        <script>

            var getLimit = 6;
            var alias = 'cao-thien-sam-kgc-han-quoc-extract-master-class-hop-200g';

            function activeTab(obj) {
                $('.product-tab ul li').removeClass('active');
                $(obj).addClass('active');
                var id = $(obj).attr('data-tab');
                $('.tab-content').removeClass('active');
                $(id).addClass('active');
            }


            $('.product-tab ul li').click(function () {
                activeTab(this);
                return false;
            });
            var galleryThumbs = new Swiper('.gallery-thumbs', {
                spaceBetween: 5,
                slidesPerView: 10,
                freeMode: true,
                lazy: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                hashNavigation: true,
                slideToClickedSlide: true,
                breakpoints: {
                    260: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    300: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    500: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 5,
                        spaceBetween: 10,
                        direction: 'vertical'
                    },
                    992: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                        direction: 'vertical'
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                        direction: 'vertical'
                    },
                    1199: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                        direction: 'vertical'
                    }
                },
                navigation: {
                    nextEl: '.gallery-thumbs .swiper-button-next',
                    prevEl: '.gallery-thumbs .swiper-button-prev',
                },
            });
            var galleryTop = new Swiper('.gallery-top', {
                spaceBetween: 0,
                lazy: true,
                hashNavigation: true,
                thumbs: {
                    swiper: galleryThumbs
                }
            });
            var swiper = new Swiper('.product-relate-swiper', {
                slidesPerView: 4,
                loop: false,
                grabCursor: true,
                spaceBetween: 30,
                roundLengths: true,
                slideToClickedSlide: false,
                navigation: {
                    nextEl: '.product-relate-swiper .swiper-button-next',
                    prevEl: '.product-relate-swiper .swiper-button-prev',
                },
                autoplay: false,
                breakpoints: {
                    260: {
                        slidesPerView: 'auto',
                        spaceBetween: 15
                    },
                    500: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 15
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    991: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    }
                }
            });
            $(document).ready(function () {
                $("#lightgallery").lightGallery({
                    thumbnail: false
                });
                $("#videolary").lightGallery({
                    thumbnail: false
                });
            });


            $('.btn--view-more').on('click', function (e) {
                e.preventDefault();
                var $this = $(this);
                if ($('.product-review-details .product-review-content').hasClass('expanded')) {
                    $('html, body').animate({scrollTop: $('.product-review-details').offset().top - 110}, 'slow');
                }
                $this.parents('.product-review-details').find('.product-review-content').toggleClass('expanded');
                $(this).toggleClass('active');
                return false;
            });


            // Check if either specificationsDiv or viewContentDiv is absent or empty.
            // If true, hide the productBarDiv by adding the 'hidden' class.
            // $(document).ready(function () {
            //     var productBarDiv = $('.product-sidebar');
            //     var productDetailsDiv = $('.product-review-details');
            //     var hasSpecifications = false;
            //     if (hasSpecifications == false && hasViewItem == false) {
            //         productBarDiv.addClass('hidden');
            //         productDetailsDiv.removeClass('col-lg-8').addClass('col-lg-12');
            //     }
            // });
        </script>
        <div id="js-global-alert" class="alert alert-success" role="alert">
            <button type="button" class="close"><span aria-hidden="true"><span aria-hidden="true">&times;</span></span>
            </button>
            <h5 class="alert-heading"></h5>
            <p class="alert-content"></p>
        </div>

        <link href="/site/assets/bpr-products-moduled27c.css?1739018973665" rel="stylesheet" type="text/css"
              media="all"/>
        <div class="sapo-product-reviews-module"></div>

        @include('site.partials.popup_cart')

    </div>

@endsection

@push('scripts')
    <link rel="preload" as="script" href="/site/assets/picboxd27c.js?1739018973665"/>
    <link rel="preload" as='style' type="text/css" href="/site/assets/picbox.scssd27c.css?1739018973665">
    <link href="/site/assets/picbox.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all"/>
    <script src="/site/assets/picboxd27c.js?1739018973665" type="text/javascript"></script>

    <script>
        app.controller('productDetail', function ($rootScope, $scope, cartItemSync, loveItemSync, $interval) {
            $scope.cart = cartItemSync;

            $scope.addToCart = function (productId, qty = null) {
                url = "{{route('cart.add.item', ['productId' => 'productId'])}}";
                url = url.replace('productId', productId);

                if(! qty) {
                    var currentVal = parseInt(jQuery('input[name="quantity"]').val());
                } else {
                    var currentVal = parseInt(qty);
                }

                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: {
                        'qty': currentVal
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

            $scope.buyNow = function (productId) {
                url = "{{route('cart.add.item', ['productId' => 'productId'])}}";
                url = url.replace('productId', productId);
                var currentVal = parseInt(jQuery('input[name="quantity"]').val());

                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: {
                        'qty': currentVal
                    },
                    success: function (response) {
                        if (response.success) {
                            $interval.cancel($rootScope.promise);
                            $rootScope.promise = $interval(function () {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);

                            window.location.href = "{{ route('cart.checkout') }}";

                        }
                    },
                    error: function () {
                        jQuery.toast('Thao tác thất bại !')
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
