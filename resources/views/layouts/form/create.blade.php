@extends('layouts.form.form', ['button' => isset($button) ? $button : 'Tạo'])

@section('form-open')
    {{Form::open(['method' => 'post', 'route' => $route, 'role' => 'form'])}}
@endsection