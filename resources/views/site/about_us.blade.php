@extends('site.layouts.master')
@section('title')Giới thiệu - {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')
    <link href="/site/assets/breadcrumb_style.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all"/>


    <link href="/site/assets/style_page.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



@endsection

@section('content')
    <style>
        :root {
            /* Đổi chủ đạo sang NÂU */
            --brand: #8A6E4B; /* nâu – chủ đạo */
            --brand-ink: #5B422E; /* nâu đậm cho hover/tiêu đề */
            --ink: #1f2937; /* màu chữ chính */
            --muted: #6b7280;
            --soft: #F7F3EE; /* nền dịu hơi be */
            --radius: 16px;
            --shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }

        /* Nút giữ class cũ nhưng dùng màu mới */
        .btn {
            display: inline-block;
            /*padding: 10px 18px;*/
            border-radius: 999px;
            text-decoration: none;
            transition: .2s;
        }

        .btn-tea {
            background: var(--brand);
            color: #fff;
        }

        .btn-tea:hover {
            background: var(--brand-ink);
            color: #fff;
        }

        .btn-outline-tea {
            border: 1px solid var(--brand);
            color: var(--brand);
        }

        .btn-outline-tea:hover {
            background: var(--brand);
            color: #fff;
        }

        /* HERO (đã bỏ .hero-cloud) */
        .hero-about {
            position: relative;
            overflow: hidden;
            color: #fff;
        }

        .hero-about .hero-bg {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            /*transform: scale(1.05);*/
            filter: brightness(.72);
        }



        /* Overlay pha nâu nhẹ để hợp tông */
        .hero-about .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(91, 66, 46, .25), rgba(91, 66, 46, .48));
        }

        .hero-about .hero-inner {
            position: relative;
            padding: 88px 0 140px;
            text-align: center;
        }

        .hero-logo {
            width: 64px;
            height: 64px;
            object-fit: contain;
            margin-bottom: 12px;
            filter: drop-shadow(0 2px 10px rgba(0, 0, 0, .3));
        }

        .hero-about h1 {
            font-size: clamp(28px, 4vw, 48px);
            line-height: 1.2;
            font-family: "Dancing Script", cursive;
        }

        .hero-about .lead {
            max-width: 820px;
            margin: 16px auto 28px;
            font-size: clamp(15px, 1.8vw, 18px);
            opacity: .95;
        }


        /* Hiệu ứng 2: chiếc lá nhỏ bay nhẹ (tinh tế) */
        @keyframes floatY {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-8px) rotate(-4deg);
            }
        }

        .hero-about::before {
            content: "";
            position: absolute;
            right: 8%;
            top: 18%;
            width: 56px;
            height: 56px;
            background: url("data:image/svg+xml;utf8,\
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'>\
    <path fill='%23C2A684' d='M20 4c-6 1-10 5-12 11-1-1-2-2-3-3 1 4 3 7 7 8 6-2 8-8 8-16z'/>\
    <path fill='%23B08E6C' d='M11 19c2-3 3-6 5-9'/>\
  </svg>") center/contain no-repeat;
            opacity: .9;
            filter: drop-shadow(0 6px 10px rgba(0, 0, 0, .15));
            animation: floatY 5s ease-in-out infinite;
        }

        /* Nền dịu theo tông nâu (nếu dùng ở section khác) */
        .bg-soft {
            background: var(--soft);
            border-top: 1px solid #e7e2db;
            border-bottom: 1px solid #e7e2db;
        }

        /* Responsive nhẹ */
        @media (min-width: 768px) {
            .hero-about .hero-inner {
                padding: 110px 0 160px;
            }
        }


        /* SECTIONS */
        .section-pad {
            padding: 38px 0;
        }

        .section-head {
            text-align: center;
            margin-bottom: 24px;
        }

        .section-head h2 {
            font-size: clamp(26px, 3.2vw, 36px);
            color: var(--ink);
            margin: 0 0 6px;
        }

        .section-head .sub {
            color: var(--muted);
        }

        .h-title {
            font-size: clamp(22px, 2.6vw, 28px);
            color: var(--ink);
            margin-bottom: 8px;
        }

        .prose {
            color: var(--ink);
            font-size: 16px;
            line-height: 1.7;
        }

        .prose p {
            margin-bottom: 12px;
        }

        .img-card {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            background: #fff;
        }

        .img-card img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            /*aspect-ratio: 4 / 3;*/
        }

        .checklist {
            padding-left: 18px;
            margin: 10px 0 0;
        }

        .checklist li {
            margin: 6px 0;
        }

        .bg-soft {
            background: var(--soft);
            border-top: 1px solid #e5e7eb;
            border-bottom: 1px solid #e5e7eb;
        }

        /* VALUES */
        .values-grid {
            display: grid;
            grid-template-columns:repeat(2, minmax(0, 1fr));
            gap: 18px;
            list-style: none;
            padding: 0;
            margin: 0 0 18px;
        }

        .values-grid li {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 18px;
            padding: 18px;
            text-align: center;
            box-shadow: var(--shadow);
        }

        .values-grid b {
            display: block;
            margin-top: 8px;
            color: var(--ink);
        }

        .values-grid small {
            display: block;
            margin-top: 4px;
            color: var(--muted);
        }

        .v-ico {
            display: inline-flex;
            width: 60px;
            height: 60px;
            border-radius: 999px;
            background: rgba(47, 111, 59, .08);
            color: var(--tea);
            align-items: center;
            justify-content: center;
        }

        .v-ico svg {
            width: 40px;
            height: 40px;
        }

        /* TAGLINE */
        .tagline {
            text-align: center;
            font-family: "Dancing Script", cursive;
            font-size: clamp(26px, 3.4vw, 40px);
            color: var(--tea-ink);
            margin: 8px 0 0;
        }

        .tagline span {
            display: block;
            font: normal 16px/1.7 system-ui, -apple-system, Segoe UI, Roboto;
            color: var(--muted);
            margin-top: 6px
        }

        /* CALLOUT + CTA */
        .callout {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 18px;
            box-shadow: var(--shadow);
            height: 100%;
        }

        .callout b {
            color: var(--ink);
        }

        .callout p {
            color: var(--muted);
            margin: 6px 0 0;
        }

        .cta-box {
            margin-top: 28px;
            border-radius: 20px;
            padding: 24px;
            text-align: center;
            background: linear-gradient(135deg, rgba(47, 111, 59, .08), rgba(47, 111, 59, .02));
            border: 1px solid #e5e7eb;
        }

        .cta-box h3 {
            margin: 0 0 12px;
            color: var(--tea-ink);
            font-size: clamp(20px, 2.6vw, 26px);
        }

        /* RESPONSIVE */
        @media (min-width: 768px) {
            .hero-about .hero-inner {
                padding: 110px 0 160px;
            }

            .values-grid {
                grid-template-columns:repeat(4, 1fr);
            }
        }

        /* ---- Lá bay trong hero ---- */
        .hero-leaves {
            position: absolute;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .hero-leaves .leaf {
            --size: 56px; /* kích thước từng lá */
            --x: 12%; /* vị trí ngang */
            --y: 18%; /* vị trí dọc */
            --t: 18s; /* thời lượng chuyển động ngang */
            --delay: 0s; /* trễ ban đầu */
            --amp: 26px; /* biên độ lắc ngang */
            position: absolute;
            left: var(--x);
            top: var(--y);
            width: var(--size);
            height: calc(var(--size) * .8);
            animation: leaf-drift var(--t) linear infinite;
            animation-delay: var(--delay);
            will-change: transform;
        }

        /* nền chung, KHÔNG gán url cố định ở đây */
        .hero-leaves .leaf i {
            position: absolute;
            inset: 0;
            background: center/contain no-repeat;
            opacity: .95;
            filter: drop-shadow(0 6px 10px rgba(0, 0, 0, .18));
        }

        /* gán ảnh khác nhau cho từng lá */
        /*.leaf.l1 i{ background-image: url('/site/img/la-1.png'); }*/
        .leaf.l2 i {
            background-image: url('/site/img/la-2.png');
        }

        /*.leaf.l3 i{ background-image: url('/site/img/la-2.png'); }*/
        /*.leaf.l4 i{ background-image: url('/site/img/la-1.png'); }*/
        /*.leaf.l5 i{ background-image: url('/site/img/la-2.png'); }*/

        /* chuyển động ngang lắc nhẹ */
        @keyframes leaf-bob {
            0% {
                transform: translateY(calc(var(--ampY, 24px) * -1));
            }
            50% {
                transform: translateY(var(--ampY, 24px));
            }
            100% {
                transform: translateY(calc(var(--ampY, 24px) * -1));
            }
        }

        /* áp dụng cho mỗi lá */
        .hero-leaves .leaf {
            /* ...các biến khác ( --x, --y, --size, --t, --delay ) giữ nguyên */
            animation: leaf-bob var(--t) ease-in-out infinite;
            animation-delay: var(--delay);
        }

        /* Tuỳ biến từng lá (vị trí, tốc độ, kích thước, trễ) */
        .leaf.l1 {
            --x: 12%;
            --y: 20%;
            --size: 80px;
            --t: 19s;
            --delay: 0s;
            --amp: 28px;
        }

        .leaf.l2 {
            --x: 65%;
            --y: 28%;
            --size: 130px;
            --t: 16s;
            --delay: 1.5s;
            --amp: 22px;
        }

        .leaf.l3 {
            --x: 28%;
            --y: 38%;
            --size: 100px;
            --t: 20s;
            --delay: .8s;
            --amp: 26px;
        }

        .leaf.l4 {
            --x: 55%;
            --y: 56%;
            --size: 120px;
            --t: 22s;
            --delay: 2.2s;
            --amp: 30px;
        }

        .leaf.l5 {
            --x: 40%;
            --y: 18%;
            --size: 90px;
            --t: 17s;
            --delay: .2s;
            --amp: 20px;
        }


    </style>


    <style>
        /* ===== EARTHY THEME (brown) ===== */
        .theme-earth {
            --brand: #8B5E3C; /* nâu chủ đạo */
            --brand-2: #A47148; /* nâu sáng */
            --brand-3: #C89F7A; /* nâu be */
            --ink: #2B1E12; /* chữ đậm */
            --muted: #6B5B52; /* chữ nhạt */
            --soft: #FBF6F1; /* nền kem */
            --soft-2: #F6EFE9; /* nền kem 2 */
            --ring: rgba(139, 94, 60, .22);
            --shadow: 0 10px 30px rgba(43, 30, 18, .08);
        }

        /* Tiêu đề có highlight nâu be nhẹ */
        .theme-earth .section-head h2 {
            display: inline;
            background: linear-gradient(transparent 65%, rgba(200, 159, 122, .25) 0);
            border-radius: 4px;
        }

        /* Phụ đề dịu hơn */
        .theme-earth .section-head .sub {
            color: var(--muted);
            opacity: .9
        }

        /* Ảnh: bo tròn + viền kem */
        .theme-earth .img-card {
            border: 1px solid #E8DED6;
            background: #fff;
            box-shadow: var(--shadow);
            border-radius: 20px;
        }

        /* Nút nâu */
        .theme-earth .btn-tea {
            background: var(--brand);
            color: #fff;
            padding: 10px 16px;
            border-radius: 12px;
            font-weight: 600;
            box-shadow: 0 6px 18px rgba(139, 94, 60, .25);
            border: 1px solid rgba(0, 0, 0, .04);
            transition: transform .15s ease, box-shadow .2s ease, background .2s;
        }

        .theme-earth .btn-tea:hover {
            background: #7A5236;
            transform: translateY(-1px);
        }

        .theme-earth .btn-outline-tea {
            border: 1.5px solid var(--brand);
            color: var(--brand);
            /*padding: 10px 14px;*/
            border-radius: 12px;
            font-weight: 600;
            background: transparent;
        }

        .theme-earth .btn-outline-tea:hover {
            background: rgba(200, 159, 122, .15);
        }

        /* ===== Giá trị cốt lõi: card trắng + icon tròn be ===== */
        .theme-earth .values-grid {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 18px;
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        @media (max-width: 1024px) {
            .theme-earth .values-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .theme-earth .values-grid {
                grid-template-columns: 1fr;
            }
        }

        .theme-earth .values-grid li {
            background: #fff;
            border: 1px solid #EEE3D9;
            border-radius: 16px;
            padding: 16px;
            /*display: flex;*/
            gap: 14px;
            /*align-items: flex-start;*/
            box-shadow: 0 1px 0 rgba(0, 0, 0, .03), 0 12px 28px -24px rgba(43, 30, 18, .35);
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .theme-earth .values-grid li:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }

        .theme-earth .v-ico {
            width: 58px;
            height: 58px;
            flex: 0 0 58px;
            border-radius: 14px;
            /*display: grid;*/
            place-items: center;
            background: radial-gradient(60% 60% at 30% 30%, rgba(200, 159, 122, .30), rgba(200, 159, 122, .12));
            box-shadow: inset 0 0 0 1px rgba(139, 94, 60, .12);
            color: var(--brand-2);
        }

        .theme-earth .v-ico svg {
            width: 30px;
            height: 30px;
            stroke: currentColor;
            fill: none;
            stroke-width: 1.8;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        /* biến tấu tông nâu cho mỗi thẻ */
        .theme-earth .values-grid li:nth-child(1) .v-ico {
            color: #A47148;
        }

        .theme-earth .values-grid li:nth-child(2) .v-ico {
            color: #855E42;
        }

        .theme-earth .values-grid li:nth-child(3) .v-ico {
            color: #9C6E4F;
        }

        .theme-earth .values-grid li:nth-child(4) .v-ico {
            color: #B08968;
        }

        .theme-earth .values-grid b {
            font-size: 17px;
            color: var(--ink);
            display: block;
            margin-top: 2px;
        }

        .theme-earth .values-grid small {
            color: var(--muted);
            display: block;
        }

        /* Tagline: ngăn cách nhẹ với chấm tròn */
        .theme-earth .tagline {
            text-align: center;
            margin-top: 22px;
            color: var(--ink);
            font-weight: 600;
        }

        .theme-earth .tagline span {
            display: block;
            color: var(--muted);
            font-weight: 400;
        }

        /* ===== Callout: be dịu + viền trái nâu ===== */
        .theme-earth .callout {
            background: var(--soft-2);
            border: 1px solid #E8DED6;
            border-left: 4px solid var(--brand-2);
            border-radius: 14px;
            padding: 14px 16px;
            height: 100%;
            box-shadow: 0 6px 18px rgba(43, 30, 18, .05);
        }

        .theme-earth .callout b {
            color: var(--ink);
            display: block;
            margin-bottom: 4px;
        }

        .theme-earth .callout p {
            color: var(--muted);
            margin: 0;
        }

        /* CTA: khối gradient nâu be */
        .theme-earth .cta-box {
            margin-top: 26px;
            padding: 24px;
            text-align: center;
            border-radius: 18px;
            background: linear-gradient(135deg, #F3E7DD, #EADACB);
            border: 1px solid #E8DED6;
            box-shadow: var(--shadow);
        }

        .theme-earth .cta-box h3 {
            color: var(--ink);
            margin: 0 0 10px;
        }

        /* nền be cho section (tuỳ chọn) */
        .bg-cream {
            background: var(--soft);
            border-top: 1px solid #EEE3D9;
            border-bottom: 1px solid #EEE3D9;
        }

        /* Giảm motion nếu người dùng hạn chế */
        @media (prefers-reduced-motion: reduce) {
            .theme-earth .values-grid li, .theme-earth .btn-tea {
                transition: none;
            }
        }

    </style>



    <style>


        /* Giữ nền/viền như trước */
        .panel-tea {
            position: relative;
            background: var(--tea-be-2);
            border: 1px solid var(--tea-border);
            border-radius: 22px;
            padding: 22px;
            box-shadow: var(--tea-shadow);
        }

        /* Xếp chuỗi: khối đầu + khối cuối */
        .panel-tea.chain-first {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .section-pad.stack-next { /* section thứ 2 dính sát section trên */
            padding-top: 0;
            margin-top: -8px; /* kéo lên nhẹ để “ăn” vào nhau */
        }

        .stack-next .panel-tea.chain-last {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-top: 0; /* bỏ viền trên để không bị “đúp” */
            margin-top: -1px; /* chồng đúng 1px, liền biên */
        }

        /* Đường phân cách mảnh ở mép nối (rộng hơn biên để nhìn mềm) */
        .stack-next .panel-tea.chain-last::before {
            content: "";
            position: absolute;
            left: 16px;
            right: 16px;
            top: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, #E7D9CC, transparent);
        }

        /* Tuỳ chọn: góc highlight rất nhẹ vẫn liền khối */
        .panel-tea::after {
            content: "";
            position: absolute;
            inset: 0;
            pointer-events: none;
            border-radius: inherit;
            background: radial-gradient(120px 120px at 0 0, rgba(200, 159, 122, .14), transparent 60%),
            radial-gradient(120px 120px at 100% 100%, rgba(200, 159, 122, .10), transparent 58%);
        }

        /* Ảnh & prose giữ như bạn đã dùng */
        .figure-tea {
            background: #fff;
            padding: 10px;
            border-radius: 18px;
            border: 1px solid var(--tea-border);
            box-shadow: 0 14px 30px rgba(43, 30, 18, .08);
        }

        .figure-tea .img-card {
            border-radius: 14px;
            border: 1px solid #f1ece6;
            box-shadow: none;
        }

        .panel-tea .prose {
            position: relative;
            padding-left: 16px;
            color: var(--tea-ink);
        }

        /*.panel-tea .prose::before {*/
        /*    content: "";*/
        /*    position: absolute;*/
        /*    left: 0;*/
        /*    top: 6px;*/
        /*    bottom: 6px;*/
        /*    width: 3px;*/
        /*    border-radius: 3px;*/
        /*    background: linear-gradient(#C89F7A, #A47148);*/
        /*}*/

    </style>

    <style>
        /* ===== Nét bút lông (calligraphy) cho viền trái trong .prose ===== */
        :root{
            /* Chiều rộng nét và màu nâu có sẵn */
            --brush-w: 10px;
            --brush-c1: #C89F7A;
            --brush-c2: #8B5E3C;

            /* SVG mask mô phỏng vệt bút lông, mép lượn & đầu đậm đuôi mảnh */
            --brush-mask: url("data:image/svg+xml;utf8,\
<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 100' preserveAspectRatio='none'>\
  <path d='M6 0 C3 8 8 16 7 25 C6 35 11 42 9 50 C7 60 12 68 9 78 C7 86 12 92 14 100 L2 100 L2 0 Z' fill='black'/>\
</svg>");
        }

        /* Khối chữ */
        .panel-tea .prose{
            position: relative;
            padding-left: calc(var(--brush-w) + 12px);
            color: var(--tea-ink);
        }

        /* Viền thư pháp */
        .panel-tea .prose::before{
            content: "";
            position: absolute;
            left: 0; top: 6px; bottom: 6px;
            width: var(--brush-w);
            background: linear-gradient(var(--brush-c1), var(--brush-c2));
            -webkit-mask: var(--brush-mask) center/100% 100% no-repeat;
            mask: var(--brush-mask) center/100% 100% no-repeat;
            filter: drop-shadow(0 0 0.5px rgba(139,94,60,.35));
        }

        /* Chấm mực nhẹ ở đầu nét (nhìn “mềm” hơn) */
        .panel-tea .prose::after{
            content:"";
            position:absolute; left: calc(var(--brush-w)*0.1);
            top: 10px; width: 9px; height: 9px; border-radius: 50%;
            background: radial-gradient(circle at 35% 35%, #8B5E3C, #5d3e27 70%, transparent 72%);
            opacity: .55;
        }

        /* Màn hình lớn: nét dày hơn chút */
        @media (min-width: 992px){
            :root{ --brush-w: 12px; }
        }

        /* Fallback nếu trình duyệt không hỗ trợ mask => dùng thanh gradient trơn */
        @supports not (mask: paint){
            .panel-tea .prose::before{
                -webkit-mask:none; mask:none; border-radius: 2px;
            }
        }

        html{ scroll-behavior: smooth; }

        #our-story{ scroll-margin-top: 80px; } /* sửa 80px theo chiều cao header */


    </style>
    <div class="bodywrap" style="background: #fff">
        <section class="bread-crumb" style="background: #f1e8d7">
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

                    <li><strong><span>Giới thiệu</span></strong></li>

                </ul>
            </div>
        </section>


        <section class="page">
            <section class="hero-about">
                <div class="hero-bg" style="background-image:url({{ $about->banner->path ?? '' }})"></div>
                <div class="hero-overlay"></div>

                <!-- Lá bay -->
                <div class="hero-leaves" aria-hidden="true">
                    <span class="leaf l1"><i></i></span>
                    <span class="leaf l2"><i></i></span>
                    <span class="leaf l3"><i></i></span>
                    <span class="leaf l4"><i></i></span>
                    <span class="leaf l5"><i></i></span>
                </div>

                <div class="container hero-inner">
                    <h1>
                        {!! $about->title !!}
                    </h1>
                    <p class="lead">{{ $about->intro }}</p>
                    <a href="#our-story" class="btn btn-tea">Tìm hiểu câu chuyện</a>
                </div>
            </section>


            <div class="container theme-earth">
                <div class="row">
                    <div class="col-12">
                        <!-- Câu chuyện -->
                        <section id="our-story" class="section-pad">
                            <div class="section-head">
                                <h2>{{ $about->title_1 }}</h2>
                                <p class="sub">{{ $about->intro_1 }}</p>
                            </div>

                            <!-- thêm chain-first -->
                            <div class="panel-tea chain-first">
                                <div class="row g-4 align-items-center">
                                    <div class="col-md-6">
                                        <div class="prose">
                                            {!! $about->content_1 !!}
                                            <a href="/lien-he" class="btn btn-outline-tea mt-2">Liên hệ chúng tôi</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="figure-tea">
                                            <figure class="img-card">
                                                <img src="{{ $about->image->path ?? '' }}" alt="Câu chuyện thương hiệu"
                                                     loading="lazy">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- BỎ <div class="tea-divider"></div> -->

                        <!-- Mục tiêu & Sản phẩm tâm huyết -->
                        <section class="section-pad stack-next">
                            <!-- bỏ panel-tea--alt, thêm chain-last -->
                            <div class="panel-tea chain-last">
                                <div class="row g-4 align-items-start">
                                    <div class="col-md-6 order-md-2">
                                        <h3 class="h-title">{{ $about->title_2 }}</h3>
                                        <p class="sub">{{ $about->intro_2 }}</p>
                                        <div class="prose">
                                            {!! $about->content_2 !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="figure-tea">
                                            <figure class="img-card">
                                                <img src="{{ $about->image_second->path ?? '' }}"
                                                     alt="Mục tiêu của tiệm" loading="lazy">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section-pad">
                            <ul class="values-grid">
                                <li>
      <span class="v-ico" aria-hidden="true">
        <!-- Award: chất lượng -->
        <svg viewBox="0 0 24 24">
          <circle cx="12" cy="8" r="4.5"></circle>
          <path d="M8 14l-2.5 6L12 17l6.5 3L16 14"></path>
          <path d="M10.2 8.1l1.5 1.6 2.8-3.2"></path>
        </svg>
      </span>
                                    <b>Chất lượng dẫn đầu</b>
                                    <small>Chuẩn hoá quy trình – test cảm quan.</small>
                                </li>

                                <li>
      <span class="v-ico" aria-hidden="true">
        <!-- Map-pin + leaf: nguồn gốc -->
        <svg viewBox="0 0 24 24">
          <path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11z"></path>
          <circle cx="12" cy="10" r="2.6"></circle>
          <path d="M16 5c1.8 0 3-1.4 3-3-1.8 0-3 1.4-3 3z"></path>
        </svg>
      </span>
                                    <b>Rõ ràng nguồn gốc</b>
                                    <small>Truy xuất 100% nguyên liệu.</small>
                                </li>

                                <li>
      <span class="v-ico" aria-hidden="true">
        <!-- Hands-heart: cộng đồng -->
        <svg viewBox="0 0 24 24">
          <path d="M3 12.5c2 0 3 2 4.8 2 1.3 0 2.3-.8 3.2-1.6"></path>
          <path d="M21 12.5c-2 0-3 2-4.8 2-1.3 0-2.3-.8-3.2-1.6"></path>
          <path d="M12 8.5c1.8-2 5.2-.6 5 1.7-.2 2.2-2.9 3.7-5 5.3-2.1-1.6-4.8-3.1-5-5.3-.2-2.3 3.2-3.7 5-1.7z"></path>
        </svg>
      </span>
                                    <b>Thân thiện cộng đồng</b>
                                    <small>Ưu tiên bền vững & địa phương.</small>
                                </li>

                                <li>
      <span class="v-ico" aria-hidden="true">
        <!-- Headset: lắng nghe -->
        <svg viewBox="0 0 24 24">
          <path d="M4 12a8 8 0 0 1 16 0v4"></path>
          <rect x="3" y="13" width="4" height="6" rx="2"></rect>
          <rect x="17" y="13" width="4" height="6" rx="2"></rect>
          <path d="M12 20.2v.3a2.5 2.5 0 0 1-2.5 2.5"></path>
        </svg>
      </span>
                                    <b>Lắng nghe khách hàng</b>
                                    <small>Phản hồi nhanh – dịch vụ tận tâm.</small>
                                </li>
                            </ul>

                            <div class="tagline">
                                Tràn đầy năng lượng mỗi ngày
                                <span>Nhấp một ngụm trà thơm, an vui bên bệ cửa.</span>
                            </div>
                        </section>

                        <style>
                            /* Chỉ áp dụng cho block này trên mobile */
                            @media (max-width: 480px){
                                .section-pad .row.g-4{
                                    margin-left: 0 !important;
                                    margin-right: 0 !important; /* vô hiệu hóa rule .row toàn cục */
                                }
                                .section-pad .row.g-4 > [class*="col-"]{
                                    padding-left: 12px;  /* khôi phục gutter ở cột */
                                    padding-right: 12px;
                                }
                                /* khoảng cách dọc giữa các item */
                                .section-pad .row.g-4 > [class*="col-"] + [class*="col-"]{
                                    margin-top: 12px;
                                }
                            }

                        </style>
                        <!-- Cam kết + CTA -->
                        <section class="section-pad">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="callout">
                                        <b>Cam kết hoàn tiền</b>
                                        <p>Nếu sản phẩm lỗi do nhà sản xuất.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="callout">
                                        <b>Giao nhanh – đóng gói kỹ</b>
                                        <p>Bảo toàn hương vị và hình thức khi đến tay bạn.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="callout">
                                        <b>Tư vấn chọn trà</b>
                                        <p>Gợi ý hương vị theo nhu cầu & thể trạng.</p>
                                    </div>
                                </div>
                            </div>

                        </section>

                    </div>
                </div>

            </div>

        </section>


    </div>

@endsection

@push('scripts')



@endpush
