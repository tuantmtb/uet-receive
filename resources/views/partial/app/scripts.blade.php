@section('core-plugins')
    {{Html::script('metronic/global/plugins/js.cookie.min.js')}}
    {{Html::script('metronic/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}
    {{Html::script('metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}
    {{Html::script('metronic/global/plugins/jquery.blockui.min.js')}}
    {{Html::script('metronic/global/plugins/uniform/jquery.uniform.min.js')}}
    {{Html::script('metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}
@show



@section('page-level-plugins')
    {{Html::script('metronic/global/plugins/bootstrap-toastr/toastr.min.js')}}
@show

@section('theme-global-scripts')
    {{Html::script('metronic/global/scripts/app.min.js')}}
@show

@section('page-level-scripts')
    {{Html::script('metronic/pages/scripts/ui-toastr.min.js')}}
@show

@section('layout-scripts')
    {{Html::script('metronic/layouts/layout3/scripts/layout.min.js')}}
    {{Html::script('metronic/layouts/layout3/scripts/demo.min.js')}}
    {{--{{Html::script('metronic/layouts/global/scripts/quick-sidebar.min.js')}}--}}
@show