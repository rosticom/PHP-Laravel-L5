@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-xs-12" >
                <div class="panel panel-default">
                    @yield('panel')
                </div>
            </div>
        </div>
    </div>
@endsection
