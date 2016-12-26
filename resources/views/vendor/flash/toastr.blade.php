@if (Session::has('toastr'))
    <script type="text/javascript">
        @foreach(Session::get('toastr') as $toastr)
        toastr.{!! $toastr['level'] !!}('{{$toastr['message']}}', '{{$toastr['title']}}');

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "100",
            "hideDuration": "100",
            "timeOut": "2000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        @endforeach
    </script>
@endif