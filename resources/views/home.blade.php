@extends('layouts.app')

@section('content')
<title>Profile</title>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card" style="padding:15px">
                <div class="card-body">
                    <div class="profile-containter mt-3">
                        <div class="profile-pic-window">
                            @if ((Auth::user()->photo == 1))
                            <img class="pro-pic" src="/png/crocodile.png">
                            @elseif ((Auth::user()->photo == 2))
                            <img class="pro-pic" src="/png/hedgehog.png">
                            @elseif ((Auth::user()->photo == 3))
                            <img class="pro-pic" src="/png/kangaroo.png">
                            @elseif ((Auth::user()->photo == 4))
                            <img class="pro-pic" src="/png/koala.png">
                            @elseif ((Auth::user()->photo == 5))
                            <img class="pro-pic" src="/png/ostrich.png">
                            @elseif ((Auth::user()->photo == 6))
                            <img class="pro-pic" src="/png/owl.png">
                            @elseif ((Auth::user()->photo == 7))
                            <img class="pro-pic" src="/png/shark.png">
                            @elseif ((Auth::user()->photo == 8))
                            <img class="pro-pic" src="/png/whale.png">
                            @else
                            <img class="pro-pic" src="/png/koala.png">
                            @endif

                        </div>
                        <button class="button-12" onclick="myFunction()">Change Picture</button>
                        <div id="pic-options">
                            <form method="POST" action="/profile/update-profile-pic" class="pro-pic-form">
                                @csrf
                                <div class="table-container">
                                    <div class="pro-pic-form">
                                        <div class="">
                                            <div class="profile-pic-window-sm"></div>
                                            <div class="grid-item"><input type="radio" value="1" name="photo"></div>
                                        </div>
                                        <div class="">
                                            <div class="profile-pic-window-sm"></div>
                                            <div class="grid-item"><input type="radio" value="2" name="photo"></div>
                                        </div>
                                        <div class="">
                                            <div class="profile-pic-window-sm"></div>
                                            <div class="grid-item"><input type="radio" value="3" name="photo"></div>
                                        </div>
                                        <div class="">
                                            <div class="profile-pic-window-sm"></div>
                                            <div class="grid-item"><input type="radio" value="4" name="photo"></div>
                                        </div>
                                        <div class="">
                                            <div class="profile-pic-window-sm"></div>
                                            <div class="grid-item"><input type="radio" value="5" name="photo"></div>
                                        </div>
                                        <div class="">
                                            <div class="profile-pic-window-sm"></div>
                                            <div class="grid-item"><input type="radio" value="6" name="photo"></div>
                                        </div>
                                        <div class="">
                                            <div class="profile-pic-window-sm"></div>
                                            <div class="grid-item"><input type="radio" value="7" name="photo"></div>
                                        </div>
                                        <div class="">
                                            <div class="profile-pic-window-sm"></div>
                                            <div class="grid-item"><input type="radio" value="8" name="photo"></div>
                                        </div>
                                    </div>
                                    <div class="form-navigation">
                                        <button type="submit" class="button-12">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="profile-info mt-3">
                            <h3>{{ Auth::user()->name }}</h3>
                            <h4>{{ Auth::user()->childname }}</h4>
                        </div>
                    </div>
                    <br>
                    <!--if the user is a teacher and has completed the checklist -->
                    @if ((DB::table('checklist_teachers')->where('user_id', '=', Auth::user()->name))->first())
                    <div>
                        <p class="just-bold my-text">Assessment: <span class="my-text myspan">Assessment Completed!</span></p>
                        <p class="just-bold my-text">Results: <a href="/results" class="button-74" style="line-height: 30px;">View Results</a> </p>
                    </div>
                    <div class="extra">
                        <hr style="width:95%;">
                        <h4>Additional Inforation Form</h4>
                        <h5>Optional</h5>
                        @if ((DB::table('teacher_additional_infos')->where('user_id', '=', Auth::user()->name))->first())
                        <p>*You have already provided details but you can update you responses.* </p>
                        @endif
                        <p>Please list addition information about {{Auth::user()->childname}}</p>

                        <form method="POST" style="width:80%" action="/profile/additional-teacher-info" class="form-add">
                            @csrf
                            <div class="form-add">
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
                                    <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s behaviour</label>
                                    <textarea class="form-control" id="behaviour" name="behaviour" rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s additional traits</label>
                                    <textarea class="form-control" id="traits" name="traits" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="form-navigation">
                                <button type="submit" class="button-74 btn btn-sucess center">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--if the user is a parent and has completed the checklist -->
                    @elseif ((DB::table('checklist_parents')->where('user_id', '=', Auth::user()->name))->first())
                    <div> <br>
                        <p class="just-bold my-text">Assessment: <span class="my-text myspan">Assessment Completed!</span></p>
                        <p class="just-bold my-text">Results: <a class="button-74" href="/results" style="line-height: 30px;">View Results</a> </p>
                    </div><br><br>
                    <div class="extra">
                        <hr style="width:95%;">
                        <h4>Additional Inforation Form</h4>
                        <h5>Optional</h5>
                        @if ((DB::table('parent_additional_infos')->where('user_id', '=', Auth::user()->name))->first())
                        <p>*You have already provided details but you can update you responses.* </p>
                        @endif
                        <p>Please list addition information about {{Auth::user()->childname}}</p>
                        <form method="POST" style="width:80%" action="/profile/additional-parent-info" class="form-add">
                            @csrf
                            <div clas="form-add">
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
                                    <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s behaviour</label>
                                    <textarea class="form-control" id="behaviour" name="behaviour" rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s additional traits</label>
                                    <textarea class="form-control" id="traits" name="traits" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="form-navigation">
                                <button type="submit" class="button-74 btn btn-sucess center">Submit</button>
                            </div>
                        </form>
                    </div>


                    <!--if the user has not completed the checklist -->
                    @else
                    <div>
                        <p class="just-bold my-text">Assessment: <a class="button-74" href="/checklist" style="line-height: 30px;">Start Your Assessment</a></p>
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
<script>
    function myFunction() {
        var x = document.getElementById("pic-options");
        if (x.style.display === "flex") {
            x.style.display = "none";
        } else {
            x.style.display = "flex";
        }
    }
</script>
@endsection
