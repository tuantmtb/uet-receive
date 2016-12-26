@extends('layouts.form.form', ['button' => 'Đổi mật khẩu'])

@section('title', 'Đổi mật khẩu')

@section('form-open')
    {{Form::open(['method' => 'post', 'role' => 'form', 'route' => ['changepw.change', $user->remember_token]])}}
@endsection

@section('portlet-width', 'col-md-6 col-md-offset-3')

@section('form-body-inner')
    <div class="form-group form-md-line-input {{$errors->has('password_old') ? 'has-error' : ''}}">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key"></i></span>
            {{Form::password('password_old', ['class' => 'form-control', 'required' => '', 'maxLength' => 255, 'minLength' => 5])}}
            {{Form::label('password_old', 'Mật khẩu cũ')}}
        </div>
    </div>

    <div class="form-group form-md-line-input {{$errors->has('password') ? 'has-error' : ''}}">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key"></i></span>
            {{Form::password('password', ['class' => 'form-control', 'required' => '', 'maxLength' => 255, 'minLength' => 6])}}
            {{Form::label('password', 'Mật khẩu mới')}}
        </div>
    </div>

    <div class="form-group form-md-line-input {{$errors->has('password') ? 'has-error' : ''}}">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key"></i></span>
            {{Form::password('password_confirmation', ['class' => 'form-control', 'required' => '', 'maxLength' => 255, 'minLength' => 6])}}
            {{Form::label('password_confirmation', 'Nhập lại mật khẩu mới')}}
        </div>
    </div>
@endsection