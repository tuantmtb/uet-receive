@extends('layouts.app')

@section('title', 'Trang chủ')

@section('menu.home', 'active')

@section('styles')
    {{Html::style('metronic/dtui/css/index.css')}}
    {{Html::style('metronic/dtui/css/main.css')}}

    <style>
        .fw-wrapper.page-title {
            padding: 0 0 62px 0;
            background: transparent;
        }

        .fw-wrapper.lgm-purple {
            background: #652b7c url('http://www.lagomframework.com/images/ui/lagom-hero.png') no-repeat;
            background-position: center top;
            background-attachment: fixed;

        }

        .fw-wrapper {
            padding: 60px 0;
            background: #fff;
        }

        .fw-wrapper h1 {
            margin-top: 70px !important;
        }

        header {
            display: block;
        }

    </style>
@endsection

@section('content')
    <!--BEGIN Cover-->
    {{--<div class="container-fluid">--}}
    {{--<div class="row about-header">--}}
    {{--<div class="col-md-12">--}}
    {{--<h1>{{config('app.name')}}</h1>--}}
    {{--<h2>Hóng điểm thi tự động</h2>--}}
    {{--{{Html::linkRoute('introduction', 'Giới thiệu hệ thống', [],['class'=>'btn btn-lg btn-success'])}}--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!--END Cover-->
    <!-- BEGIN CONTAINER -->
    <div class="fw-wrapper lgm-purple page-title">
        <div class="row">
            <div class="col-md-12">
                <h1 style="color: white; margin-left: 20px">Hóng điểm thi UET nhanh nhất</h1>
            </div>
        </div>
    </div>
    <div class="page-container">
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN PAGE CONTENT BODY -->
            <div class="page-content">
                <!--BEGIN: Intro-->
                <div class="row">
                    <div class="col-md-8">
                        <div class="portlet light">
                            <h2>Nhập mã sinh viên & email</h2>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="portlet light">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-social-dribbble font-green"></i>
                                    <span class="caption-subject font-green bold uppercase">Đăng ký</span>
                                </div>
                            </div>

                            <div class="card-icon">
                                <i class="  icon-badge font-red-sunglo theme-font"></i>
                            </div>
                            <div class="card-title">
                                <span> Nhận điểm thi UET tự động qua email</span>
                            </div>
                            <form role="form">
                                <div class="form-body">

                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-lg" id="form_control_1">
                                        <label for="form_control_1">Mã sinh viên</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-lg" id="form_control_1">
                                        <label for="form_control_1">Email</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <div class="form-control form-control-static"> QH2014-C-CLC</div>
                                        <label for="form_control_1">Khóa</label>
                                    </div>
                                </div>
                                <div class="table-scrollable">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th> #</th>
                                            <th> Môn học</th>
                                            <th> Mã lớp</th>
                                            <th> Số TC</th>
                                            <th> Trạng thái</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td> 1</td>
                                            <td> Xác suất thống kê</td>
                                            <td> MAT1003 5</td>
                                            <td> 3</td>
                                            <td>
                                                <span class="label label-sm label-success"> Đã có điểm </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 2</td>
                                            <td> Tín hiệu và hệ thống</td>
                                            <td> FLT2012 3</td>
                                            <td> 3</td>
                                            <td>
                                                <span class="label label-sm label-info"> Chưa có điểm </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 3</td>
                                            <td> Thiết kế giao diện người dùng</td>
                                            <td> FLT2012 3</td>
                                            <td> 3</td>
                                            <td>
                                                <span class="label label-sm label-info"> Chưa có điểm </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-actions noborder text-center">
                                    <button type="button" class="btn blue btn-lg">Đăng ký</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
@endsection