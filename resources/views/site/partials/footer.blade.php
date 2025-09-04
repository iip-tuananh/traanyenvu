<footer class="footer">
    <div class="mid-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-cus-30 footer-info">
                    <div class="logo-footer">
                        <a href="{{ route('front.home-page') }}" title="{{ $config->web_title }}">
                            <img width="300" height="96"
                                 src="{{ $config->image->path ?? '' }}"
                                 data-src="{{ $config->image->path ?? '' }}"
                                 alt="{{ $config->web_title }}" class="lazyload">
                        </a>
                    </div>
                    <div class="list-menu toggle-mn">
                        <div class="content-contact clearfix">
							<span class="list_footer">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
									<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
								</svg>
								<b>Địa chỉ: </b>

								{{ $config->address_company }}

							</span>
                        </div>
                        <div class="content-contact clearfix">
							<span class="list_footer">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-telephone-fill" viewBox="0 0 16 16">
									<path fill-rule="evenodd"
                                          d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
								</svg>
								<b>Điện thoại: </b>
								<a title="{{ $config->hotline }}" href="tel:{{ $config->hotline }}">
									{{ $config->hotline }}
								</a>
							</span>
                        </div>
                        <div class="content-contact clearfix">
							<span class="list_footer">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-envelope-fill" viewBox="0 0 16 16">
									<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
								</svg>
								<b>Email: </b>
								<a title="{{ $config->email }}"
                                   href="#">
									<span class="__cf_email__" >{{ $config->email }}</span>
								</a>
							</span>
                        </div>
                    </div>

                    <div class="social-footer">
                        <div class="social">

                            <a href="{{ $config->facebook }}" target="_blank" aria-label="Facebook"
                               title="Theo dõi chúng tôi trên Facebook">
                                <img class="lazyload" width=35 height=35 alt="Facebook"
                                     data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/facebook_2.svg?1739018973665"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                            </a>


                            <a href="{{ $config->instagram }}" target="_blank" aria-label="Instagram"
                               title="Theo dõi chúng tôi trên Instagram">
                                <img class="lazyload" width=35 height=35 alt="Instagram"
                                     data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/instagram_1.svg?1739018973665"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                            </a>



                            <a href="{{ $config->twitter }}" target="_blank" aria-label="Tiktok"
                               title="Theo dõi chúng tôi trên Tiktok">
                                <img class="lazyload" width=35 height=35 alt="Tiktok"
                                     data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tiktok.svg?1739018973665"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                            </a>

                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-md-4 col-lg-cus-20 footer-click">
                    <h4 class="title-menu clicked">
                        <span>Danh mục</span>
                    </h4>
                    <ul class="list-menu toggle-mn hidden-mob footer-click">

                        <li class="li_menu">
                            <a href="{{ route('front.abouts') }}" title="Giới thiệu">Giới thiệu</a>
                        </li>

                        <li class="li_menu">
                            <a href="{{ route('front.getProductList') }}" title="Tất cả sản phẩm">Tất cả sản phẩm</a>
                        </li>

                        <li class="li_menu">
                            <a href="{{ route('front.blogs') }}" title="Tin tức">Tin tức</a>
                        </li>

                        <li class="li_menu">
                            <a href="{{ route('front.contact') }}" title="Liên hệ">Liên hệ</a>
                        </li>

                    </ul>
                </div>

                <div class="col-xs-12 col-md-4 col-lg-cus-20 footer-click">
                    <h4 class="title-menu clicked">
                        <span>Chính sách</span>
                    </h4>
                    <ul class="list-menu toggle-mn hidden-mob">

                        @foreach($polis as $poli)
                            <li class="li_menu">
                                <a href="{{ route('front.getPolicy', $poli->slug) }}" title="{{ $poli->title }}">{{ $poli->title }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-cus-30">
                    <div class="block-payment">
                        <h4 class="title-menu">
                            <span>Hỗ trợ thanh toán</span>
                        </h4>

                        <div class="payment-footer list-menu">


                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="MoMo"
                                     data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/payment_1.png?1739018973665"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                            </div>


                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="Zalo Pay"
                                     data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/payment_2.png?1739018973665"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                            </div>


                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="VnPay"
                                     data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/payment_3.png?1739018973665"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                            </div>


                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="Moca"
                                     data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/payment_4.png?1739018973665"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                            </div>


                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="Visa"
                                     data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/payment_5.png?1739018973665"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                            </div>


                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="ATM"
                                     data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/payment_6.png?1739018973665"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                            </div>


                        </div>

                    </div>
                    <div class="block-certifi">
                        <h4 class="title-menu">
                            <span>Chứng nhận</span>
                        </h4>
                        <div class="certifi-footer">

                            <a href="#" title="Chứng nhận 1" target="_blank">
                                <img width=335 height=108 class="lazyload" alt="Chứng nhận 1"
                                     data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/certifi_1.png?1739018973665"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                            </a>


                            <a href="#" title="Chứng nhận 2" target="_blank">
                                <img width=335 height=108 class="lazyload" alt="Chứng nhận 2"
                                     data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/certifi_2.png?1739018973665"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-footer-bottom copyright clearfix">
        <div class="container">
            <div class="row tablet">
                <div id="copyright" class="col-lg-12 col-md-12 col-xs-12 fot_copyright">
					<span class="wsp">

						<span class="mobile">© Bản quyền thuộc về <b>{{ $config->web_title }}</b>

						</span>

					</span>
                </div>
            </div>

            <a href="#" class="backtop" title="Lên đầu trang">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)"
                          stroke="black" fill="#fff" stroke-width="2"/>
                    <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                    <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </a>

        </div>
    </div>
</footer>
