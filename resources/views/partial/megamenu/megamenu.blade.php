<!-- BEGIN MEGA MENU -->
<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
<div class="hor-menu  hor-menu-light">
    <ul class="nav navbar-nav">
        <li class="menu-dropdown classic-menu-dropdown @yield('menu.home')">
            {{Html::linkRoute('index', 'Trang chủ')}}
        </li>

        @if(Entrust::hasRole('admin'))
            <li class="menu-dropdown classic-menu-dropdown @yield('menu.admin')">
                <a href="#">Quản trị
                    <span class="arrow"></span>
                </a>
                <ul class="dropdown-menu pull-left">
                    <li>TODO</li>
                </ul>
            </li>
        @endif

        <li class="menu-dropdown classic-menu-dropdown @yield('menu.introduction')">
            <a href="https://facebook.com/sdpttl">Fanpage</a>
        </li>

    </ul>
</div>
<!-- END MEGA MENU -->