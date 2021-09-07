@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">

                <div class="card-header">{{ __('Results') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('User: ') }}{{ Auth::user()->name }}
                </div>
                <div class="card-body">
                    {{ __('tttt: ') }}
                </div>
                <div class="card-body">
                    {{ __('yyyy: ') }}
                </div>
                <div class="card-body">
                    {{ __('eeeee: ') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
