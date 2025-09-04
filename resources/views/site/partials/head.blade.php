
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#8d251c" />
    <link rel="canonical" href="index.html"/>
    <meta name='revisit-after' content='2 days' />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="noodp,index,follow" />
    <title>@yield('title')</title>


    <link rel="shortcut icon" href="{{@$config->favicon->path ?? ''}}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{@$config->favicon->path ?? ''}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{@$config->favicon->path ?? ''}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{@$config->favicon->path ?? ''}}">
    <meta name="application-name" content="{{ $config->web_title }}" />
    <meta name="generator" content="@yield('title')" />

    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:site_name" content="{{ url()->current() }}">
    <meta property="og:image:alt" content="{{ $config->web_title }}">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="@yield('image')">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ url()->current() }}" />





    <link rel="preload" as="script" href="/site/assets/jqueryd27c.js?1739018973665" />
    <script src="/site/assets/jqueryd27c.js?1739018973665" type="text/javascript"></script>
    <link rel="preload" as="script" href="/site/assets/swiperd27c.js?1739018973665" />
    <script src="/site/assets/swiperd27c.js?1739018973665" type="text/javascript"></script>
    <link rel="preload" as="script" href="/site/assets/lazyd27c.js?1739018973665" />
    <script src="/site/assets/lazyd27c.js?1739018973665" type="text/javascript"></script>


    <link rel="preload" as='image' href="/site/assets/header_pattentd27c.png?1739018973665">


    <link rel="preload" as='image' href="/site/assets/footer_pattentd27c.png?1739018973665">


    <link rel="preload" as='style' type="text/css" href="/site/assets/fonts.scssd27c.css?1739018973665">
    <link rel="preload" as='style' type="text/css" href="/site/assets/main.scssd27c.css?1739018973665">

    <link rel="preload" as='style'  type="text/css" href="/site/assets/index.scssd27c.css?1739018973665">


    <link rel="preload" as='style'  type="text/css" href="/site/assets/bootstrap-4-3-mind27c.css?1739018973665">
    <link rel="preload" as='style'  type="text/css" href="/site/assets/quickviews_popup_cart.scssd27c.css?1739018973665">
    <style>
        :root {
            --mainColor: #7A4900;
            --subColor: #fdc97d;
            --textColor: #7A4900;
            --hover: #d0a73c;
            --price: #d31100;
        }
    </style>

    <style>
        /* Ngăn hiển thị template Angular trước khi compile */
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak {
            display: none !important;
        }
    </style>

    <link href="/site/assets/fonts.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/site/assets/bootstrap-4-3-mind27c.css?1739018973665">
    <link href="/site/assets/main.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />

    <link href="/site/assets/index.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />




    <link href="/site/assets/quickviews_popup_cart.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />


    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;600&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap&subset=vietnamese" rel="stylesheet">


    <style>
        @font-face {
            font-family: UTMYenTu;
            src: url('/site/fonts/00190-UTM-Yen-Tu.ttf');
        }



    </style>
    <script>
        var Bizweb = Bizweb || {};
        Bizweb.store = 'sudes-nest.mysapo.net';
        Bizweb.id = 506650;
        Bizweb.theme = {"id":944598,"name":"Sudes Nest","role":"main"};
        Bizweb.template = 'index';
        if(!Bizweb.fbEventId)  Bizweb.fbEventId = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
            var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
        });
    </script>
    <script>
        (function () {
            function asyncLoad() {
                var urls = [];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
        })();
    </script>


    <script>
        window.BizwebAnalytics = window.BizwebAnalytics || {};
        window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
        window.BizwebAnalytics.meta.currency = 'VND';
        window.BizwebAnalytics.tracking_url = 's.html';

        var meta = {};


        for (var attr in meta) {
            window.BizwebAnalytics.meta[attr] = meta[attr];
        }
    </script>


    <script src="dist/js/stats.minbadf.js?v=96f2ff2"></script>
















    <script type="application/ld+json">
        {
            "@context" : "http://schema.org",
              "@type" : "Organization",
              "legalName" : "Sudes Nest",
              "url" : "https://sudes-nest.mysapo.net",
              "contactPoint":[{
                "@type" : "ContactPoint",
                "telephone" : "+84 0907920975",
                "contactType" : "customer service"
              }],
              "logo":"//bizweb.dktcdn.net/100/506/650/themes/944598/assets/logo.png?1739018973665",
              "sameAs":[
              "#",
            "#"
            ]
        }
    </script>
    <script type="application/ld+json">
        {
          "@context" : "http://schema.org",
          "@type" : "WebSite",
          "name" : "Sudes Nest",
          "url" : "https://sudes-nest.mysapo.net",
          "potentialAction":{
                "@type" : "SearchAction",
                "target" : "https://sudes-nest.mysapo.net/search?query={search_term}",
                "query-input" : "required name=search_term"
              }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            awe_lazyloadImage();

            /*Header promotion*/

            var index = 0,
                stop = false,
                num = document.querySelectorAll('.js-promo > li').length,
                liEls = document.querySelectorAll('.js-promo > li');

            function shippingflipInX() {
                if (stop) return false;
                if (index > (num - 2)) {
                    liEls.forEach(function (el) {
                        el.classList.add('see-none');
                        el.classList.remove('animated', 'flipInX', 'see-block');
                    });
                    index = 0;
                    liEls[0].classList.add('animated', 'flipInX', 'see-block');
                    liEls[0].classList.remove('see-none');
                    return;
                }

                liEls.forEach(function (el) {
                    el.classList.add('see-none');
                    el.classList.remove('animated', 'flipInX', 'see-block');
                });
                liEls[index + 1].classList.remove('see-none');
                liEls[index + 1].classList.add('animated', 'flipInX', 'see-block');
                index++;
            }

            var hdtimer = setInterval(function () {
                shippingflipInX();
            }, 5000);

            document.querySelector('.js-promo').addEventListener('mouseenter', function () {
                stop = true;
            });

            document.querySelector('.js-promo').addEventListener('mouseleave', function () {
                stop = false;
            });


            function getItemSearch(name, smartjson) {
                return fetch(`https://${window.location.hostname}/search?q=${name}&view=${smartjson}&type=product`)
                    .then(res => res.json())
                    .catch(err => console.error(err));
            }

            var searchRecent = document.querySelector('.search-suggest .search-recent');
            var searchRecentList = localStorage.getItem('search_recent_list');
            var recentList = searchRecentList ? JSON.parse(searchRecentList) : [];

            if (recentList.length > 0) {
                searchRecent.classList.remove('d-none');
                var searchList = searchRecent.querySelector('.search-list');
                recentList.forEach(function (item) {
                    var link = document.createElement('a');
                    link.href = `/search?query=${encodeURIComponent(item)}&type=product`;
                    link.textContent = item;
                    link.title = `Tìm kiếm ${item}`;
                    link.classList.add('search-item');

                    var closeSpan = document.createElement('span');
                    closeSpan.textContent = 'Đóng';
                    closeSpan.title = 'Đóng';
                    closeSpan.classList.add('close');

                    closeSpan.addEventListener('click', function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        var index = recentList.indexOf(item);
                        if (index !== -1) {
                            recentList.splice(index, 1);
                            localStorage.setItem('search_recent_list', JSON.stringify(recentList));
                            searchList.removeChild(link);
                            if (recentList.length == 0) {
                                searchRecent.classList.toggle('d-none');
                            }
                        }
                    });

                    link.appendChild(closeSpan);
                    searchList.appendChild(link);
                });
            }

            var searchInput = document.querySelectorAll('.header_tim_kiem input[type="text"], .search-mobile input[type="text"]');
            searchInput.forEach(function (input) {
                input.addEventListener('keyup', function (e) {
                    let term = this.value.trim();
                    let data = '';
                    var resultbox = '';
                    if (term.length > 1) {
                        searchRecent.classList.add('d-none');

                        async function goawaySearch() {
                            data = await getItemSearch(term, 'smartjson');
                            setTimeout(function () {
                                var sizeData = Object.keys(data).length;
                                if (sizeData > 0) {
                                    Object.keys(data).forEach(function (key) {
                                        if (data[key].compare_price !== 0) {
                                            resultbox += `<a class="product-smart" href="${data[key].url}" title="${data[key].name}"><div class="image_thumb"><img width="58" height="58" class="lazyload loaded" src="${data[key].image}" data-src="${data[key].image}" alt="${data[key].name}" data-was-processed="true"></div><div class="product-info"><h3 class="product-name"><span>${data[key].name}</span></h3><div class="price-box"><span class="price">${data[key].price}</span><span class="compare-price">${data[key].compare_price}</span></div></div></a>`;
                                        } else {
                                            resultbox += `<a class="product-smart" href="${data[key].url}" title="${data[key].name}"><div class="image_thumb"><img width="58" height="58" class="lazyload loaded" src="${data[key].image}" data-src="${data[key].image}" alt="${data[key].name}" data-was-processed="true"></div><div class="product-info"><h3 class="product-name"><span>${data[key].name}</span></h3><div class="price-box"><span class="price">${data[key].price}</span></div></div></a>`;
                                        }
                                    });
                                    resultbox += `<a href="/search?query=${term}&type=product" class="see-all-search" title="Xem tất cả">Xem tất cả kết quả »</a>`;
                                    document.querySelector('.list-search').innerHTML = resultbox;
                                } else {
                                    document.querySelector('.list-search').innerHTML = '<div class="not-pro">Không có thấy kết quả tìm kiếm</div>';
                                }
                            }, 200);
                        }

                        goawaySearch();
                    } else {
                        if (recentList.length > 0) {
                            searchRecent.classList.remove('d-none');
                        }
                        document.querySelector('.list-search').innerHTML = '';
                    }
                });
            });

        });
        function awe_lazyloadImage() {
            var ll = new LazyLoad({
                elements_selector: ".lazyload",
                load_delay: 100,
                threshold: 0
            });
        } window.awe_lazyloadImage=awe_lazyloadImage;


    </script>

