{{Html::meta(null, null, ['charset' => 'utf-8'])}}
{{Html::meta(null, 'IE=edge', ['http-equiv' => 'X-UA-Compatible'])}}
{{Html::meta('viewport', 'width=device-width, initial-scale=1')}}
{{Html::meta('csrf-token', csrf_token())}}

{{Html::favicon('img/UET.png')}}

{{--BEGIN GLOBAL MANDATORY STYLES--}}
{{--{{Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all')}}--}}
{{Html::style('metronic/global/plugins/font-awesome/css/font-awesome.min.css')}}
{{Html::style('metronic/global/plugins/simple-line-icons/simple-line-icons.min.css')}}
{{Html::style('metronic/global/plugins/bootstrap/css/bootstrap.min.css')}}
{{Html::style('metronic/global/plugins/uniform/css/uniform.default.css')}}
{{Html::style('metronic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}
{{--END GLOBAL MANDATORY STYLES--}}

{{--<!-- BEGIN PAGE LEVEL PLUGINS -->--}}
{{Html::style('metronic/global/plugins/bootstrap-toastr/toastr.min.css')}}
{{--<!-- END PAGE LEVEL PLUGINS -->--}}

{{--BEGIN THEME GLOBAL STYLES--}}
{{Html::style('metronic/global/css/components-md.min.css', ['id' => 'style_components'])}}
{{Html::style('metronic/global/css/plugins-md.min.css')}}
{{--END THEME GLOBAL STYLES--}}

{{--BEGIN THEME LAYOUT STYLES--}}
{{Html::style('metronic/layouts/layout3/css/layout.min.css')}}
{{Html::style('metronic/layouts/layout3/css/themes/default.min.css', ['id' => 'style_color'])}}
{{Html::style('metronic/layouts/layout3/css/custom.css')}}
{{--END THEME LAYOUT STYLES--}}

<script>
    window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
</script>
