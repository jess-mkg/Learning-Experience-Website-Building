@extends('layouts.app')

@section('content')
<link href=""
<div class="container">
    <div class="row justify-content-center">
        <div style="flex: 0 0 90%; max-width: 90%;">
            <div class="card" style="width: 100;">
                <div class="card-header">{{ __('Parents Checklist') }}</div>
                <div class="card-body">
                <form method="post">
                    <div style="display: grid; grid-template-columns: auto auto; grid-gap: 10px;">
                        <div></div>
                        <ul class="row grid-content-right" style="float: right; list-style-type: none;">
                            <li style="padding-right: 8px;"><label>Strongly Agree</label></li>
                            <li style="padding-right: 8px;"><label>Agree</label></li>
                            <li style="padding-right: 8px;"><label>Neutral</label></li>
                            <li style="padding-right: 8px;"><label>Disagree</label></li>
                            <li style="padding-right: 8px;"><label>Strongly Disagree</label></li>
                        </ul>
                        <!-- Question -->
                        <label class="statement">Does your child show a high level of curiosity?</label>
                        <ul class="question row" style="float: right; list-style-type: none;">
                            <li class="grid-item" style="padding: 0px 10px 0px;"><input type="radio" value="5"><!--<label>Strongly Agree</label>--></li>
                            <li style="padding: 0px 10px 0px;"><input type="radio" value="4"><!--<label>Agree</label>--></li>
                            <li style="padding: 0px 10px 0px;"><input type="radio" value="3"><!--<label>Neutral</label>--></li>
                            <li style="padding: 0px 10px 0px;"><input type="radio" value="2"><!--<label>Disagree</label>--></li>
                            <li style="padding: 0px 10px 0px;"><input type="radio" value="1"><!--<label>Strongly Disagree</label>--></li>
                        </ul>
                        <!-- Question -->
                        <label class="statement">Does your child show a high-level of reasoning?</label>
                        <ul class="question row" style="float: right; list-style-type: none;">
                            <li style="padding: 0px 10px 0px;"><input type="radio" value="5"><!--<label>Strongly Agree</label>--></li>
                            <li style="padding: 0px 10px 0px;"><input type="radio" value="4"><!--<label>Agree</label>--></li>
                            <li style="padding: 0px 10px 0px;"><input type="radio" value="3"><!--<label>Neutral</label>--></li>
                            <li style="padding: 0px 10px 0px;"><input type="radio" value="2"><!--<label>Disagree</label>--></li>
                            <li style="padding: 0px 10px 0px;"><input type="radio" value="1"><!--<label>Strongly Disagree</label>--></li>
                        </ul>


                        <label class="statement">Does your child show a high-level of inquiry?</label>
                        <ul class="question row" style="float: right; list-style-type: none;">
                            <li style="padding: 0px 10px 0px;"><input type="radio" value="5"><!--<label>Strongly Agree</label>--></li>
                            <li style="padding: 0px 10px 0px;"><input type="radio" value="4"><!--<label>Agree</label>--></li>
                            <li style="padding: 0px 10px 0px;"><input type="radio" value="3"><!--<label>Neutral</label>--></li>
                            <li style="padding: 0px 10px 0px;"><input type="radio" value="2"><!--<label>Disagree</label>--></li>
                            <li style="padding: 0px 10px 0px;"><input type="radio" value="1"><!--<label>Strongly Disagree</label>--></li>
                        </ul>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
