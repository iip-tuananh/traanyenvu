@extends('site.layouts.master')
@section('title')Tin tức - {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')
    <link href="/site/assets/main.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />
    <link href="/site/assets/breadcrumb_style.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />




    <link href="/site/assets/blog_article_style.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />
    <link href="/site/assets/sidebar_style.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />

@endsection


@section('content')
    <div class="bodywrap">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb" >
                    <li class="home">
                        <a  href="{{ route('front.home-page') }}" title="Trang chủ"><span >Trang chủ</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>&nbsp;</span>
                    </li>


                    <li><strong ><span>Tin tức</span></strong></li>


                </ul>
            </div>
        </section>
        <div class="blog_wrapper layout-blog" itemscope itemtype="https://schema.org/Blog">
            <meta itemprop="name" content="Kiến thức">
            <meta itemprop="description" content="Sudes Nest - Đến nay đã chiếm trọn niềm tin của khách hàng bởi chất lượng - tinh tế - hợp khẩu vị trong từng dòng sản phẩm về Yến sào.">
            <div class="container">
                <div class="row">
                    <div class="right-content col-lg-12 col-12">
                        <div class="title-page">
                            <h1>Tin tức</h1>
                            <div class="title-separator">
                                <div class="separator-center"></div>
                            </div>
                        </div>

                        <div class="row list-news">

                            @foreach($blogs as $blog)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="item-blog">
                                        <div class="wrapper">
                                            <a class="block-thumb thumb" href="{{ route('front.blogDetail', $blog->slug) }}"
                                               title="{{ $blog->name }}">

                                                <img width="400" height="240" class="lazyload duration-300"
                                                     src="{{ $blog->image->path ?? '' }}"
                                                     data-src="{{ $blog->image->path ?? '' }}"  alt="">

                                            </a>
                                            <div class="block-content">
                                                <h3>
                                                    <a href="{{ route('front.blogDetail', $blog->slug) }}"
                                                       title="{{ $blog->name }}" class="line-clamp-2-new">{{ $blog->name }}</a>
                                                </h3>
                                                <div class="article-content">

                                                    <p class="justify line-clamp line-clamp-3">
                                                        {{ $blog->intro }}
                                                    </p>

                                                    <div class="article-info">
                                                        <p class="time-post">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                                            </svg>
                                                            <span>
							{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}
						</span>
                                                        </p>

                                                        <a href="{{ route('front.blogDetail', $blog->slug) }}" title="Đọc thêm" class="read-more">Đọc thêm »</a>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            @endforeach


                            <div class="pagi-div">
                                {{ $blogs->links('site.pagination.paginate2') }}
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="ab-module-article-mostview"></div>
        <div id="js-global-alert" class="alert alert-success" role="alert">
            <button type="button" class="close"><span aria-hidden="true"><span aria-hidden="true">&times;</span></span></button>
            <h5 class="alert-heading"></h5>
            <p class="alert-content"></p>
        </div>





















    </div>

@endsection

@push('scripts')
    <script>
    </script>
@endpush
