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
                    <!--if the user is a teacher and has completed the checklist -->
                    @if ((DB::table('checklist_teachers')->where('user_id', '=', Auth::user()->name))->first())
                    <div>
                        <p>Checklist: Checklist Completed!</p>
                        <p>Results: <a href="/results"><input type="button" value="View Results"/></a> </p>
                    </div>
                    <br><br>
                    <h4>Additional Inforation Form</h4>
                    <h5>Optional</h5>
                    <form method="POST" style="width:80%" class="">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s goals and ambitions</label>
                            <textarea class="form-control" id="goals" name="goals" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s intrests</label>
                            <textarea class="form-control" id="intrests" name="intrests" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s extraIntinfo</label>
                            <textarea class="form-control" id="extraIntinfo" name="extraIntinfo" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s extraCreinfo</label>
                            <textarea class="form-control" id="extraCreinfo" name="extraCreinfo" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s extraSocinfo</label>
                            <textarea class="form-control" id="extraSocinfo" name="extraSocinfo" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s extraPreinfo</label>
                            <textarea class="form-control" id="extraPreinfo" name="extraPreinfo" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s extraMucinfo</label>
                            <textarea class="form-control" id="extraMucinfo" name="extraMucinfo" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s extraMocinfo</label>
                            <textarea class="form-control" id="extraMocinfo" name="extraMocinfo" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s extraSpinfo</label>
                            <textarea class="form-control" id="extraSpinfo" name="extraSpinfo" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s additional</label>
                            <textarea class="form-control" id="additional" name="additional" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s behaviour</label>
                            <textarea class="form-control" id="behaviour" name="behaviour" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits</label>
                            <textarea class="form-control" id="traits" name="traits" rows="2"></textarea>
                        </div>
                    </form>


                    <!--if the user is a parent and has completed the checklist -->
                    @elseif ((DB::table('checklist_parents')->where('user_id', '=', Auth::user()->name))->first())
                    <div>
                        <p>Checklist: Checklist Completed!</p>
                        <p>Results: <a href="/results"><input type="button" value="View Results"/></a> </p>
                    </div>
                    <br><br>
                    <h4>Additional Inforation Form</h4>
                    <h5>Optional</h5>
                    <form method="POST" style="width:80%" class="">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s goals and ambitions</label>
                            <textarea class="form-control" id="goals" name="goals" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s intrests</label>
                            <textarea class="form-control" id="intrests" name="intrests" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s extracoginfo</label>
                            <textarea class="form-control" id="extracoginfo" name="extracoginfo" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s extraphyinfo</label>
                            <textarea class="form-control" id="extraphyinfo" name="extraphyinfo" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s extraSEinfo</label>
                            <textarea class="form-control" id="extraSEinfo" name="extraSEinfo" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s extrasptinfo</label>
                            <textarea class="form-control" id="extrasptinfo" name="extrasptinfo" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s additional</label>
                            <textarea class="form-control" id="additional" name="additional" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s behaviour</label>
                            <textarea class="form-control" id="behaviour" name="behaviour" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits</label>
                            <textarea class="form-control" id="traits" name="traits" rows="2"></textarea>
                        </div>
                    </form>

                    <!--if the user has not completed the checklist -->
                    @else
                    <div>
                        <p>Checklist: <a href="/checklist"><input type="button" value="Start Your Checklist"/></a></p>
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
