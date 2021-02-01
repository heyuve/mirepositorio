@extends('master')

@section('content')

    <div class="two-columns">
        <div id="table">
            @yield('table')
        </div>

        <div id="form">
            @yield('form')

        </div>
    </div>

@endsection