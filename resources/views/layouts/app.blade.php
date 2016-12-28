<!DOCTYPE html>
<html lang="en">
<head>
    @include('partial.app.head')

    <title>{{config('app.name')}} - @section('title-raw') @yield('title') @show</title>

    <meta name="description" content="Hệ thống nhận kết quả thi trường UET nhanh nhất"/>
    <meta name="keywords" content="Ueter.xyz, uet.vnu.edu.vn, kết quả thi uet">
    <meta name="author" content="Tran Minh Tuan - tuantmtb@gmail.com | Nguyen Van Nhat - nguyenvannhat152@gmail.com">

    @yield('styles')
    {{Html::script('metronic/global/plugins/jquery.min.js')}}
    {{Html::script('metronic/global/plugins/bootstrap/js/bootstrap.min.js')}}
</head>
<body class="page-header-fixed page-content-white page-full-width page-md page-header-menu-fixed" id="thesis_body">

@include('partial.header')

@yield('content')

@include('partial.footer')

@include('partial.app.scripts')

@section('scripts')
    {{Html::script('js/utils.js')}}
    @if(Auth::check())
        <script type="text/javascript">
            replaceImgAsync('{{Auth::user()->image_path}}', $('#user_image'), 'img-circle');
        </script>
    @endif
    @include('vendor.flash.toastr')
@show

</body>
</html>
