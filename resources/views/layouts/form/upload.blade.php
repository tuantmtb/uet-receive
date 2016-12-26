@extends('layouts.form.form', ['button' => 'Tải lên'])

@section('styles')
    @parent
    {{Html::style('metronic/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}
@endsection

@section('form-open')
    {{Form::open(['method' => 'post', 'route' => $route, 'class' => 'form-horizontal form-bordered', 'enctype' => "multipart/form-data"])}}
@endsection

@section('form-body-inner')
    <div class="form-group">
        {{Form::label('file', 'Chọn tệp', ['class' => 'control-label col-md-3'])}}
        <div class="col-md-3">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="input-group input-large">
                    <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                        <i class="fa fa-file fileinput-exists"></i>&nbsp;
                        <span class="fileinput-filename"></span>
                    </div>
                    <span class="input-group-addon btn default btn-file">
                        <span class="fileinput-new"> Chọn file </span>
                        <span class="fileinput-exists"> Chọn file khác </span>
                        <input type="hidden" value="" name="..."/>
                        {{Form::file('file')}}
                    </span>
                    <a href="javascript:" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
                        Xoá </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-level-plugins')
    @parent
    {{Html::script('metronic/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}
@endsection