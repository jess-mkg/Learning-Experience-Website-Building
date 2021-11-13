@extends('layouts.app')

@section('content')
<title>Profile</title>
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="my-card other-border">
                <div>
                    <div class="backg profile-containter pt-5 pb-3">
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
                        <div class="profile-info mt-3">
                            <h1 class="white-text ">{{ Auth::user()->name }}</h1>
                            <h2 class="white-text ">{{ Auth::user()->childname }}</h2>
                        </div>
                        <button class="button-12" onclick="myFunction1()">Change Picture</button>
                        <div id="pic-options">
                            <form method="POST" action="/profile/update-profile-pic" class="pro-pic-form">
                                @csrf
                                <div class="table-container">
                                    <!--<div>Icons made by <a href="https://www.freepik.com"
                                    title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"
                                    title="Flaticon">www.flaticon.com</a></div>-->
                                    <div class="pro-pic-form">
                                        <div class="">
                                            <div class="profile-pic-window-sm"><img class="pro-pic" src="/png/crocodile.png"></div>
                                            <div class="grid-item"><input type="radio" value="1" name="photo"></div>
                                        </div>
                                        <div class="">
                                            <div class="profile-pic-window-sm"><img class="pro-pic" src="/png/hedgehog.png"></div>
                                            <div class="grid-item"><input type="radio" value="2" name="photo"></div>
                                        </div>
                                        <div class="">
                                            <div class="profile-pic-window-sm"><img class="pro-pic" src="/png/kangaroo.png"></div>
                                            <div class="grid-item"><input type="radio" value="3" name="photo"></div>
                                        </div>
                                        <div class="">
                                            <div class="profile-pic-window-sm"><img class="pro-pic" src="/png/koala.png"></div>
                                            <div class="grid-item"><input type="radio" value="4" name="photo"></div>
                                        </div>
                                        <div class="">
                                            <div class="profile-pic-window-sm"><img class="pro-pic" src="/png/ostrich.png"></div>
                                            <div class="grid-item"><input type="radio" value="5" name="photo"></div>
                                        </div>
                                        <div class="">
                                            <div class="profile-pic-window-sm"><img class="pro-pic" src="/png/owl.png"></div>
                                            <div class="grid-item"><input type="radio" value="6" name="photo"></div>
                                        </div>
                                        <div class="">
                                            <div class="profile-pic-window-sm"><img class="pro-pic" src="/png/shark.png"></div>
                                            <div class="grid-item"><input type="radio" value="7" name="photo"></div>
                                        </div>
                                        <div class="">
                                            <div class="profile-pic-window-sm"><img class="pro-pic" src="/png/whale.png"></div>
                                            <div class="grid-item"><input type="radio" value="8" name="photo"></div>
                                        </div>
                                    </div>
                                    <div class="form-navigation">
                                        <button type="submit" class="button-12">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--if the user is a teacher and has completed the checklist -->
                    <div class="user-data">

                        @if ((DB::table('checklist_teachers')->where('user_id', '=', Auth::user()->name)->whereNotNull('sp40'))->first())

                        <div class=""> <br>
                            <p class="just-bold my-text p-2"><span class="just-bold">Assessment:</span> <span class="">Assessment Completed!</span></p>
                            <p class="just-bold my-text p-2"><a class="button-74" href="/results">View Results</a> </p>
                        </div><br>
                        <div class="extra ml-4 mr-4">
                            <hr style="width:95%;">
                            <h2 class="font-w">Additional Inforation Form</h2>
                            <h3 class="font-w">Optional</h3>
                            @if ((DB::table('teacher_additional_infos')->where('user_id', '=', Auth::user()->name))->first())
                            <p>*You have already provided details but you can update you responses.* </p>
                            @endif
                            <p>A trait is a quality or characteristic of a person that can include patterns of thoughts, feelings, and behaviours.
                                please fill out this form to give you a deeper understanding of {{Auth::user()->childname}}'s intrests, needs, and strengths.</p>



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
                        @elseif ((DB::table('checklist_parents')->where('user_id', '=', Auth::user()->name)->whereNotNull('spt40'))->first())
                        <div> <br>
                            <p class="just-bold my-text p-2"><span class="just-bold">Assessment:</span> <span class="">Assessment Completed!</span></p>
                            <p class="just-bold my-text p-2"><a class="button-74" href="/results" style="line-height: 30px;">View Results</a> </p>
                        </div><br>
                        <hr style="width:95%;">
                        <div class="extra ml-4 mr-4">

                            <h2 class="font-w">Additional Inforation Form</h2>
                            <h3 class="font-w">Optional</h3>
                            @if ((DB::table('parent_additional_infos')->where('user_id', '=', Auth::user()->name))->first())
                            <p>*You have already provided details but you can update you responses.* </p>
                            @endif
                            <p>A trait is a quality or characteristic of a person that can include patterns of thoughts, feelings, and behaviours.
                                please fill out this form to give you a deeper understanding of {{Auth::user()->childname}}'s intrests, needs, and strengths.</p>


                            <button class="button-74" onclick="myFunction2()">Additional Form</button>
                            <div class="add-form-container">
                                <div id="add-info">
                                    <form method="POST" action="/profile/additional-parent-info" class="form-add">
                                        @csrf
                                        <div clas="form-add">
                                            <div class="form-group text-length">
                                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s goals and ambitions</label>
                                                <textarea class="form-control" id="goals" name="goals" rows="2"></textarea>
                                            </div>
                                            <div class="form-group text-length">
                                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s intrests</label>
                                                <textarea class="form-control" id="intrests" name="intrests" rows="2"></textarea>
                                            </div>
                                            <div class="form-group text-length">
                                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to cognative ability</label>
                                                <textarea class="form-control" id="extracoginfo" name="extracoginfo" rows="2"></textarea>
                                            </div>
                                            <div class="form-group text-length">
                                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to physical ability</label>
                                                <textarea class="form-control" id="extraphyinfo" name="extraphyinfo" rows="2"></textarea>
                                            </div>
                                            <div class="form-group text-length">
                                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to social emotional ability</label>
                                                <textarea class="form-control" id="extraSEinfo" name="extraSEinfo" rows="2"></textarea>
                                            </div>
                                            <div class="form-group text-length">
                                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s traits in relation to spirituality</label>
                                                <textarea class="form-control" id="extrasptinfo" name="extrasptinfo" rows="2"></textarea>
                                            </div>

                                            <div class="form-group text-length">
                                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s behaviour</label>
                                                <textarea class="form-control" id="behaviour" name="behaviour" rows="2"></textarea>
                                            </div>
                                            <div class="form-group text-length">
                                                <label for="exampleFormControlTextarea1">{{Auth::user()->childname}}'s additional traits</label>
                                                <textarea class="form-control" id="traits" name="traits" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="p-2 form-navigation">
                                            <button type="submit" class="button-74 btn btn-sucess center">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <!--if the user has not completed the checklist -->
                        @else
                        @if ((DB::table('checklist_parents')->where('user_id', '=', Auth::user()->name)->whereNotNull('cog16'))->first())
                        <div>
                            <p class="just-bold my-text">Assessment: <a class="button-74" href="/start-assessment" style="line-height: 30px;">Continue Your Assessment</a></p>
                        </div>
                        <div>
                            <p class="just-bold my-text">Results: No data to display</p>
                        </div>
                        @elseif ((DB::table('checklist_teachers')->where('user_id', '=', Auth::user()->name)->whereNotNull('int11'))->first())
                        <div>
                            <p class="just-bold my-text">Assessment: <a class="button-74" href="/start-assessment" style="line-height: 30px;">Continue Your Assessment</a></p>
                        </div>
                        <div>
                            <p class="just-bold my-text">Results: No data to display</p>
                        </div>
                        @else
                        <div>
                            <p class="just-bold my-text">Assessment: <a class="button-74" href="/start-assessment" style="line-height: 30px;">Start Your Assessment</a></p>
                        </div>
                        <div>
                            <p class="just-bold my-text">Results: No data to display</p>
                        </div>
                        @endif

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function myFunction1() {
        var x = document.getElementById("pic-options");
        if (x.style.display === "flex") {
            x.style.display = "none";
        } else {
            x.style.display = "flex";
        }
    }


    function myFunction2() {
        var x = document.getElementById("add-info");
        if (x.style.display === "flex") {
            x.style.display = "none";
        } else {
            x.style.display = "flex";
        }
    }
</script>
@endsection
