<!doctype html>
<html lang="en">
<head>
    <title>{{config('app.name')}} - @yield('code')</title>
    @include('partial.app.head')
    {{Html::style('metronic/pages/css/error.min.css')}}
</head>
<body class="page-500-full-page">
<div class="row">
    <div class="col-md-12 page-500">
        <div class=" number font-red">@yield('code')</div>
        <div class="details">
            @yield('details')
            <a href="{{route('home')}}" class="btn red btn-outline"> Trở về trang chủ </a>
        </div>
    </div>
</div>
@include('partial.app.scripts')
</body>
</html>