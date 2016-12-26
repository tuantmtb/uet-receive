<a href="javascript:" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
   data-close-others="true">
    {{Html::image('img/avatar.png', '', ['class' => 'img-circle', 'id' => 'user_image'])}}

    <span class="username username-hide-mobile">{{Auth::check() ? Auth::user()->name : 'Khách'}}</span>
</a>