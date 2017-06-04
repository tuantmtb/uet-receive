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
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89562704-1', 'auto');
  ga('send', 'pageview');

</script>
@show

</body>
</html>
