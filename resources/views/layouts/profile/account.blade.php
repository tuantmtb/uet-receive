@extends('layouts.blankpage')

@section('styles')
    @parent
    {{Html::style('metronic/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}
    {{Html::style('metronic/pages/css/profile.min.css')}}
@endsection

@section('content-inner')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar">
                <!-- PORTLET MAIN -->
                <div class="portlet light profile-sidebar-portlet ">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        {{Html::image('img/avatar.png', null, ['class' => 'img-responsive', 'id' => 'profile_image'])}}
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name"> {{Auth::user()->name}}</div>
                        <div class="profile-usertitle-job"> {{Auth::user()->roles()->first()->display_name}}</div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="@yield('menu.profile')">
                                <a href="{{route('account.profile')}}">
                                    <i class="icon-home"></i> Trang cá nhân </a>
                            </li>
                            <li class="@yield('menu.settings')">
                                <a href="{{route('account.settings')}}">
                                    <i class="icon-settings"></i> Cài đặt tài khoản </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
                <!-- END PORTLET MAIN -->
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
                @yield('profile-content-inner')
            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </div>
@endsection

@section('page-level-plugins')
    @parent
    {{Html::script('metronic/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}
    {{Html::script('metronic/global/plugins/jquery.sparkline.min.js')}}
@endsection

@section('page-level-scripts')
    @parent
    {{Html::script('metronic/pages/scripts/profile.min.js')}}
@endsection

@section('scripts')
    @parent
    <script type="text/javascript">
        replaceImgAsync('{{Auth::user()->image_path}}', $('#profile_image'), 'img-responsive');
    </script>
@endsection