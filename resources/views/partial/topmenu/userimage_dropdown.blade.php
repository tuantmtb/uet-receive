<ul class="dropdown-menu dropdown-menu-default">
    {{--Begin auth action--}}
    @if(Auth::check())
        <li>
            {{Form::open(['method' => 'post', 'route' => 'logout', 'id' => 'logout-form'])}}
            {{Form::token()}}
            {{Form::close()}}
            <a href="javascript:" onclick="$('#logout-form').submit()">
                <i class="fa fa-sign-out"></i> Đăng xuất </a>
        </li>
    @endif
    {{--End auth action--}}
</ul>