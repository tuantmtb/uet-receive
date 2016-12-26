@extends('layouts.blankpage')

@section('styles')
    @parent

    {{Html::style('metronic/global/plugins/datatables/datatables.min.css')}}
    {{Html::style('metronic/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}
@endsection

@section('page-level-plugins')
    @parent
    {{Html::script('metronic/global/scripts/datatable.js')}}
    {{Html::script('metronic/global/plugins/datatables/datatables.min.js')}}
    {{Html::script('metronic/pages/scripts/table-datatables-buttons.min.js')}}
@endsection

@section('page-level-scripts')
    @parent
    {{Html::script('metronic/pages/scripts/table-datatables-managed.min.js')}}
@endsection

