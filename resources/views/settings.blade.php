@extends('layouts.app')

@section('content')
<title>Settings</title>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">

                <div class="card-header">{{ __('Settings') }}</div>

                <div class="card-body">
                    {{ __('User: ') }}{{ Auth::user()->name }}
                </div>
                <div class="card-body">
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
