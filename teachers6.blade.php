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
                        <div class="myp-b" style=" width: 75%; background-color: rgb(116, 194, 92); color: white; padding: 2%; border-radius: 15px;"> </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Teacher Assessment</h2><br>
                        <form method="POST" class="checklist-form" action="/submit/teacherform6">
                            @csrf
                            <div class="form-section kw-multistep-body">
                                <div class="grid-container">
                                    <div data-toggle="tooltip" data-placement="top" title="•	Speed (reflexes)
•	Agility
•	Coordination
•	Balance">
                                        <h4>Motor Control</h4>
                                    </div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container chk-b-color" id="moc31" type="form-control">
                                    <div><label for="moc31" class="grid-content-left">Speed during physical activities (without training).</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="moc31" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="moc31"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="moc31"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="moc31"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="moc31"></div>
                                </div>
                                <div class="grid-container" id="moc32" type="form-control">
                                    <div><label for="moc32" class="grid-content-left">Strong motor control at an early age/stage of development.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="moc32" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="moc32"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="moc32"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="moc32"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="moc32"></div>
                                </div>
                                <div class="grid-container chk-b-color" id="moc33" type="form-control">
                                    <div><label for="moc33" class="grid-content-left">Well-coordinated (doesn’t bump into objects/fall over).</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="moc33" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="moc33"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="moc33"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="moc33"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="moc33"></div>
                                </div>
                            </div>
                            <div class="form-navigation">
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
