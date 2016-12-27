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
                <h2>Hóng điểm thi tự động</h2>
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
                    <div class="col-lg-6 col-md-offset-3">
                        <div class="portlet light">
                            <div class="card-icon">
                                <i class="  icon-badge font-red-sunglo theme-font"></i>
                            </div>
                            <div class="card-title">
                                <span> Nhận điểm tự động qua email</span>
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