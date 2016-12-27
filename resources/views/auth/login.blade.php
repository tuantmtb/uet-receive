@extends('layouts.form.form', ['button' => 'Đăng nhập'])

@section('title', 'Đăng nhập')

@section('form-open')
    {{Form::open(['method' => 'post', 'route' => 'login.post', 'role' => 'form'])}}
@endsection

@section('portlet-width', 'col-md-6 col-md-offset-3')

@section('form-body-inner')
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
            {{Form::password('password', ['class' => 'form-control', 'required' => '', 'maxLength' => 255, 'minLength' => 5])}}
            {{Form::label('password', 'Mật khẩu')}}
        </div>
    </div>

    <div class="form-group form-md-line-input">
        <div class="md-checkbox-list">
            <div class="md-checkbox">
                <input type="checkbox" id="rememberme" class="md-check" name="rememberme" checked="checked"/>
                <label for="rememberme">
                    <span></span>
                    <span class="check"></span>
                    <span class="box"></span> Nhớ phiên đăng nhập </label>
            </div>
        </div>
    </div>
@endsection