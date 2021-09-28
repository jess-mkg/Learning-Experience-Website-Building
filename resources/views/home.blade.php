@extends('layouts.app')

@section('content')
<title>Profile</title>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">

                <div class="card-header">{{ __('User Profile: ') }}{{ Auth::user()->name }} </div>

                <div class="card-body">
                    {{ __('Child: ') }}{{ Auth::user()->childname }} <br>
                    {{ __('Age: ') }}{{ Auth::user()->childage }}
                </div>
                <div class="card-body">
                    @if ((DB::table('checklist_teachers')->where('user_id', '=', Auth::user()->name))->first())
                    <div>
                        <p>Checklist: Checklist Completed</p>
                        <p>Results: Results Available</p> <a href="/results"><input type="button" value="View Results"/></a>
                    </div>
                    @elseif ((DB::table('checklist_parents')->where('user_id', '=', Auth::user()->name))->first())
                    <div>
                        <p>Checklist: Checklist Completed</p>
                        <p>Results: <a href="/results"><input type="button" value="View Results"/></a> </p>
                    </div>
                    @else
                    <div>
                        <p>Checklist: Not Completed</p><a href="/checklist"><input type="button" value="Start Your Checklist"/></a>
                    </div>
                    <div style="padding-top:30px;">
                        <p>Results: No data to display</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
