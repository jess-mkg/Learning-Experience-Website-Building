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
                        <div class="myp-b" style=" width: 82.5%; background-color: rgb(116, 194, 92); color: white; padding: 2%; border-radius: 15px;"> </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Teacher Assessment</h2><br>
                        <form method="POST" class="checklist-form" action="/submit/teacherform7">
                            @csrf
                            <div class="form-section">
                                <div class="grid-container">
                                    <div data-toggle="tooltip" data-placement="top" title="•	Self-awareness
•	Mindfulness
•	Follow intuition
•	Reach states of flow
•	Meditate, use prayer, silence">
                                        <h4>Spiritual</h4>
                                    </div>
                                    <div class="grid-labels"><label>Strongly Disagree</label></div>
                                    <div class="grid-labels"><label>Disagree</label></div>
                                    <div class="grid-labels"><label>Neutral</label></div>
                                    <div class="grid-labels"><label>Agree</label></div>
                                    <div class="grid-labels"><label>Strongly Agree</label></div>
                                </div>
                                <div class="grid-container chk-b-color" id="sp34" type="form-control">
                                    <div><label for="sp34" class="grid-content-left">Capacity to understand deep existential questions.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="sp34" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="sp34"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="sp34"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="sp34"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="sp34"></div>
                                </div>
                                <div class="grid-container" id="sp35" type="form-control">
                                    <div><label for="sp35" class="grid-content-left">Engages in deep existentialist questioning Flexibility, inner freedom, balance and inner peace in times of crisis.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="sp35" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="sp35"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="sp35"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="sp35"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="sp35"></div>
                                </div>
                                <div class="grid-container chk-b-color" id="sp36" type="form-control">
                                    <div><label for="sp36" class="grid-content-left">Can analyse the meaning of personal experiences.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="sp36" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="sp36"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="sp36"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="sp36"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="sp36"></div>
                                </div>
                                <div class="grid-container" id="sp37" type="form-control">
                                    <div><label for="sp37" class="grid-content-left">High moral/personal values (especially prior to influences of development/training).</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="sp37" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="sp37"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="sp37"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="sp37"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="sp37"></div>
                                </div>
                                <div class="grid-container chk-b-color" id="sp38" type="form-control">
                                    <div><label for="sp38" class="grid-content-left">Affinity with animals.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="sp38" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="sp38"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="sp38"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="sp38"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="sp38"></div>
                                </div>
                                <div class="grid-container" id="sp39" type="form-control">
                                    <div><label for="sp39" class="grid-content-left">Strong connection to nature/land/Country.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="sp39" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="sp39"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="sp39"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="sp39"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="sp39"></div>
                                </div>
                                <div class="grid-container chk-b-color" id="sp40" type="form-control">
                                    <div><label for="sp40" class="grid-content-left">Strong connections to culture.</label></div>
                                    <div class="grid-item"><input type="radio" value="1" name="sp40" required></div>
                                    <div class="grid-item"><input type="radio" value="2" name="sp40"></div>
                                    <div class="grid-item"><input type="radio" value="3" name="sp40"></div>
                                    <div class="grid-item"><input type="radio" value="4" name="sp40"></div>
                                    <div class="grid-item"><input type="radio" value="5" name="sp40"></div>
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
