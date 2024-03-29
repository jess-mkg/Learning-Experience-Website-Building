@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">

                <div class="card-header">{{ __('User Profile: ') }}{{ Auth::user()->name }} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Child: ') }}{{ Auth::user()->childname }} <br>
                    {{ __('Age: ') }}{{ Auth::user()->childage }}
                </div>
                <div class="card-body">
                    {{ __('Checklist: Not Completed') }}
                    <a href="/checklist"><input type="button" value="Start Your Checklist"/></a>
                </div>
                <div class="card-body">
                    {{ __('Results: N/A') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
