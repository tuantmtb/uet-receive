@extends('layouts.blankpage')

@section('content-inner')
    @yield('pre-portlet-inner')
    <div class="row">
        <div class="@yield('portlet-width', 'col-md-12')">
            <div class="portlet light">
                @yield('portlet-inner')
            </div>
        </div>
    </div>
    @yield('portlet-meta')

@endsection
