@extends('layouts.app')

@section('title', 'Trang chủ')

@section('menu.home', 'active')

@section('styles')
    {{Html::style('metronic/dtui/css/index.css')}}
    {{Html::style('metronic/dtui/css/main.css')}}
@endsection

@section('content')
    <!--BEGIN Cover-->
    <div class="container-fluid">
        <div class="row about-header">
            <div class="col-md-12">
                <h1>{{config('app.name')}}</h1>
                <h2>Hệ thống tiếp nhận khóa luận sinh viên</h2>
                {{Html::linkRoute('introduction', 'Giới thiệu hệ thống', [],['class'=>'btn btn-lg btn-success'])}}
            </div>
        </div>
    </div>
    <!--END Cover-->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN PAGE CONTENT BODY -->
            <div class="page-content">
                <!--BEGIN: Intro-->
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="portlet light">
                            <div class="card-icon">
                                <i class="icon-book-open font-red-sunglo theme-font"></i>
                            </div>
                            <div class="card-title">
                                <span> Tìm hiểu lĩnh vực liên quan</span>
                            </div>
                            <div class="card-desc">
                                <div class="margin-bottom-10"> Các hướng nghiên cứu, lĩnh vực...
                                </div>
                                {{--{{Html::linkRoute('field.index', 'Các lĩnh vực', [],['class'=> 'btn blue btn-outline'])}}--}}
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="portlet light">
                            <div class="card-icon">
                                <i class="icon-bell font-blue theme-font"></i>
                            </div>
                            <div class="card-title">
                                <span> Tìm hiểu hướng nghiên cứu</span>
                            </div>
                            <div class="card-desc">
                                <div class="margin-bottom-10"> Các hướng nghiên cứu và giảng viên liên quan
                                </div>
                                {{--                                {{Html::linkRoute('interest.index', 'Các hướng nghiên cứu', [],['class'=> 'btn blue btn-outline'])}}--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="portlet light">
                            <div class="card-icon">
                                <i class="icon-bubbles font-purple-wisteria theme-font"></i>
                            </div>
                            <div class="card-title">
                                <span> Danh sách giảng viên </span>
                            </div>
                            <div class="card-desc">
                                <div class="margin-bottom-10"> Thông tin về giảng viên theo bộ môn, lĩnh vực nghiên
                                    cứu...
                                </div>
                                {{--                                {{Html::linkRoute('teacher.index', 'Giảng viên đại học', [],['class'=> 'btn blue btn-outline'])}}--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="portlet light">
                            <div class="card-icon">
                                <i class="icon-layers font-green-haze theme-font"></i>
                            </div>
                            <div class="card-title">
                                <span> Đăng ký nộp đề tài </span>
                            </div>
                            <div class="card-desc">
                                <div class="margin-bottom-10"> Giới thiệu quy trình đăng ký nộp đề tài
                                </div>
                                <a href="#" class="btn blue btn-outline">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--BEGIN: Contact-->
            {{--<div class="c-content-feedback-1 c-option-1">--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-8">--}}
            {{--<div class="portlet light bordered">--}}
            {{--<div class="portlet-title">--}}
            {{--<div class="caption">--}}
            {{--<i class="icon-bubble font-blue-sharp"></i>--}}
            {{--<span class="caption-subject font-blue-sharp bold uppercase">--}}
            {{--                                        {{Html::linkRoute('announcement.index','Tin tức')}}--}}
            {{--</span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="portlet-body">--}}
            {{--<ul class="nav nav-pills">--}}
            {{--<li class="active">--}}
            {{--<a href="#tab_2_1" data-toggle="tab" aria-expanded="true"> Tin mới nhất </a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--<div class="tab-content">--}}
            {{--<div class="tab-pane fade active in" id="tab_2_1">--}}

            {{--@foreach($announcements as $announcement)--}}
            {{--<div class="row margin-top-10">--}}
            {{--<div class="col-md-8">--}}
            {{--{{Html::linkRoute('announcement.show', $announcement->title, [$announcement->id])}}--}}
            {{--</div>--}}
            {{--<div class="col-md-4 pull-right">--}}
            {{--{{ $announcement->faculty->unit->name }}--}}
            {{--<span> {{$announcement->updated_at}}</span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--@endforeach--}}

            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
            {{--<div class="c-container bg-green">--}}
            {{--<div class="c-content-title-1 c-inverse">--}}
            {{--<h3 class="uppercase">Giới thiệu quy trình</h3>--}}
            {{--<div class="c-line-left"></div>--}}
            {{--<p class="c-font-lowercase margin-bottom-15">--}}
            {{--Quy trình nộp và quản lý đề tài theo các loại người dùng (học viên, giảng viên,--}}
            {{--thư ký hội đồng, quản lý khoa)--}}
            {{--</p>--}}
            {{--{{Html::linkRoute('introduction', 'Xem thêm', [],['class'=>'btn grey-cararra font-dark'])}}--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            <!--END: Contact-->
            </div>
            <!-- END PAGE CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
@endsection