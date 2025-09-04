@extends('site.layouts.master')
@section('title')
    Giỏ hàng
@endsection

@section('css')

    <link href="/site/assets/fonts.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/site/assets/bootstrap-4-3-mind27c.css?1739018973665">
    <link href="/site/assets/main.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />
    <link href="/site/assets/breadcrumb_style.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />



    <link href="/site/assets/cartpage.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />

@endsection

@section('content')
    <div class="bodywrap" ng-controller="CartController">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="/" title="Trang chủ"><span>Trang chủ</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                       data-icon="chevron-right" role="img"
                                                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                       class="svg-inline--fa fa-chevron-right fa-w-10"><path
                                    fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                    class=""></path></svg>&nbsp;</span>
                    </li>

                    <li><strong><span>Giỏ hàng</span></strong></li>

                </ul>
            </div>
        </section>

        <style>
            .cart-container{
                --red:#c40000;
                --border:#e9ecef;
                --text:#1f2937;
                --muted:#6b7280;
                --bg:#fff;
                font-size:16px;
            }
            .cart-grid{
                display:grid;
                grid-template-columns: 1.2fr 0.6fr 0.6fr 0.6fr;
                gap:16px;
                align-items:center;
            }
            .cart-head{
                font-weight:600;
                color:#111827;
                padding:14px 16px;
                border:1px solid var(--border);
                border-width:1px 1px 0;
                background:#f8fafc;
            }
            .cart-row{
                border:1px solid var(--border);
                border-top:0;
                padding:16px;
                background:var(--bg);
            }
            .prod{display:flex; gap:14px; align-items:center;}
            .prod img{width:120px;height:90px;object-fit:cover;border-radius:6px;flex:0 0 auto;}
            .meta .title{display:block; color:var(--text); font-weight:600; line-height:1.35; text-decoration:none;}
            .meta .title:hover{ text-decoration:underline;}
            .meta .remove{display:inline-block; margin-top:6px; color:#2563eb; font-size:14px; text-decoration:none;}
            .meta .remove:hover{ text-decoration:underline; }

            .price-text, .total-text{font-weight:700; color:var(--red);}
            .qty{ }
            .qty-control{display:inline-flex; align-items:center; border:1px solid var(--border); border-radius:6px; overflow:hidden;}
            .qty-control .btn-minus,
            .qty-control .btn-plus{
                width:36px; height:36px; line-height:34px; text-align:center; border:0; background:#f3f4f6; cursor:pointer; font-size:18px;
            }
            .qty-control .qty-input{
                width:52px; height:36px; text-align:center; border:0; outline:0; font-weight:600;
            }

            .cart-footer{display:flex; justify-content:flex-end; margin-top:16px;}
            .summary{width:min(420px,100%); border:1px solid var(--border); border-radius:10px; padding:16px; background:#fff;}
            .summary .row{display:flex; justify-content:space-between; padding:8px 0; color:#111827;}
            .summary .row + .row{ border-top:1px dashed var(--border); }
            .summary .grand{font-size:18px; font-weight:800;}
            .summary .grand .grand-total{color:var(--red);}
            .actions{display:flex; gap:10px; margin-top:12px;}
            .btn-outline, .btn-primary{
                display:inline-flex; align-items:center; justify-content:center;
                padding:10px 14px; border-radius:8px; font-weight:600; text-decoration:none; border:1px solid #111827;
            }
            .btn-outline{ background:#fff; color:#111827; }
            .btn-outline:hover{ background:#f8fafc; }
            .btn-primary{ background:#111827; color:#fff; border-color:#111827; }
            .btn-primary:hover{ opacity:.92; }

            .label-sm{display:none; color:var(--muted); font-size:12px; margin-right:6px;}

            /* Mobile */
            @media (max-width: 768px){
                .cart-head{ display:none; }
                .cart-row{
                    display:grid;
                    grid-template-columns: 96px 1fr;
                    grid-template-areas:
          "prod prod"
          "price qty"
          "total total";
                    row-gap:12px;
                }
                .cart-row .prod{ grid-area: prod; }
                .cart-row .price{ grid-area: price; }
                .cart-row .qty{ grid-area: qty; justify-self:end; }
                .cart-row .line-total{ grid-area: total; justify-self:end; }
                .prod img{ width:96px;height:72px; }
                .label-sm{ display:inline-block; }
                .summary{ width:100%; }
            }

            /* Very small */
            @media (max-width: 420px){
                .qty-control .qty-input{ width:44px; }
                .qty-control .btn-minus,.qty-control .btn-plus{ width:32px; }
            }

            .cart-empty{
                padding:24px; text-align:center; border:1px dashed var(--border); color:var(--muted); border-radius:10px; background:#fff;
            }
        </style>
        <style>
            /* Thu nhỏ cụm Số lượng */
            .qty-control{
                display:inline-flex !important;   /* tránh chiếm full width */
                width:auto;                       /* không cho 100% */
                max-width:fit-content;
                border:1px solid #e9ecef;
                border-radius:8px;
                overflow:hidden;
                align-items:center;
            }

            .qty-control--sm .btn-minus,
            .qty-control--sm .btn-plus{
                width:28px;           /* trước là ~36px */
                height:28px;
                line-height:26px;
                font-size:16px;
                background:#f3f4f6;
                border:0;
                cursor:pointer;
            }

            .qty-control--sm .qty-input{
                width:36px;           /* trước là ~52px */
                height:28px;
                padding:0;
                border:0;
                text-align:center;
                font-weight:600;
                font-size:14px;
                outline:0;
            }

            /* Nếu ô vẫn “dài” vì cột grid/td kéo dãn, ép phần tử chỉ chiếm đúng nội dung */
            .cart-row .qty{ justify-self:start; }  /* hoặc end nếu bạn muốn dồn sang phải */

        </style>
        <section class="main-cart-page main-container col1-layout">
            <div class="main container cartpcstyle">
                <div class="wrap_background_aside margin-bottom-40">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 col-12 col-cart-left">
                            <div class="bg-shadow margin-bottom-20">
                                <div class="header-cart">
                                    <div class="title-block-page">
                                        <h1 class="title_cart">
                                            <span>Giỏ hàng của bạn</span>
                                        </h1>
                                    </div>
                                </div>
                                <div class="cart-page d-xl-block">
                                    <div class="drawer__inner">
                                        <div class="CartPageContainer" ng-cloak>
                                            <div class="cart-container">

                                                <!-- Header (ẩn ở mobile) -->
                                                <div class="cart-head cart-grid">
                                                    <div>THÔNG TIN SẢN PHẨM</div>
                                                    <div>ĐƠN GIÁ</div>
                                                    <div>SỐ LƯỢNG</div>
                                                    <div>THÀNH TIỀN</div>
                                                </div>


                                                <div class="cart-row cart-grid cart-item" ng-repeat="item in items">
                                                    <div class="prod">
                                                        <img src="<% item.attributes.image %>" alt="<% item.name %>">
                                                        <div class="meta">
                                                            <a class="title" href="#"><% item.name %></a>
                                                            <a href="#" class="remove" ng-click="removeItem(item.id)">Xóa</a>
                                                        </div>
                                                    </div>
                                                    <div class="price" ng-class="{'contact': !(+item.price > 0)}">
                                                        <span class="label-sm">Đơn giá</span>
                                                        <span class="price-text">
                                                                    <% (+item.price > 0) ? ((+item.price) | number) + '₫' : 'Liên hệ' %>
                                                         </span>
                                                    </div>

                                                    <div class="qty">
                                                        <span class="label-sm">Số lượng</span>
                                                        <div class="qty-control qty-control--sm" role="group" aria-label="Số lượng">
                                                            <button type="button" class="btn-minus qty-btn minus" aria-label="Giảm" ng-click="decrementQuantity(item); changeQty(item.quantity, item.id)">−</button>
                                                            <input type="number" class="qty-input" value="<%item.quantity%>"
                                                                   min="1" ng-model="item.quantity" ng-change="changeQty(item.quantity, item.id)"
                                                                   inputmode="numeric" pattern="[0-9]*">
                                                            <button type="button" class="btn-plus qty-btn plus" aria-label="Tăng" ng-click="incrementQuantity(item); changeQty(item.quantity, item.id)">+</button>
                                                        </div>
                                                    </div>

                                                    <div class="line-total" ng-class="{'contact': !(+item.price > 0)}">
                                                        <span class="label-sm">Thành tiền</span>
                                                        <span class="total-text">
                                                                            <% (+item.price > 0)
                                                                                ? (((+item.price) * (+item.quantity || 1)) | number) + '₫'
                                                                                : 'Liên hệ' %>
                                                                          </span>
                                                    </div>
                                                </div>


                                                <!-- Empty state -->
                                                <div class="cart-empty" ng-if="! checkCart ">
                                                    Giỏ hàng của bạn đang trống.
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="bg-shadow margin-bottom-20">
                                <div class="product-suggest product-swipers">
                                    <h2>
                                        <a href="#" title="Có thể bạn thích">
                                            Có thể bạn thích
                                        </a>
                                    </h2>


                                    <div class="swiper_suggest swiper-container">
                                        <div class="swiper-wrapper">
                                            @foreach($productsRandom as $p)
                                                <div class="swiper-slide">
                                                    <div class="item_product_main">

                                                        <form
                                                              class="variants product-action item-product-main duration-300"
                                                              enctype="multipart/form-data">

                                                            <div class="product-thumbnail">
                                                                <a class="image_thumb scale_hover"
                                                                   href="{{ route('front.getProductDetail', $p->slug) }}"
                                                                   title="{{ $p->name }}">
                                                                    <img class="lazyload duration-300"
                                                                         src="{{ $p->image->path ?? '' }}"
                                                                         data-src="{{ $p->image->path ?? '' }}"
                                                                         alt="{{ $p->name }}">
                                                                </a>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="name-price">
                                                                    <h3 class="product-name line-clamp-2-new">
                                                                        <a href="{{ route('front.getProductDetail', $p->slug) }}"
                                                                           title="{{ $p->name }}">{{ $p->name }}</a>
                                                                    </h3>
                                                                    <div class="product-price-cart">
                                                                        @if($p->price > 0)
                                                                            <span class="price">{{ formatCurrency($p->price) }}₫</span>
                                                                        @else
                                                                            <span class="price">Liên hệ</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="product-button">
                                                                    <a href="{{ route('front.getProductDetail', $p->slug) }}">
                                                                        <button type="button"
                                                                            class=" btn btn-primary "
                                                                            title="Xem chi tiết">
                                                                            <span>Xem chi tiết</span>
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
                                var swiper_suggest = null;

                                function initSwiperSuggest() {
                                    swiper_suggest = new Swiper('.swiper_suggest', {
                                        slidesPerView: 4,
                                        spaceBetween: 20,
                                        slidesPerGroup: 1,
                                        navigation: {
                                            nextEl: '.swiper_suggest .swiper-button-next',
                                            prevEl: '.swiper_suggest .swiper-button-prev',
                                        },
                                        breakpoints: {
                                            768: {
                                                slidesPerView: 3,
                                                spaceBetween: 20
                                            },
                                            992: {
                                                slidesPerView: 3,
                                                spaceBetween: 20
                                            },
                                            1024: {
                                                slidesPerView: 2.5,
                                                spaceBetween: 20
                                            },
                                            1200: {
                                                slidesPerView: 3,
                                                spaceBetween: 10
                                            }
                                        }
                                    });
                                }

                                function destroySwiperSuggest() {
                                    if (swiper_suggest) {
                                        swiper_suggest.destroy(true, true);
                                        swiper_suggest = null;
                                    }
                                }

                                function toggleSwiperSuggest() {
                                    if ($(window).width() <= 767 && swiper_suggest) {
                                        destroySwiperSuggest();
                                    } else if ($(window).width() > 767 && !swiper_suggest) {
                                        initSwiperSuggest();
                                    }
                                }

                                toggleSwiperSuggest();
                                $(window).resize(toggleSwiperSuggest);
                            </script>

                        </div>
                        <div class="col-xl-4 col-lg-5 col-12 col-cart-right">
                            <div class="sticky">
                                <div class="bg-shadow margin-bottom-20">
                                    <div class="ajaxcart__footer">
                                        <div class="checkout-header">
                                            Thông tin đơn hàng
                                        </div>
                                        <div class="checkout-body">
                                            <div class="summary-total">
                                                <div class="content-items">
                                                    <div class="item-content-left">Tổng tiền</div>
                                                    <div class="item-content-right"><span class="total-price"><% total | number%>₫</span></div>
                                                </div>
                                            </div>
                                            <div class="summary-action">
                                                <p>Phí vận chuyển sẽ được tính ở trang thanh toán.</p>
                                                <p>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
                                            </div>

{{--                                            <div class="summary-vat">--}}
{{--                                                <form method="post" novalidate="" class="formVAT">--}}
{{--                                                    <h4>--}}
{{--                                                        Thời gian giao hàng--}}
{{--                                                    </h4>--}}
{{--                                                    <div class="timedeli-modal">--}}
{{--                                                        <fieldset class="input_group date_pick">--}}
{{--                                                            <input type="text" placeholder="Chọn ngày" readonly id="date"--}}
{{--                                                                   name="attributes[shipdate]" class="date_picker" required>--}}
{{--                                                        </fieldset>--}}
{{--                                                        <fieldset class="input_group date_time">--}}
{{--                                                            <select name="time" class="timeer timedeli-cta">--}}
{{--                                                                <option selected>Chọn thời gian</option>--}}


{{--                                                                <option value="08h00 - 12h00">08h00 - 12h00</option>--}}

{{--                                                                <option value=" 14h00 - 18h00"> 14h00 - 18h00</option>--}}

{{--                                                                <option value=" 19h00 - 21h00"> 19h00 - 21h00</option>--}}

{{--                                                            </select>--}}
{{--                                                        </fieldset>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="r-bill">--}}
{{--                                                        <div class="bill-field">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label>Tên công ty</label>--}}
{{--                                                                <input type="text" class="form-control val-f"--}}
{{--                                                                       name="attributes[company_name]"--}}
{{--                                                                       value=""--}}
{{--                                                                       placeholder="Tên công ty">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label>Mã số thuế</label>--}}
{{--                                                                <input type="text" pattern=".{10,}"--}}
{{--                                                                       onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"--}}
{{--                                                                       class="form-control val-f val-n"--}}
{{--                                                                       name="attributes[tax_code]" value=""--}}
{{--                                                                       placeholder="Mã số thuế">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label>Địa chỉ công ty</label>--}}
{{--                                                                <textarea class="form-control val-f"--}}
{{--                                                                          name="attributes[company_address]"--}}
{{--                                                                          placeholder="Nhập địa chỉ công ty (bao gồm Phường/Xã, Quận/Huyện, Tỉnh/Thành phố nếu có)"></textarea>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label>Email nhận hoá đơn</label>--}}
{{--                                                                <input type="email" class="form-control val-f val-email"--}}
{{--                                                                       name="attributes[invoice_email]"--}}
{{--                                                                       value=""--}}
{{--                                                                       placeholder="Email nhận hoá đơn">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                </form>--}}
{{--                                            </div>--}}

                                            <div class="summary-button">
                                                <div class="cart__btn-proceed-checkout-dt">
                                                    <a href="/thanh-toan">
                                                        <button type="button"
                                                                class="button btn btn-default cart__btn-proceed-checkout btn-primary duration-300"
                                                                id="btn-proceed-checkout" title="Thanh toán ngay">Thanh toán
                                                            ngay
                                                        </button>
                                                    </a>

                                                </div>
                                                <a class="return_buy btn btn-extent duration-300" title="Tiếp tục mua hàng"
                                                   href="{{ route('front.home-page') }}">Tiếp tục mua hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <script src='/site/assets/sweetalert-mind27c.js?1739018973665'></script>


        <link rel="preload" as="script" href="/site/assets/bootstrap-datepickerd27c.js?1739018973665" />
        <script src="/site/assets/bootstrap-datepickerd27c.js?1739018973665" type="text/javascript"></script>

        <script>
            $(document).ready(function () {
                var date = new Date();
                date.setDate(date.getDate());

                $('.input_group #date').datepicker({
                    format: "dd/mm/yyyy",
                    orientation: "top right",
                    todayHightinght: true,
                    startDate: date
                });
                setTimeout(function () {
                    $('.colrightvat').removeClass('d-none')
                }, 300)
            })
        </script>
        <script src="/site/assets/cookie.js?1739018973665"
                type="text/javascript"></script>
        <script>

            function setCookie(cname, cvalue, exdays) {

                var date = new Date();
                var minutes = 1;
                date.setTime(date.getTime() + (24 * 60 * 60 * 1000));
                var expires = "; expires=" + date.toGMTString();
                document.cookie = cname + "=" + cvalue + expires + ";path=/";

            }

            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }

            function delete_cookie(cname, path, domain) {
                if (getCookie(cname)) {
                    document.cookie = cname;
                }
            }

            $('.timedeli-cta, .date_picker').on('change touchstart', function () {
                let date = $('.date_picker').val().split('/')
                var timex = $(this).find(":selected").val();
                if (date != undefined && timex != undefined) {
                    setCookie('ego-delivery-value', '', 1);
                    setCookie('ego-delivery-value', '' + date + '-' + timex + '', 1);
                }
            })





            /** PHan hoa don **/


            /** end hoa don **/


        </script>

        <div id="js-global-alert" class="alert alert-success" role="alert">
            <button type="button" class="close"><span aria-hidden="true"><span aria-hidden="true">&times;</span></span>
            </button>
            <h5 class="alert-heading"></h5>
            <p class="alert-content"></p>
        </div>



    </div>


@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.cart-item').forEach(item => {
            item.addEventListener('click', e => {
                if (e.target.classList.contains('qty-btn')) {
                    const input = item.querySelector('.qty-input');
                    console.log( input.value)
                    let val = parseInt(input.value,10) || 1;
                    if (e.target.classList.contains('minus')) val = Math.max(1, val - 1);
                    else val++;
                    input.value = val;
                    // updateCart();
                }
            });
            // khi gõ số trực tiếp
            item.querySelector('.qty-input').addEventListener('change', e => {
                if (e.target.value < 1) e.target.value = 1;
                // updateCart();
            });
        });
    </script>

     <script>
        app.controller('CartController', function($scope, cartItemSync, $interval, $rootScope) {
            $scope.items = @json($cartCollection);
            $scope.total_qty = "{{ $total_qty }}";
            $scope.checkCart = true;
            $scope.total = "{{$total_price}}";

            $scope.countItem = Object.keys($scope.items).length;

            jQuery(document).ready(function() {
                if ($scope.total_qty == 0) {
                    $scope.checkCart = false;
                    $scope.$applyAsync();
                }
            })

            $scope.changeQty = function(qty, product_id) {
                updateCart(qty, product_id)
            }

            $scope.incrementQuantity = function(product) {
                product.quantity = Math.min(product.quantity + 1, 9999);
            };

            $scope.decrementQuantity = function(product) {
                product.quantity = Math.max(product.quantity - 1, 0);
            };

            function updateCart(qty, product_id) {
                jQuery.ajax({
                    type: 'POST',
                    url: "{{ route('cart.update.item') }}",
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: {
                        product_id: product_id,
                        qty: qty
                    },
                    success: function(response) {
                        if (response.success) {
                            $scope.items = response.items;
                            $scope.total = response.total;
                            $scope.total_qty = response.count;
                            $interval.cancel($rootScope.promise);

                            $rootScope.promise = $interval(function() {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);

                            $scope.$applyAsync();
                        }
                    },
                    error: function(e) {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function() {
                        $scope.$applyAsync();
                    }
                });
            }

            $scope.removeItem = function(product_id) {
                jQuery.ajax({
                    type: 'GET',
                    url: "{{ route('cart.remove.item') }}",
                    data: {
                        product_id: product_id
                    },
                    success: function(response) {
                        if (response.success) {
                            $scope.items = response.items;
                            $scope.total = response.total;
                            $scope.total_qty = response.count;
                            if ($scope.total_qty == 0) {
                                $scope.checkCart = false;
                            }

                            $interval.cancel($rootScope.promise);

                            $rootScope.promise = $interval(function() {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);

                            $scope.countItem = Object.keys($scope.items).length;

                            $scope.$applyAsync();
                        }
                    },
                    error: function(e) {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function() {
                        $scope.$applyAsync();
                    }
                });
            }
        });
    </script>
@endpush
