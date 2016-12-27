@extends('layouts.form.create', ['route' => 'register.post', 'button' => 'Đăng ký'])

@section('title', 'Đăng ký')

@section('portlet-width', 'col-md-6 col-md-offset-3')

@section('form-body-inner')
    <div class="form-group form-md-line-input {{$errors->has('name') ? 'has-error' : ''}}">
        {{Form::text('name', old('name'), ['required' => '', 'autofocus' => '', 'class' => 'form-control', 'maxLength' => 255])}}
        {{Form::label('name', 'Họ tên')}}
    </div>

    <div class="form-group form-md-line-input {{$errors->has('email') ? 'has-error' : ''}}">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            {{Form::email('email', old('email'), ['class' => 'form-control', 'required' => '', 'maxLength' => 255])}}
            {{Form::label('email', 'Địa chỉ email')}}
        </div>
    </div>

    <div class="form-group form-md-line-input {{$errors->has('password') ? 'has-error' : ''}}">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key"></i></span>
            {{Form::password('password', ['class' => 'form-control', 'required' => '', 'maxLength' => 255, 'minLength' => 6])}}
            {{Form::label('password', 'Mật khẩu')}}
        </div>
    </div>

    <div class="form-group form-md-line-input {{$errors->has('password') ? 'has-error' : ''}}">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key"></i></span>
            {{Form::password('password_confirmation', ['class' => 'form-control', 'required' => '', 'maxLength' => 255, 'minLength' => 6])}}
            {{Form::label('password_confirmation', 'Nhập lại mật khẩu')}}
        </div>
    </div>
@endsection