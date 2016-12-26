<ul class="dropdown-menu dropdown-menu-default">
    {{--Begin user navigation--}}
    @if(Auth::check())
        <li>
            <a href="{{route('account.profile')}}">
                <i class="icon-user"></i>Trang cá nhân</a>
        </li>
        <li class="divider"></li>
    @endif
    {{--End user navigation--}}

    {{--Begin auth action--}}
    @if(Auth::check())
        <li>
            <a href="{{route('account.settings')}}">
                <i class="fa fa-cog"></i>Cài đặt tài khoản</a>
        </li>
        <li>
            <a href="{{route('changepw.show')}}">
                <i class="fa fa-key"></i>Đổi mật khẩu
            </a>
        </li>
        <li>
            {{Form::open(['method' => 'post', 'route' => 'logout', 'id' => 'logout-form'])}}
            {{Form::token()}}
            {{Form::close()}}
            <a href="javascript:" onclick="$('#logout-form').submit()">
                <i class="fa fa-sign-out"></i> Đăng xuất </a>
        </li>
    @else
        <li>
            <a href="{{route('login')}}">
                <i class="fa fa-sign-in"></i> Đăng nhập </a>
        </li>
        {{--<li>--}}
        {{--<a href="{{route('register')}}">--}}
        {{--<i class="fa fa-user-plus"></i> Đăng ký </a>--}}
        {{--</li>--}}
    @endif
    {{--End auth action--}}
</ul>