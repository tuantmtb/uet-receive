@extends('layouts.form.form', ['button' => 'Cập nhật'])

@section('form-open')
    {{Form::model($model, ['role' => 'form', 'route' => $route])}}
@endsection