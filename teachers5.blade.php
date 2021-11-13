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
                        <div class="myp-b" style=" width: 67.5%; background-color: rgb(116, 194, 92); color: white; padding: 2%; border-radius: 15px;"> </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Teacher Assessment</h2><br>
                        <form method="POST" class="checklist-form" action="/submit/teacherform5">
                            @csrf
                            <div class="form-section kw-multistep-body">
                                <div class="grid-container">
                                    <div data-toggle="tooltip" data-placement="top" title="•	Power
•	Speed
•	Strength
•	Endurance
•	Suppleness">
                                        <h4>Muscular Control</h4>
                                    </div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container chk-b-color" id="muc28" type="form-control">
                                    <div><label for="muc28" class="grid-content-left">Frustrated if motor coordination lags behind intellectual development (e.g., pencil grip).</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="muc28" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="muc28"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="muc28"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="muc28"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="muc28"></div>
                                </div>
                                <div class="grid-container" id="muc29" type="form-control">
                                    <div><label for="muc29" class="grid-content-left">Readily takes to skill and control required for handwriting/keyboarding.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="muc29" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="muc29"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="muc29"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="muc29"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="muc29"></div>
                                </div>
                                <div class="grid-container chk-b-color" id="muc30" type="form-control">
                                    <div><label for="muc30" class="grid-content-left">Unusual strength/speed/endurance/suppleness.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="muc30" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="muc30"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="muc30"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="muc30"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="muc30"></div>
                                </div>
                            </div>
                            <div class="form-navigation center-item">
                                <button type="submit" class="btn button-74 btn-sucess float-right">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
