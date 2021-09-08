@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">

                <div class="card-header">{{ __('Checklist') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('') }}
                </div>
            </div>
            @if(Auth::user()->role == 'Parent')
                <form style="text-align: center; margin: 15px; font-size: 130%">
                    <a href="/checklist-parents"><input type="button" value="Begin"/></a>
                </form>
            @elseif(Auth::user()->role == 'Teacher')
            <form style="text-align: center; margin: 15px; font-size: 130%">
                    <a href="/checklist-teachers"><input type="button" value="Begin"/></a>
            </form>
            @else
            <form style="text-align: center; margin: 15px; font-size: 130%">
                    <a href="/checklist"><input type="button" value="Begin"/></a>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection
