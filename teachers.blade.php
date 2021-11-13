@extends('layouts.app')

@section('content')
<title>Teachers Assessment</title>
<link href="/css/style.css" rel="stylesheet">
<div class="container">
    <section>
        <div class="row justify-content-center">
            <div class="checklist-card-size">
                <div class="my-progress-bar" style="margin: 20px;">
                    <div class="p-container" style="margin: auto; background-color: rgb(192, 192, 192); width: 50%; border-radius: 20px;">
                        <div class="myp-b" style=" width: 27.5%; background-color: rgb(192, 192, 192); color: white; padding: 2%; border-radius: 15px;"> </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Teacher Assessment</h2><br>
                        <form method="POST" class="checklist-form" action="/submit/teacherform1" multistep kw-cloak>
                            @csrf
                            <div class="">
                                <div class="form-section">
                                    <div class="grid-container">
                                        <div data-toggle="tooltip" data-placement="top" title="•	General intelligence
•	Fluid, crystallised reasoning
•	Verbal
•	Spatial
•	Numerical
•	Memory: Declarative, procedural, short-term (working), long-term">
                                            <h4>Intellectual</h4>
                                        </div>
                                        <div class="grid-labels"><label>Strongly Disagree</label></div>
                                        <div class="grid-labels"><label>Disagree</label></div>
                                        <div class="grid-labels"><label>Neutral</label></div>
                                        <div class="grid-labels"><label>Agree</label></div>
                                        <div class="grid-labels"><label>Strongly Agree</label></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="int1" type="form-control">
                                        <div><label for="int1" class="grid-content-left">Has a sizeable vocabulary for age and peers.</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="int1" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="int1"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="int1"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="int1"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="int1"></div>
                                    </div>
                                    <div class="grid-container" id="int2" type="form-control">
                                        <div><label for="int2" class="grid-content-left">Reads and/or listens to texts at a higher level.</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="int2" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="int2"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="int2"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="int2"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="int2"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="int3" type="form-control">
                                        <div><label for="int3" class="grid-content-left">School grade success with limited training/study.</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="int3" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="int3"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="int3"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="int3"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="int3"></div>
                                    </div>
                                    <div class="grid-container" id="int4" type="form-control">
                                        <div><label for="int4" class="grid-content-left">Outside school high achievement (with limited training/study).</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="int4" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="int4"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="int4"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="int4"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="int4"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="int5" type="form-control">
                                        <div><label for="int5" class="grid-content-left">Asks high level, in-depth questions.</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="int5" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="int5"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="int5"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="int5"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="int5"></div>
                                    </div>
                                    <div class="grid-container" id="int6" type="form-control">
                                        <div><label for="int6" class="grid-content-left">Easily understands new concepts (or may take a while but once understood is able to teach/explain to others).</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="int6" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="int6"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="int6"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="int6"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="int6"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="int7" type="form-control">
                                        <div><label for="int7" class="grid-content-left">Readily able to recall factual information.</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="int7" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="int7"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="int7"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="int7"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="int7"></div>
                                    </div>
                                    <div class="grid-container" id="int8" type="form-control">
                                        <div><label for="int8" class="grid-content-left">Able to teach/explain to others.</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="int8" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="int8"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="int8"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="int8"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="int8"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="int9" type="form-control">
                                        <div><label for="int9" class="grid-content-left">Intense sense of humour (use with caution for students with diverse needs e.g., ASD).</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="int9" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="int9"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="int9"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="int9"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="int9"></div>
                                    </div>
                                    <div class="grid-container" id="int10" type="form-control">
                                        <div><label for="int10" class="grid-content-left">Deep knowledge and range of interests.</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="int10" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="int10"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="int10"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="int10"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="int10"></div>
                                    </div>
                                    <div class="grid-container chk-b-color" id="int11" type="form-control">
                                        <div><label for="int11" class="grid-content-left">Perfectionism.</label></div>
                                        <div class="grid-item"><input type="radio" value="1" name="int11" required></div>
                                        <div class="grid-item"><input type="radio" value="2" name="int11"></div>
                                        <div class="grid-item"><input type="radio" value="3" name="int11"></div>
                                        <div class="grid-item"><input type="radio" value="4" name="int11"></div>
                                        <div class="grid-item"><input type="radio" value="5" name="int11"></div>
                                    </div>
                                </div>
                                <div class="form-navigation center-item">
                                    <button type="submit" class="btn button-74 btn-sucess">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
