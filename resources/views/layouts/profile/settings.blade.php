@extends('layouts.profile.account')

@section('title', 'Cài đặt tài khoản')
@section('menu.settings', 'active')

@section('profile-content-inner')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light ">
                <div class="portlet-title tabbable-line">
                    <div class="caption caption-md">
                        <i class="icon-globe theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">Cài đặt tài khoản</span>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#personal_info" data-toggle="tab">Thông tin cá nhân</a>
                        </li>
                        <li>
                            <a href="#avatar" data-toggle="tab">Ảnh đại diện</a>
                        </li>
                        <li>
                            <a href="#doi-mat-khau" data-toggle="tab">Đổi mật khẩu</a>
                        </li>
                    </ul>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <!-- PERSONAL INFO TAB -->
                        <div class="tab-pane active" id="personal_info">
                            @if(Auth::user()->hasRole('student'))
                                <table class="table table-hover table-light">
                                    <tr>
                                        <td class="">
                                            <div>Sinh viên</div>
                                        </td>
                                        <td>
                                            <div>{{Auth::user()->name}}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <div>Email</div>
                                        </td>

                                        <td>
                                            <div>
                                                {{Html::mailto(Auth::user()->email)}}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <div>Lớp</div>
                                        </td>

                                        <td>
                                            <div>
                                                {{Html::linkRoute('clazz.show', Auth::user()->student->clazz->name, [Auth::user()->student->clazz_id])}}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <div>Khoa</div>
                                        </td>

                                        <td>
                                            <div>
                                                {{Html::linkRoute('faculty.show', Auth::user()->student->clazz->courseprogram->faculty->unit->name, [Auth::user()->student->clazz->courseprogram->faculty_id])}}
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="">
                                            <div>Ghi chú</div>
                                        </td>

                                        <td>
                                            <div class="">
                                                @if(Auth::user()->hasRole('dissertator'))
                                                    <div class="alert alert-info">
                                                        Được phép làm đề tài
                                                    </div>
                                                @else
                                                    <div class="alert alert-danger">
                                                        Không được phép làm đề tài
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="">
                                                @if(Auth::user()->hasRole('protector'))
                                                    <div class="alert alert-info">
                                                        Được phép bảo vệ
                                                    </div>
                                                @else
                                                    <div class="alert alert-danger">
                                                        Không được phép bảo vệ
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="">
                                                @if(isset(Auth::user()->student->dissertation) && isset(Auth::user()->student->dissertation->dissertationresult) && Auth::user()->student->dissertation->dissertationresult->is_accepted)
                                                    <div class="alert alert-success">
                                                        Đã hoàn thành bảo vệ đề tài
                                                    </div>
                                                @else
                                                    <div class="alert alert-danger">
                                                        Cần bổ sung hồ sơ cho đề tài
                                                    </div>
                                                @endif
                                            </div>

                                        </td>
                                    </tr>
                                </table>
                            @endif

                            @if(Auth::user()->hasRole('manager'))
                                <table class="table table-hover table-light">
                                    <tr>
                                        <td class="">
                                            <div>Họ tên</div>
                                        </td>
                                        <td>
                                            <div>{{Auth::user()->name}}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <div>Email</div>
                                        </td>

                                        <td>
                                            <div>
                                                {{Html::mailto(Auth::user()->email)}}
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            @endif
                            @if(Auth::user()->hasRole('teacher'))
                                <table class="table table-hover table-light">
                                    <tr>
                                        <td class="">
                                            <div>Họ tên</div>
                                        </td>
                                        <td>
                                            <div>{{Auth::user()->name}}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <div>Email</div>
                                        </td>

                                        <td>
                                            <div>
                                                {{Html::mailto(Auth::user()->email)}}
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            @endif
                            @yield('personal-info-inner')
                        </div>
                        {{--<!-- END PERSONAL INFO TAB -->--}}
                        {{--<!-- CHANGE AVATAR TAB -->--}}
                        <div class="tab-pane" id="avatar">
                            <p> Cập nhật ảnh đại diện </p>
                            <form action="#" role="form">
                                <div class="form-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail"
                                             style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                 alt=""></div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                             style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                                                                <span class="btn default btn-file">
                                                                                    <span class="fileinput-new"> Chọn ảnh</span>
                                                                                    <span class="fileinput-exists"> Đổi </span>
                                                                                    <input type="file"
                                                                                           name="..."> </span>
                                            <a href="javascript:;" class="btn default fileinput-exists"
                                               data-dismiss="fileinput"> Remove </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="margin-top-10">
                                    <a href="javascript:;" class="btn green"> Tải lên </a>
                                    <a href="javascript:;" class="btn default"> Hủy </a>
                                </div>
                            </form>
                        </div>
                        <!-- END CHANGE AVATAR TAB -->
                        <!-- CHANGE PASSWORD TAB -->
                        <div class="tab-pane" id="doi-mat-khau">
                            {{Form::open(['method' => 'post', 'role' => 'form', 'route' => ['changepw.change', Auth::user()->remember_token]])}}
                            <div class="form-body">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @yield('form-body-inner')
                            </div>
                            <div class="form-group form-md-line-input {{$errors->has('password_old') ? 'has-error' : ''}}">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    {{Form::password('password_old', ['class' => 'form-control', 'required' => '', 'maxLength' => 255, 'minLength' => 5])}}
                                    {{Form::label('password_old', 'Mật khẩu cũ')}}
                                </div>
                            </div>

                            <div class="form-group form-md-line-input {{$errors->has('password') ? 'has-error' : ''}}">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    {{Form::password('password', ['class' => 'form-control', 'required' => '', 'maxLength' => 255, 'minLength' => 6])}}
                                    {{Form::label('password', 'Mật khẩu mới')}}
                                </div>
                            </div>

                            <div class="form-group form-md-line-input {{$errors->has('password') ? 'has-error' : ''}}">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    {{Form::password('password_confirmation', ['class' => 'form-control', 'required' => '', 'maxLength' => 255, 'minLength' => 6])}}
                                    {{Form::label('password_confirmation', 'Nhập lại mật khẩu mới')}}
                                </div>
                            </div>
                            <div class="form-actions noborder">
                                {{Form::submit('Đổi mật khẩu', ['class' => 'btn blue'])}}
                            </div>

                            {{Form::close()}}
                        </div>
                        <!-- END CHANGE PASSWORD TAB -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection