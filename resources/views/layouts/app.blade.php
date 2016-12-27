<!DOCTYPE html>
<html lang="en">
<head>
    @include('partial.app.head')

    <title>{{config('app.name')}} - @section('title-raw') @yield('title') @show</title>

    @yield('styles')
    {{Html::script('metronic/global/plugins/jquery.min.js')}}
    {{Html::script('metronic/global/plugins/bootstrap/js/bootstrap.min.js')}}
    {{Html::script('js/jquery.pjax.min.js')}}

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
    <script type="text/javascript">
        //        $(function () {
        //            // pjax
        //            $(document).pjax('a', '#thesis_body')
        //        });
        //        $(document).ready(function () {
        //            // does current browser support PJAX
        //            if ($.support.pjax) {
        //                $.pjax.defaults.timeout = 2000; // time in milliseconds
        //            }
        //
        //        });
    </script>
    @include('vendor.flash.toastr')
@show

@yield('script-footer')

</body>
</html>
