@extends('layouts.app')

@section('content')
<title>Profile</title>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card" style="padding:15px">
                <div class="card-body">
                    <h3 class="just-bold">{{ __('User: ') }}{{ Auth::user()->name }}</h3>
                    <h4 class="just-bold">{{ __('Child: ') }}{{ Auth::user()->childname }}</h4>
                    <h4 class="just-bold">{{ __('Age: ') }}{{ Auth::user()->childage }}</h4>
                    <hr style="width:95%;">
                    <!--if the user is a teacher and has completed the checklist -->
                    @if ((DB::table('checklist_teachers')->where('user_id', '=', Auth::user()->name))->first())
                    <div>
                        <p class="just-bold my-text">Checklist: <span class="my-text myspan">Checklist Completed!</span></p>
                        <p class="just-bold my-text">Results: <a href="/results"><input type="button" value="View Results" /></a> </p>
                    </div>
                    <hr style="width:95%;">
                    <h4>Additional Inforation Form</h4>
                    <h5>Optional</h5>
                    @if ((DB::table('teacher_additional_infos')->where('user_id', '=', Auth::user()->name))->first())
                    <p>*You have already provided details but you can update you responses.* </p>
                    @endif
                    <p>Please list addition information about {{Auth::user()->childname}}</p>

                    <form method="POST" style="width:80%" action="/profile/additional-teacher-info">
                        @csrf
                        <div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s goals and ambitions</label>
                                <textarea class="form-control" id="goals" name="goals" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s intrests</label>
                                <textarea class="form-control" id="intrests" name="intrests" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to intellectual ability</label>
                                <textarea class="form-control" id="extraIntinfo" name="extraIntinfo" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to creative ability</label>
                                <textarea class="form-control" id="extraCreinfo" name="extraCreinfo" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to social ability</label>
                                <textarea class="form-control" id="extraSocinfo" name="extraSocinfo" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to perceptual ability</label>
                                <textarea class="form-control" id="extraPreinfo" name="extraPreinfo" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to muscular control ability</label>
                                <textarea class="form-control" id="extraMucinfo" name="extraMucinfo" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to motor control ability</label>
                                <textarea class="form-control" id="extraMocinfo" name="extraMocinfo" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to spirituality</label>
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
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s additional traits</label>
                                <textarea class="form-control" id="traits" name="traits" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="form-navigation">
                            <button type="submit" class="button-74 btn btn-sucess float-right">Submit</button>
                        </div>
                    </form>


                    <!--if the user is a parent and has completed the checklist -->
                    @elseif ((DB::table('checklist_parents')->where('user_id', '=', Auth::user()->name))->first())
                    <div> <br>
                        <p class="just-bold my-text">Checklist: <span class="my-text myspan">Checklist Completed!</span></p>
                        <p class="just-bold my-text">Results: <a class="button-74" href="/results" style="line-height: 30px;">View Results</a> </p>
                    </div><br>
                    <hr style="width:95%;">
                    <h4>Additional Inforation Form</h4>
                    <h5>Optional</h5>
                    @if ((DB::table('parent_additional_infos')->where('user_id', '=', Auth::user()->name))->first())
                    <p>*You have already provided details but you can update you responses.* </p>
                    @endif
                    <p>Please list addition information about {{Auth::user()->childname}}</p>
                    <form method="POST" style="width:80%" action="/profile/additional-parent-info">
                        @csrf
                        <div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s goals and ambitions</label>
                                <textarea class="form-control" id="goals" name="goals" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s intrests</label>
                                <textarea class="form-control" id="intrests" name="intrests" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to cognative ability</label>
                                <textarea class="form-control" id="extracoginfo" name="extracoginfo" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to physical ability</label>
                                <textarea class="form-control" id="extraphyinfo" name="extraphyinfo" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to social emotional ability</label>
                                <textarea class="form-control" id="extraSEinfo" name="extraSEinfo" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to spirituality</label>
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
                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s additional traits</label>
                                <textarea class="form-control" id="traits" name="traits" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="form-navigation">
                            <button type="submit" class="button-74 btn btn-sucess float-right">Submit</button>
                        </div>
                    </form>


                    <!--if the user has not completed the checklist -->
                    @else
                    <div>
                        <p class="just-bold my-text">Checklist: <a class="button-74" href="/checklist" style="line-height: 30px;">Start Your Checklist</a></p>
                    </div>
                    <div>
                        <p class="just-bold my-text">Results: No data to display</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
