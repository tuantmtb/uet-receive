<!-- BEGIN MEGA MENU -->
<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
<div class="hor-menu  hor-menu-light">
    <ul class="nav navbar-nav">
        <li class="menu-dropdown classic-menu-dropdown @yield('menu.home')">
            {{Html::linkRoute('home', 'Trang chủ')}}
        </li>
        <li class="menu-dropdown classic-menu-dropdown @yield('menu.category')">
            <a href="javascript:"> Danh mục
                <span class="arrow"></span>
            </a>
            <ul class="dropdown-menu pull-left">
                <li class="dropdown-submenu">
                    <a href="javascript:" class="nav-link nav-toggle">
                        Đơn vị
                        <span class="arrow"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class=" ">
                            {{--TODO: update--}}
                        </li>
                    </ul>
                </li>
            </ul>
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
            {{Html::linkRoute('introduction', 'Giới thiệu')}}
        </li>

    </ul>
</div>
<!-- END MEGA MENU -->