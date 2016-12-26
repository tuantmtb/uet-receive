@extends('layouts.single_portlet')

@section('styles')
    @parent
    {{Html::style('metronic/global/plugins/datatables/datatables.min.css')}}
    {{Html::style('metronic/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}
@endsection

@section('portlet-inner')
    <div class="portlet-body">
        @if((isset($permission) && Entrust::can($permission)) || (isset($role) && Entrust::hasRole($role)) || (isset($customPermission) && $customPermission))
            <div class="table-toolbar">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="@yield('route-main-action')"
                               class="btn sbold green"> @yield('name-main-action', 'Thêm mới')
                                <i class="@yield('icon-main-action', 'fa fa-plus')"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6" @yield('tools-display')>
                        <div class="btn-group pull-right">
                            <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">Công cụ
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                @yield('tools')
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @yield('meta-porlet-inner')
        <div class="dataTables_wrapper no-footer">
            <div class="table-scrollable">
                <table class="table table-striped table-hover table-bordered no-footer" role="grid">
                    <thead>
                    <tr role="row">
                        @yield('ths')
                    </tr>
                    </thead>
                    <tbody>
                    @yield('trs')
                    </tbody>
                </table>
            </div>
            <div class="row">
                @yield('pagination')
            </div>
        </div>
    </div>
@endsection