@extends('layouts.app')

@section('title', 'Trang chủ')

@section('menu.home', 'active')

@section('styles')
    @parent
    {{Html::style('metronic/dtui/css/index.css')}}
    {{Html::style('metronic/dtui/css/main.css')}}
    {{Html::style('css/receive-uet.css')}}

    <meta property="og:url" content="http://ueter.xyz"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Hóng điểm thi UET tốc độ ánh sáng"/>
    <meta property="og:description" content="Hệ thống nhận kết quả thi trường UET nhanh nhất"/>

@endsection

@section('content')

    <div class="fw-wrapper lgm-purple page-title">
        <div class="row">
            <div class="col-md-12">
                <h1 style="color: white; margin-left: 30px">Hóng điểm thi UET tốc độ ánh sáng</h1>
            </div>
        </div>
    </div>
    <div class="page-container">
        {{--<!-- BEGIN CONTENT -->--}}
        <div class="page-content-wrapper">
            {{--<!-- BEGIN PAGE CONTENT BODY -->--}}
            <div class="page-content">
                {{--<!--BEGIN: Intro-->--}}
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
                                        {{Form::number('code', old('code'), ['class' => 'form-control', 'id'=>'code','required' => '', 'maxLength' => 10])}}
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
                                <button class="btn blue btn-lg" type="submit"><i class="fa fa-check"></i> Đăng ký
                                </button>
                                {{--<i class="fa fa-check"></i>{{Form::submit('Đăng ký', ['class' => 'btn blue btn-lg'])}}--}}
                            </div>
                            {{Form::close()}}


                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="portlet light">
                            <div class="m-heading-1 border-green">
                                <h2 id="title-helper">Các môn học kỳ I <span style="display: none;"
                                                                             id="fullname-intro"></span></h2>
                            </div>
                            <div class="row" id="dialog-helper">
                                <div class="col-md-6">
                                    <div class="note note-success" id="dialog-helper-data">
                                        Nhập Mã sinh viên và Email
                                    </div>
                                </div>
                            </div>

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

                            <div class="m-heading-1 border-blue">
                                <h4><i class="fa fa-facebook-square"></i><a href="https://www.facebook.com/sdpttl/"
                                                                            target="_blank"> facebook</a></h4>
                            </div>

                            <div class="fb-page" data-href="https://www.facebook.com/sdpttl/"
                                 data-small-header="true"
                                 data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/sdpttl/" class="fb-xfbml-parse-ignore"><a
                                            href="https://www.facebook.com/sdpttl/">SDP- Students developing
                                        project</a>
                                </blockquote>
                            </div>
                            <div id="fb-root"></div>

                        </div>
                    </div>
                </div>
            </div>
            {{--<!-- END PAGE CONTENT BODY -->--}}
        </div>
        {{--<!-- END CONTENT -->--}}
    </div>
    {{--<!-- END CONTAINER -->--}}
@endsection

@section('scripts')
    @parent
    {{Html::script('js/receive-uet.js')}}
@endsection