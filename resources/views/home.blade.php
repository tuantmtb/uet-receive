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
            padding: 70px 0;
            background: #fff;
        }

        .fw-wrapper h1 {
            margin-top: 35px !important;
        }

        header {
            display: block;
        }

        .page-header {
            height: inherit !important;
        }

        .card-icon i {
            margin: 0;
        }

        .card-title {
            margin-bottom: 10px;
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
                <h1 style="color: white; margin-left: 30px">Hóng điểm thi UET tốc độ ánh sáng</h1>
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
                            {{Form::open(['method' => 'post', 'route' => 'subscribe.post', 'role' => 'form'])}}
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-body">
                                <div class="form-group form-md-line-input form-md-floating-label has-info {{$errors->has('email') ? 'has-error' : ''}}">
                                    <div class="input-group left-addon">
                                        <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                                        {{Form::text('code', old('code'), ['class' => 'form-control', 'id'=>'code','required' => '', 'maxLength' => 10])}}
                                        {{Form::label('code', 'Mã sinh viên')}}
                                    </div>
                                </div>

                                <div class="form-group form-md-line-input form-md-floating-label has-info {{$errors->has('email') ? 'has-error' : ''}}">
                                    <div class="input-group left-addon">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        {{Form::email('email', old('email'), ['class' => 'form-control', 'required' => '', 'maxLength' => 255])}}
                                        {{Form::label('email', 'Email')}}
                                    </div>
                                </div>
                                <div class="form-group form-md-line-input form-md-floating-label has-error">
                                    <input type="text" class="form-control edited" readonly=""
                                           value="" id="fullname">
                                    <label for="form_control_1">Họ tên</label>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-2">Lớp</div>
                                    <div class="col-md-8" id="class"></div>
                                </div>
                                <div class="form-group">
                                    {!! Form::captcha() !!}
                                </div>
                            </div>

                            <div class="form-actions noborder text-center">
                                {{Form::submit('Đăng ký', ['class' => 'btn blue btn-lg'])}}
                            </div>
                            {{Form::close()}}


                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="portlet light">
                            <h2>Các môn học kỳ I</h2>

                            <div class="table-scrollable" style="display: none">
                                <table class="table table-hover" id="table-course">
                                    <thead>
                                    <tr>
                                        <th> #</th>
                                        <th> Môn học</th>
                                        <th> Mã lớp</th>
                                        <th> Số TC</th>
                                        <th> Trạng thái</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbody-table-course">

                                    </tbody>
                                </table>
                            </div>
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

@section('scripts')
    @parent
    <script type="text/javascript">

        $("#code").keyup(function ($e) {
            $("#tbody-table-course").text("");
            if ($("#code").val().length == 8) {
                $(".table-scrollable").show();
                var code = $("#code").val();
                var url = 'api/findStudentByCode/' + code;
//                console.log(url);
                $.get(url, function (data) {
                    if (data["status"] == "success") {
                        console.log("success");
                        $("#fullname").val(data["name"]);
                        $("#class").text(data["class"]);
                        $("#tbody-table-course").text("");
                        $.each(data["courses"], function (i, course) {
                            if (course.link_origin) {
                                $("#tbody-table-course").append("<tr> <td> " + (i + 1) +
                                    "</td> <td>" + course.name + "</td> <td>" + course.code + "</td> <td>" + course.credit + "</td> <td> <span class=\"label label-sm label-success\"> Đã có điểm </span> </td></tr>"
                                );
                            } else {
                                $("#tbody-table-course").append("<tr> <td> " + (i + 1) +
                                    "</td> <td>" + course.name + "</td> <td>" + course.code + "</td> <td>" + course.credit + "</td> <td> <span class=\"label label-sm label-info\"> Chưa có điểm </span> </td></tr>"
                                );
                            }
                        })
                    }
                });
            } else {

                $(".table-scrollable").hide();
            }

        });
    </script>
@endsection