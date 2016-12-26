@extends('layouts.single_portlet')

@section('styles')
    @parent
    {{Html::style('metronic/global/plugins/datatables/datatables.min.css')}}
    {{Html::style('metronic/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}
@endsection

@section('portlet-inner')
    <div class="portlet-body">
        @if((isset($permission) && Entrust::can($permission)) || (isset($role) && Entrust::hasRole($role)))
            <div class="table-toolbar">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="@yield('route-edit')" class="btn sbold green">
                                Cập nhật
                                <i class="fa fa-edit"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a href="@yield('route-delete')" class="btn sbold red">
                                Xoá
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="dataTables_wrapper no-footer">
            <div class="table-scrollable">
                <table class="table table-striped table-hover table-bordered no-footer" role="grid">
                    <tbody>
                    @yield('table-body-inner')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection