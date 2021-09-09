@extends('layouts.app')

@section('content')
<link href="/css/style.css" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="checklist-card-size">
            <div class="card">
                <div class="card-header">{{ __('Parents Checklist') }}</div>
                <div class="card-body">
                    <form method="post">
                        <div class="grid-container">
                            <div></div>
                            <div class="grid-labels"><label>Strongly Disagree</label></div>
                            <div class="grid-labels"><label>Disagree</label></div>
                            <div class="grid-labels"><label>Neutral</label></div>
                            <div class="grid-labels"><label>Agree</label></div>
                            <div class="grid-labels"><label>Strongly Agree</label></div>
                        </div>
                        <div class="grid-container">
                            <div><label class="grid-content-left">Does your child show a high level of curiosity?</label></div>
                            <div class="grid-item"><input type="radio" value="1"></div>
                            <div class="grid-item"><input type="radio" value="2"></div>
                            <div class="grid-item"><input type="radio" value="3"></div>
                            <div class="grid-item"><input type="radio" value="4"></div>
                            <div class="grid-item"><input type="radio" value="5"></div>
                        </div>
                        <div class="grid-container">
                            <div><label class="grid-content-left">Does your child show a high level of curiosity?</label></div>
                            <div class="grid-item"><input type="radio" value="1"></div>
                            <div class="grid-item"><input type="radio" value="2"></div>
                            <div class="grid-item"><input type="radio" value="3"></div>
                            <div class="grid-item"><input type="radio" value="4"></div>
                            <div class="grid-item"><input type="radio" value="5"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
