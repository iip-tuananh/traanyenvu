@extends('site.layouts.master')
@section('title')Liên hệ - {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')
    <link href="/site/assets/main.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />
    <link href="/site/assets/breadcrumb_style.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />


    <link href="/site/assets/style_page.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />




    <link href="/site/assets/contact_style.scssd27c.css?1739018973665" rel="stylesheet" type="text/css" media="all" />

    <style>
        .invalid-feedback {
            margin-bottom: 10px;
            margin-top: -10px;
            display: none;
            width: 100%;
            font-size: 100%;
            color: #dc3545;
        }
    </style>
@endsection

@section('content')
    <div class="bodywrap" ng-controller="AboutPage">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb" >
                    <li class="home">
                        <a  href="{{ route('front.home-page') }}" title="Trang chủ"><span >Trang chủ</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>&nbsp;</span>
                    </li>

                    <li><strong ><span>Liên hệ</span></strong></li>

                </ul>
            </div>
        </section>
        <h1 class="title-head-contact a-left d-none">Liên hệ</h1>
        <div class="layout-contact">
            <div class="container">
                <div class="bg-shadow">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="contact">
                                <h4>
                                   {{ $config->short_name_company }}
                                </h4>

                                <div class="des_foo">

                                </div>

                                <div class="time_work">
                                    <div class="item">
                                        <b>Địa chỉ:</b>

                                        {{ $config->address_company }}

                                    </div>
                                    <div class="item">
                                        <b>Hotline:</b> <a class="fone" href="tel:{{ $config->hotline }}" title="{{ $config->hotline }}"> {{ $config->hotline }}</a>
                                    </div>
                                    <div class="item">
                                        <b>Email:</b> <a href="" title="{{ $config->email }}"><span class="__cf_email__">{{ $config->email }}</span></a>
                                    </div>



                                </div>
                            </div>
                            <div class="form-contact">
                                <h4>
                                    Liên hệ với chúng tôi
                                </h4>
                                <div id="pagelogin">
                                    <form  id="form-contact" accept-charset="UTF-8">
                                        <div class="group_contact">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <input placeholder="Họ và tên" type="text" class="form-control  form-control-lg" required value="" name="name">
                                                    <div class="invalid-feedback d-block" ng-if="errors['name']"><% errors['name'][0] %></div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <input placeholder="Email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required id="email1" class="form-control form-control-lg" value="" name="email">
                                                    <div class="invalid-feedback d-block" ng-if="errors['email1']"><% errors['email1'][0] %></div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <input type="text" placeholder="Điện thoại" name="phone"  class="form-control form-control-lg" required>
                                                    <div class="invalid-feedback d-block" ng-if="errors['phone']"><% errors['phone'][0] %></div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <textarea placeholder="Nội dung" name="message" id="comment" class="form-control content-area form-control-lg" rows="5" Required></textarea>
                                                    <div class="invalid-feedback d-block" ng-if="errors['message']"><% errors['message'][0] %></div>

                                                    <button type="button" class="btn btn-primary" ng-click="submitContact()">Gửi tin nhắn <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path> </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div id="contact_map" class="map">
                                {!! $config->location !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="js-global-alert" class="alert alert-success" role="alert">
            <button type="button" class="close"><span aria-hidden="true"><span aria-hidden="true">&times;</span></span></button>
            <h5 class="alert-heading"></h5>
            <p class="alert-content"></p>
        </div>


























    </div>

@endsection

@push('scripts')
    <script>
        app.controller('AboutPage', function ($rootScope, $scope, $sce, $interval) {
            $scope.errors = [];
            $scope.submitContact = function () {
                var url = "{{route('front.submitContact')}}";
                var data = jQuery('#form-contact').serialize();
                $scope.loading = true;
                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: data,
                    success: function (response) {
                        if (response.success) {
                            toastr.success(response.message);
                            jQuery('#form-contact')[0].reset();
                            $scope.errors = [];
                            $scope.$apply();
                        } else {
                            $scope.errors = response.errors;
                            toastr.warning(response.message);
                        }
                    },
                    error: function () {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function () {
                        $scope.loading = false;
                        $scope.$apply();
                    }
                });
            }
        })

    </script>
@endpush
