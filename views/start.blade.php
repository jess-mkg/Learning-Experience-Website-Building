@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">

                <div class="card-header">{{ __('Checklist Start Page') }}</div>

                <div class="card-body">
                    <p>*Information about the checklist*</p>
                    <p>*Benefits*</p>
                </div>

            </div>
            <form style="text-align: center; margin: 15px; font-size: 130%">
                <a href="/checklist"><input type="button" value="Start Your Checklist"/></a>
            </form>
        </div>
    </div>
</div>
@endsection
