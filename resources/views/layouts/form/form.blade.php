@extends('layouts.single_portlet')

@section('portlet-inner')
    <div class="portlet-body form">
        @yield('form-open')
        <div class="form-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('form-body-inner')
        </div>
        <div class="form-actions noborder">
            <div class="col-md-3">
                {{Form::submit($button, ['class' => 'btn blue'])}}
            </div>
            @yield('form-actions')
        </div>
        {{Form::close()}}
    </div>
@endsection